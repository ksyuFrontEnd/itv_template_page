<footer class="footer" id="footer">                
    <div class="footer__container _container"> 
        <div class="footer__logo">
            <a href="#">
                <?php 
                    if ( has_custom_logo() ) {
                        echo get_custom_logo();
                    }
                ?>                
            </a>         
        </div>             
        <div class="footer__nav">
            <h3 class="footer__title">Навігація</h3>
            <?php wp_nav_menu( [
                'theme_location'       => 'footer',                          
                'container'            => false,                           
                'menu_class'           => 'footer__list',
                'menu_id'              => false,    
                'echo'                 => true,                            
                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                ] ) 
            ?>            
        </div>
        <div class="footer__social">            
            <h3 class="footer__title">Соціальні мережі</h3>            
            <ul class="footer__list">                            
            
                <!-- Додані поля для іконок у svg і додано посилання на інстаграм -->
                <li>
                    <div class="footer__social-container">
                        <div class="footer__social-icon">
                            <?php
                                $facebookIcon = get_field('facebook_icon', 'option');
                                $facebook = get_field('facebook', 'option'); 
                                $facebookLink = get_field('facebok_link', 'option');
                            ?>
                            <a href="<?php echo $facebookLink; ?>" target="_blank">
                                <img src="<?php echo $facebookIcon['url']; ?>" alt="<?php echo $facebookIcon['url']; ?>">
                            </a>
                        </div>
                        <div class="footer__social-link">
                            <a href="<?php echo $facebookLink; ?>" target="_blank" class="footer__link"><?php echo $facebook; ?></a>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="footer__social-container">
                        <div class="footer__social-icon">
                            <?php
                                $telegramIcon = get_field('telegram_icon', 'option');
                                $telegram = get_field('telegram', 'option'); 
                                $telegramLink = get_field('telegram_link', 'option');
                            ?>
                            <a href="<?php echo $telegramLink; ?>" target="_blank">
                                <img src="<?php echo $telegramIcon['url']; ?>" alt="<?php echo $telegramIcon['url']; ?>">
                            </a>
                        </div>
                        <div class="footer__social-link">
                            <a href="<?php echo $telegramLink; ?>" target="_blank" class="footer__link"><?php echo $telegram; ?></a>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="footer__social-container">
                        <div class="footer__social-icon">
                            <?php
                                $linkedinIcon = get_field('linkedin_icon', 'option');
                                $linkedin = get_field('linkedin', 'option'); 
                                $linkedinLink = get_field('linkedin_link', 'option');
                            ?>
                            <a href="<?php echo $linkedinLink; ?>" target="_blank">
                                <img src="<?php echo $linkedinIcon['url']; ?>" alt="<?php echo $linkedinIcon['url']; ?>">
                            </a>
                        </div>
                        <div class="footer__social-link">
                            <a href="<?php echo $linkedinLink; ?>" target="_blank" class="footer__link"><?php echo $linkedin; ?></a>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="footer__social-container">
                        <div class="footer__social-icon">
                            <?php
                                $instagramIcon = get_field('instagram_icon', 'option');
                                $instagram = get_field('instagram', 'option'); 
                                $instagramLink = get_field('instagram_link', 'option');
                            ?>
                            <a href="<?php echo $instagramLink; ?>" target="_blank">
                                <img src="<?php echo $instagramIcon['url']; ?>" alt="<?php echo $instagramIcon['url']; ?>">
                            </a>
                        </div>
                        <div class="footer__social-link">
                            <a href="<?php echo $instagramLink; ?>" target="_blank" class="footer__link"><?php echo $instagram; ?></a>
                        </div>
                    </div>
                </li> 
            </ul>  
        </div>
        <div class="footer__contact">            
            <h3 class="footer__title">Контакти</h3>
            <p class="footer__contact-text"><a href="tel:<?php the_field('phone_number', 'option') ?>" class="footer__link"><?php the_field('phone', 'option') ?></a></p>
            <p class="footer__content-text"><a href="mailto:<?php the_field('mail', 'option') ?>" class="footer__link"><?php the_field('mail', 'option') ?></a></p>
            <!-- Соц. мережі на менших екранах -->
            <div class="footer__contact-social">
                <div class="footer__social-icon">     
                    <a href="<?php echo $facebookLink; ?>" target="_blank">
                        <img src="<?php echo $facebookIcon['url']; ?>" alt="<?php echo $facebookIcon['url']; ?>">
                    </a>
                </div>
                <div class="footer__social-icon">    
                    <a href="<?php echo $telegramLink; ?>" target="_blank">
                        <img src="<?php echo $telegramIcon['url']; ?>" alt="<?php echo $telegramIcon['url']; ?>">
                    </a>
                </div>                
                <div class="footer__social-icon">       
                    <a href="<?php echo $linkedinLink; ?>" target="_blank">
                        <img src="<?php echo $linkedinIcon['url']; ?>" alt="<?php echo $linkedinIcon['url']; ?>">
                    </a>
                </div>
                <div class="footer__social-icon">     
                    <a href="<?php echo $instagramLink; ?>" target="_blank">
                        <img src="<?php echo $instagramIcon['url']; ?>" alt="<?php echo $instagramIcon['url']; ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <p class="footer__text"> <?php echo date( "Y" ); ?> &#169; IT VOLUNTEERS | Всі права захищені</p>        
    </div> 
</footer>
<?php wp_footer(); ?>  
</body>
</html>
