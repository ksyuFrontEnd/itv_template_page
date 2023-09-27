<?php
/*
Template Name: Projects
*/
get_header();
?>
<main>
      <section class="section">
        <div class="projects">

      <?php
              $projectsTitle = get_field('projects__title');
              ?>

      <section class="section list">
        <div class="container">
          <h2 class="project__title"><?php echo $projectsTitle; ?></h2>
          <ul class="project__list">

          

          <?php
          $projectItems = get_field('project__item');
              
     ?>

    


              <?php foreach($projectItems as $projectItem) : 
              

                $name = $projectItem['project__name'];
                $img = $projectItem['project__img'];
                $paragraph = $projectItem['project__paragraph'];
                $link = $projectItem['project__link'];

                $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';

                ?>
                
              <li class="project__item">
                <div class="project__img" ><img 
              src="<?php echo $img['url']; ?>" 
              alt="<?php echo $img['alt']; ?>" 
              /></div>
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $name; ?>
                </h5>
                <p class="project__paragraph">
                   <?php echo $paragraph; ?>
                </p>
                <a class="project__button" href="<?php echo esc_url( $link_url); ?>" 
            target="<?php echo esc_attr(  $link_target); ?>">
            <?php echo $link['title']; ?></a>
              </div>
              </li>
              <?php endforeach; ?>
            

          </ul>
              
        </div>

         <?php

              $quoteTitle = get_field('quote__title');
              $quoteImage = get_field('quote__img');

              ?>

        <div class="quote">
          <div class="container">
            <img class="quote__img" src="<?php echo $quoteImage['url']; ?>" alt="<?php echo $quoteImage['alt']; ?>" />
            <h3 class="quote__title">
              <?php echo $quoteTitle; ?>
            </h3>
          </div>
        </div>
      </section>

      </section>

      
    </main>



<?php get_footer(); ?>