<?php
/*
Template Name: home
*/
get_header();
?>
<section class="description">  
    <div class="description__container _container">
        <div class="description__img"><img src="<?php the_field('description__img'); ?>" alt="description"></div>
        <div class="description__content">
            <div class="description__header">
                <h1 class="description__title"><?php the_field('description__title'); ?></h1> 
                <img src="<?php the_field('description__img-star'); ?>" alt="star"> 
            </div>               
            <p class="description__text text"><?php the_field('description__text'); ?></p>  
            <button class="description__btn"><?php the_field('description__btn'); ?></button>               
        </div>            
    </div>
</section>
<section class="welcome">
    <div class="welcome__container _container">
        <h2 class="welcome__title home__title"><?php the_field('welcome__title'); ?></h2>
        <p class="welcome__text home__text"><?php the_field('welcome__text'); ?></p>
        <p class="welcome__standua"><?php the_field('welcome__standua'); ?></p>
    </div>                
</section>
<section class="purpose">
    <div class="purpose__container _container">
        <div class="purpose__column purpose__img"><img src="<?php the_field('purpose__img'); ?>" alt="purpose"></div>
        <div class="purpose__column">
            <h2 class="purpose__title home__title"><?php the_field('purpose__title'); ?></h2>
            <p class="purpose__text home__text"><?php the_field('purpose__text-1'); ?></p>
            <p class="purpose__text home__text"><?php the_field('purpose__text-2'); ?></p>
            <a href="<?php the_field('purpose__button-url'); ?>" class="purpose__button home__button"><?php the_field('purpose__button'); ?></a> 
        </div>
    </div>
</section>
<section class="home-services">
    <div class="home-services__container _container">
        <h2 class="home-services__title home__title"><?php the_field('home-services__title'); ?></h2>
        <div class="home-services-slider swiper">
            <div class="home-services__wrapper swiper-wrapper">            
            <?php 
                $rows = get_field('home-services');
                if( $rows ) { 
                    foreach( $rows as $row ) {                                                 
                        $link = $row['home-services__link'];
                        echo '<div class="home-services__slide swiper-slide">';
                            echo '<h3 class="home-services__name">';
                                echo ( $row['home-services__name'] ); 
                            echo '</h3>';
                            echo '<p class="home-services__description">';
                                echo ( $row['home-services__description'] );
                            echo '</p>';  
                            echo '<a href="' . esc_url( $link ) . '" class="home-services__button">&#129133;</a>'; 
                        echo '</div>';  
                    } 
                } 
                ?>                  
            </div>
            <div class="home-services__pagination swiper-pagination"></div>  
        </div>
    </div>  
    <!-- <?php 
        $link = get_field('home-projects__button-url');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="full-projects__button2 home__button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_target ); ?></a>
    <?php endif; ?> -->  
</section>
<section class="customer">
    <div class="customer__box _container">
        <h2 class="customer__title home__title"><?php the_field('customer__title'); ?></h2>
        <p class="customer__text home__text"><?php the_field('customer__text'); ?></p>
        <div class="customer__container">
            <div class="customer__content">
                <p class="customer__name customer__color1"><?php the_field('customer__name-1'); ?></p>
                <p class="customer__name customer__color2"><?php the_field('customer__name-2'); ?></p>
                <p class="customer__name customer__color3"><?php the_field('customer__name-3'); ?></p>
                <p class="customer__name customer__color4"><?php the_field('customer__name-4'); ?></p>
            </div>
            <div class="customer__img"><img src="<?php the_field('customer__img'); ?>" alt="customer"></div>
        </div>
    </div>                
