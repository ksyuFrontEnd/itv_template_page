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
                <li><a href="<?php the_field('facebok_link', 'option'); ?>" target="_blank" class="footer__link icon-facebook"><?php the_field('facebook', 'option'); ?></a></li>
                <li><a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank" class="footer__link icon-telegram"><?php the_field('telegram', 'option'); ?></a></li>
                <li><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank" class="footer__link icon-linkedin"><?php the_field('linkedin', 'option'); ?></a></li>                            
            </ul>            
        </div>
        <div class="footer__contact">            
            <h3 class="footer__title">Контакти</h3>
            <p class="footer__contact-text"><a href="tel:<?php the_field('phone_number', 'option') ?>" class="footer__link"><?php the_field('phone', 'option') ?></a></p>
            <p class="footer__content-text"><a href="mailto:<?php the_field('mail', 'option') ?>" class="footer__link"><?php the_field('mail', 'option') ?></a></p>
            <div class="footer__contact-social">
                <a href="<?php the_field('facebok_link', 'option'); ?>" target="_blank" class="footer__link icon-facebook"></a>
                <a href="<?php the_field('telegram_link', 'option'); ?>" target="_blank" class="footer__link icon-telegram"></a>                
                <a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank" class="footer__link icon-linkedin"></a>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <p class="footer__text"><?php the_field('footer_year', 'option'); ?> &#169; IT VOLUNTEERS | Всі права захищені</p>        
    </div> 
</footer>
<?php wp_footer(); ?>  
</body>
</html>
