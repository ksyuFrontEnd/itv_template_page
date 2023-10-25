<?php
/*
Template Name: services
*/
get_header();
?>
<section class="services">    
    <div class="services__container _container">       
        <div class="services__content">
            <h2 class="services__title title"><?php the_field('our-services-title'); ?></h2> 
            <p class="services__text text"><?php the_field('our-services-content-1'); ?></p>    
            <p class="services__text text"><?php the_field('our-services-content-2'); ?></p>                
        </div>  
        <div class="services__container-img"><img src="<?php the_field('our-services-img'); ?>" alt="services"></div>
    </div>    
</section>
<section class="team">    
    <div class="team__container _container">       
        <div class="team__container-img"><img src="<?php the_field('team-img'); ?>" alt="services"></div>    
        <h2 class="team__content"><?php the_field('our-team-content'); ?></h2> 
    </div>
</section>
<section class="support" id="support-it-consalting">    
    <div class="support__container _container">   
        <h2 class="support__title-mobile title"><?php the_field('it-consalting-title'); ?></h2>    
        <div class="support__container-img"><img src="<?php the_field('it-consalting-img'); ?>" alt="services"></div>
        <div class="support__content">
            <h2 class="support__title title"><?php the_field('it-consalting-title'); ?></h2>              
            <p class="support__text text"><?php the_field('it-consalting-text'); ?></p>    
            <a href="#form" class="support__button services__btn"><?php the_field('it-consalting-btn'); ?></a>               
        </div>          
    </div>    
</section>
<section class="development" id="support-ui-ux">    
    <div class="development__container _container">   
        <div class="development__content">
            <h2 class="development__title title"><?php the_field('development-design-title'); ?></h2> 
            <p class="development__text text"><?php the_field('development-design-text'); ?></p>    
            <a href="#form" class="development__button services__btn"><?php the_field('development-design-btn'); ?></a> 
            <img src="<?php the_field('development-img'); ?>" alt="services">
            <h2 class="development__title title" id="support-development"><?php the_field('development-title'); ?></h2> 
            <p class="development__text text"><?php the_field('development-text'); ?></p>    
            <a href="#form" class="development__button services__btn"><?php the_field('development-btn'); ?></a>                 
        </div>  
        <div class="development__container-img"><img src="<?php the_field('development-img'); ?>" alt="services"></div>        
    </div>    
</section>
<section class="support" id="support-tech">    
    <div class="support__container _container">    
        <h2 class="support__title-mobile title"><?php the_field('tech-support-title'); ?></h2>    
        <div class="support__container-img"><img src="<?php the_field('tech-support-img'); ?>" alt="services"></div>
        <div class="support__content">
            <h2 class="support__title title"><?php the_field('tech-support-title'); ?></h2> 
            <p class="support__text text"><?php the_field('tech-support-content'); ?></p>    
            <a href="#form" class="support__button services__btn"><?php the_field('tech-support-btn'); ?></a>               
        </div>          
    </div>    
</section>
<section class="advantages">
    <div class="advantages__container _container">
        <h2 class="advantages__title title"><?php the_field('advantages-title'); ?></h2> 
        <div class="advantages-slider swiper ">
            <div class="advantages__content swiper-wrapper">
                <div class="advantages__slide swiper-slide">
                    <h3 class="advantages__heading"><?php the_field('advantages-heading-1'); ?></h3> 
                    <p class="advantages__text"><?php the_field('advantages-text-1'); ?></p>   
                    <img src="<?php the_field('advantages-img-1'); ?>" alt="services"> 
                </div>
                <div class="advantages__slide swiper-slide">
                    <h3 class="advantages__heading"><?php the_field('advantages-heading-2'); ?></h3> 
                    <p class="advantages__text"><?php the_field('advantages-text-2'); ?></p>   
                    <img src="<?php the_field('advantages-img-2'); ?>" alt="services"> 
                </div>
                <div class="advantages__slide swiper-slide">
                    <h3 class="advantages__heading"><?php the_field('advantages-heading-3'); ?></h3> 
                    <p class="advantages__text"><?php the_field('advantages-text-3'); ?></p>   
                    <img src="<?php the_field('advantages-img-3'); ?>" alt="services"> 
                </div>
                <div class="advantages__slide swiper-slide">
                    <h3 class="advantages__heading"><?php the_field('advantages-heading-4'); ?></h3> 
                    <p class="advantages__text"><?php the_field('advantages-text-4'); ?></p>   
                    <img src="<?php the_field('advantages-img-4'); ?>" alt="services"> 
                </div>
            </div>
            <div class="pagination swiper-pagination"></div>              
        </div>
    </div>    
</section>
<?php get_template_part('template-parts/feedback'); ?>
<section class="trust">
    <div class="_container">    
        <h2 class="trust__title title"><?php the_field('trust-title'); ?></h2> 
        <div class="trust__container">
            <div class="trust__message">
                <p class="trust__message-text trust__message-gray"><?php the_field('trust-text-1'); ?></p> 
                <p class="trust__message-text trust__message-blue"><?php the_field('trust-text-2'); ?></p> 
                <img src="<?php the_field('trust-img'); ?>" alt="services">
            </div>
            <div>
                <p class="trust__text text"><?php the_field('trust-text-3'); ?></p> 
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/form' ); ?> 
<?php get_footer(); ?>