</section>
<!-- home-projects only mobile, swiper, repeater -->
<section class="home-projects">
    <div class=" _container">
        <h2 class="home-projects__title home__title"><?php the_field('home-projects__title'); ?></h2>  
        <div class="home-projects-slider swiper">  
            <div class="home-projects__wrapper swiper-wrapper"> 
                <?php 
                $rows = get_field('implemented_projects');
                if( $rows ) { 
                    foreach( $rows as $row ) { 
                        $image = $row['home-project__img'];
                        $link = $row['home-projects__site-url'];
                        echo '<div class="home-projects__slide swiper-slide">';   
                            echo '<div class="home-projects__img">'; 
                                echo wp_get_attachment_image( $image, 'full' ); 
                            echo '</div>'; 
                            echo '<h3 class="home-projects__name">';
                                echo ( $row['home-project__name'] ); 
                            echo '</h3>';
                            echo '<p class="home-projects__description">';
                                echo ( $row['home-project__description'] );
                            echo '</p>';  
                            echo '<a href="' . esc_url( $link ) . '" class="home-projects__button-site home__button" target="_blank">'; 
                                echo ( $row['home-projects__button-site'] );
                            echo '</a>';
                        echo '</div>';  
                    } 
                } 
                ?>
            </div>    
            <div class="home-projects__pagination swiper-pagination"></div>
        </div>
        <a href="<?php the_field('home-projects__button-url'); ?>" class="home-projects__button2 home__button"><?php the_field('home-project__button2'); ?></a>
    </div>    
</section>
<!-- projects full screen and tablet-->
<section class="full-projects">
    <div class=" _container">
        <h2 class="full-projects__title home__title"><?php the_field('home-projects__title'); ?></h2>  
        <div class="full-projects__container">    
            <div class="full-projects__row">
                <div class="full-projects__slide1">
                    <div class="full-projects__img1"><img src="<?php the_field('home-project__img1'); ?>" alt="project"></div>
                    <h3 class="full-projects__name"><?php the_field('home-project__name1'); ?></h3>
                    <p class="full-projects__description"><?php the_field('home-project__description1'); ?></p>                    
                </div>            
                <div class="full-projects__slide2">
                    <div class="full-projects__img2"><img src="<?php the_field('home-project__img2'); ?>" alt="project"></div>
                    <h3 class="full-projects__name"><?php the_field('home-project__name2'); ?></h3>
                    <p class="full-projects__description"><?php the_field('home-project__description2'); ?></p>                    
                </div>
            </div>        
            <div class="full-projects__row">
                <div class="full-projects__slide3">
                    <div class="full-projects__img3"><img src="<?php the_field('home-project__img3'); ?>" alt="project"></div>
                    <h3 class="full-projects__name"><?php the_field('home-project__name3'); ?></h3>
                    <p class="full-projects__description"><?php the_field('home-project__description3'); ?></p>                    
                </div>
                <div class="full-projects__slide4">
                    <div class="full-projects__img4"><img src="<?php the_field('home-project__img4'); ?>" alt="project"></div>
                    <h3 class="full-projects__name"><?php the_field('home-project__name4'); ?></h3>
                    <p class="full-projects__description"><?php the_field('home-project__description4'); ?></p>                    
                </div>  
            </div>                     
        </div>
        <a href="<?php the_field('home-projects__button-url'); ?>" class="home-projects__button2 home__button"><?php the_field('home-project__button2'); ?></a>
    </div>
</section>  
<section class="team">
    <div class="team__box _container">
        <h2 class="team__title home__title"><?php the_field('team__title'); ?></h2>
        <div class="team__container">
            <div class="team__img"><img src="<?php the_field('team__img'); ?>" alt="team"></div>
            <div class="team__content">
                <p class="team__text home__text"><?php the_field('team__text-1'); ?></p>
                <p class="team__text home__text"><?php the_field('team__text-2'); ?></p>
                <a href="<?php the_field('team__button-url'); ?>" class="team__button home__button"><?php the_field('team__button'); ?></a> 
            </div>
        </div>
    </div>
</section>
<section class="question">
    <div class="_container">
        <h2 class="question__header home__title"><?php the_field('question__header'); ?></h2>
        <?php 
        $rows = get_field('question');
        if( $rows ) {        
            foreach( $rows as $row ) {
                echo '<div class="question__column">';
                    echo '<div class="question__text">';
                        echo '<p class="question__title">';
                            echo ( $row['question__title'] );
                        echo '</p>'; 
                        echo '<p class="question__answer closen">';
                            echo ( $row['question__answer'] );
                        echo '</p>'; 
                    echo '</div>'; 
                    echo '<div class="question__btn"></div>';
                echo '</div>';
            }        
        }
        ?>        
    </div>    
</section>         
<?php get_footer(); ?>
