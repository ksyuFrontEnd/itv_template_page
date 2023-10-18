<?php
/**
 * Template part for displaying posts
*/

?>	
<section class="form" id="form">
    <div class="form__container _container">
        <div class="form__content">
            <h2 class="form__title"><?php the_field('world__title', 'option'); ?></h2>
            <img src="<?php the_field('world__image', 'option'); ?>" alt="sunflower"> 
        </div>
        <div class="form__column">
            
            <div id="contactForm" name="form-message" class="form__message" method="post">
                <?php echo do_shortcode('[contact-form-7 id="568668a" title="Contact form"]') ?>
                
                <div id="popup-success" class="popup closen">
                    <div class="popup__container">
                        <img class="popup__star-big" src="<?php the_field('popup-star-big', 'option'); ?>" alt="star">                   
                        <button class="popup__close" type="button">&#215;</button>
                        <p class="popup__title"><?php the_field('popup__title', 'option'); ?></p>
                        <p class="popup__text"><?php the_field('popup__text', 'option'); ?></p> 
                        <img class="popup__star-small" src="<?php the_field('popup-star-small', 'option'); ?>" alt="star">   
                    </div> 
                </div> 

            </div>

        </div>
    </div>
</section>
