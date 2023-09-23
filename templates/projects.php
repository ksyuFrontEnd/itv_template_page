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

              

              $projectName = get_field('project__name');
              $projectParagraph = get_field('project__paragraph');
              $projectImg = get_field('project__img');

              ?>

      <section class="section list">
        <div class="container">
          <h2 class="project__title"><?php echo $projectsTitle; ?></h2>
          <ul class="project__list">

          <?php

          $projectList = get_field('project__list');

              if ($projectList) : ?>

              <li class="project__item">

              <?php foreach($projects as $project) : 
                
                $name = $project['project__name'];
                $img = $project['project__img'];
                $paragraph = $project['project__paragraph'];

                ?>
              
                <img class="project__img" 
              src="<?php echo $img['url']; ?>" 
              alt="<?php echo $img['alt']; ?>" 
              />
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $name; ?>
                </h5>
                <p class="project__paragraph">
                   <?php echo $paragraph; ?>
                </p>
                
              </div>
              
              <?php endforeach; ?>
            </li>



              <?php endif;?>


            <li class="project__item"><?php echo $projectItem; ?>
              
                <img class="project__img" 
              src="<?php echo $projectImg['url']; ?>" 
              alt="<?php echo $projectImg['alt']; ?>" 
              />
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $projectName; ?>
                </h5>
                <p class="project__paragraph">
                   <?php echo $projectParagraph; ?>
                </p>
                
              </div>
              
            </li>
            <li class="project__item">
              
                <img class="project__img" 
              src="<?php echo $projectImg['url']; ?>" 
              alt="<?php echo $projectImg['alt']; ?>" 
              />
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $projectName; ?>
                </h5>
                <p class="project__paragraph">
                   <?php echo $projectParagraph; ?>
                </p>
                
              </div>
              
            </li>
            <li class="project__item">
             
                <img
                class="project__img"
                src="<?php echo $projectImg['url']; ?>"
                alt="<?php echo $projectImg['alt']; ?>"
              />
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $projectName; ?>
                </h5>
                <p class="project__paragraph">
                  <?php echo $projectParagraph; ?>
                </p>
                
              </div>
              
            </li>
          </ul>
        </div>
      </section>

      
    </main>



<?php get_footer(); ?>