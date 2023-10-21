<?php
/**
 * Template part for feedback posts
*/

?>


<?php

              $fbTitle = get_field('fb__title', 'option');
              ?>


<div class="fb_section">
              <div class="fb_container">
    <div class="fb__heading">
      <h2 class="fb__title"><?php echo $fbTitle; ?>
    </h2>
    <div class="fb__arrows">
      <button class="fb__arrow-prev"></button>
<button class="fb__arrow-next"></button>

</div>
    </div>
<div class="fb-slider swiper">
  
            
      <?php 
                $rows = get_field('fb__item', 'option');
                if( $rows ) { 
                  echo '<div class="fb__list swiper-wrapper">';
                    foreach( $rows as $row ) { 
                        $fbText = $row['fb__text'];
                        $fbName = $row['fb__name'];
                        $fbSpec = $row['fb__spec'];
                        $fbImg = $row['fb__img'];
          
                        echo '<div class="fb__item swiper-slide">';  
                        echo '<p class="fb__icon">“</p>';
                        echo '<p class="fb__text">';
                                echo ( $fbText );
                            echo '</p>';
                        echo '<div class="fb__info">';
          echo '<div class="fb__img">';
          echo wp_get_attachment_image( $fbImg, 'full' );
          echo '</div>';
          echo '<div>';
                echo '<p class="fb__name">';
                echo ( $fbName );
                echo '</p>';
          echo '<p class="fb__spec">';
          echo ($fbSpec); 
          echo '</p>';
            echo '</div>';
            echo '</div>';
                            
                        echo '</div>';
         
                    } 
                     echo '</div>';
                } 
                ?>

        
        
    <div class="fb__pagination"></div>  
    </div>
</div>
</div>

