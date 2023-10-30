<?php
/*
Template Name: About
*/
get_header();
?>
<main>
      <section class="section info">
        <div class="mission">
          <div class="container">
            <div class="mission__block">

              <?php

              $missionTitle = get_field('mission__title');
              $missionParagraph = get_field('mission__paragraph');
              $missionImageOne = get_field('about__image1');

              ?>

              <h2 class="mission__title"><?php echo $missionTitle; ?></h2>
              <p class="mission__paragraph">
                <?php echo $missionParagraph; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="about">
            <img class="about__image1" 
            src="<?php echo $missionImageOne['url']; ?>" 
            alt="<?php echo $missionImageOne['alt']; ?>" 
            />
            <div class="about__block1">

            <?php

              $aboutTitle = get_field('about__title');
              $aboutFirstParagraph = get_field('about__paragraph');
              $aboutSecondParagraph= get_field('about__paragraph--second');
              $aboutThirdParagraph= get_field('about__paragraph--third');
              $aboutFourthParagraph= get_field('about__paragraph--fourth');
              $aboutImage = get_field('about__image2');

              ?>

              <h2 class="about__title"><?php echo $aboutTitle; ?></h2>
              <p class="about__paragraph">
                <?php echo $aboutFirstParagraph; ?>
              </p>
              <p class="about__paragraph about__paragraph--second">
                <?php echo $aboutSecondParagraph; ?>
              </p>
            </div>
            <div class="about__block2">
              <div class="about__text">
                <p class="about__paragraph">
                  <?php echo $aboutThirdParagraph; ?>
                </p>
                <p class="about__paragraph about__paragraph--second">
                  <?php echo $aboutFourthParagraph; ?>
                </p>
              </div>
              <img class="about__image2" 
               src="<?php echo $aboutImage['url']; ?>" 
            alt="<?php echo $aboutImage['alt']; ?>"  
            />
            </div>
          </div>
        </div>

        <?php


get_template_part('template-parts/join');
?>



        <?php

              $sloganTitle = get_field('slogan__title');
              $sloganImage = get_field('slogan__img');

              ?>

        <div class="slogan">
          <div class="container">
            <img class="slogan__img" src="<?php echo $sloganImage['url']; ?>" alt="<?php echo $sloganImage['alt']; ?>" />
            <h3 class="slogan__title">
              <?php echo $sloganTitle; ?>
            </h3>
          </div>
        </div>
      </section>

      <?php

              $expertsTitle = get_field('experts__title');

              $firstExpertName = get_field('first_expert__name');
              $firstExpertParagraph = get_field('first_expert__paragraph');
              $firstExpertImg = get_field('first_expert__img');

              $secondExpertName = get_field('second_expert__name');
              $secondExpertParagraph = get_field('second_expert__paragraph');
              $secondExpertImg = get_field('second_expert__img');

              $thirdExpertName = get_field('third_expert__name');
              $thirdExpertParagraph = get_field('third_expert__paragraph');
              $thirdExpertImg = get_field('third_expert__img');

              $fourthExpertName = get_field('fourth_expert__name');
              $fourthExpertParagraph = get_field('fourth_expert__paragraph');
              $fourthExpertImg = get_field('fourth_expert__img');
              ?>

      <section class="section experts">
        <div class="container">
          <h2 class="experts__title"><?php echo $expertsTitle; ?></h2>
          <ul class="experts__list">
            <li class="experts__item">
              <div class="experts__info">
                <h5 class="experts__name">
                  <?php echo $firstExpertName; ?>
                </h5>
                <p class="experts__paragraph">
                   <?php echo $firstExpertParagraph; ?>
                </p>
              </div>
              <img class="experts__img" 
              src="<?php echo $firstExpertImg['url']; ?>" 
              alt="<?php echo $firstExpertImg['alt']; ?>" 
              />
            </li>
            <li class="experts__item">
              <div class="experts__info">
                <h5 class="experts__name">
                  <?php echo $secondExpertName; ?>
                </h5>
                <p class="experts__paragraph">
                   <?php echo $secondExpertParagraph; ?>
                </p>
              </div>
              <img class="experts__img" 
              src="<?php echo $secondExpertImg['url']; ?>" 
              alt="<?php echo $secondExpertImg['alt']; ?>" 
              />
            </li>
            <li class="experts__item">
              <div class="experts__info">
                <h5 class="experts__name">
                  <?php echo $thirdExpertName; ?>
                </h5>
                <p class="experts__paragraph">
                  <?php echo $thirdExpertParagraph; ?>
                </p>
              </div>
              <img
                class="experts__img"
                src="<?php echo $thirdExpertImg['url']; ?>"
                alt="<?php echo $thirdExpertImg['alt']; ?>"
              />
            </li>
            <li class="experts__item">
              <div class="experts__info">
                <h5 class="experts__name"><?php echo $fourthExpertName; ?></h5>
                <p class="experts__paragraph">
                   <?php echo $fourthExpertParagraph; ?>
                </p>
              </div>
              <img class="experts__img" 
              src="<?php echo $fourthExpertImg['url']; ?>" 
              alt="<?php echo $fourthExpertImg['alt']; ?>" 
              />
            </li>
          </ul>
        </div>
      </section>

      <?php

              $ideasTitle = get_field('ideas__title');
              $ideasMessageFirst = get_field('ideas__message--first');
              $ideasMessageSecond = get_field('ideas__message--second');
              $ideasImg = get_field('ideas__img');

              $ideasParagraph = get_field('ideas__paragraph');
              $ideasParagraphSecond = get_field('ideas__paragraph--second');
              ?>

      <section class="section ideas">
        <div class="container">
          <h2 class="ideas__title"><?php echo $ideasTitle; ?></h2>
          <div class="ideas__info">
            <div class="ideas__text">
              <div class="ideas__message--first">
                <?php echo $ideasMessageFirst; ?>
              </div>
              <div class="ideas__message--second">
               <?php echo $ideasMessageSecond; ?>
              </div>
              <img class="ideas__img" 
              src="<?php echo $ideasImg['url']; ?>" 
              alt="<?php echo $ideasImg['alt']; ?>" 
              />
            </div>
            <div class="ideas__paragraph">
              <p>
                <?php echo $ideasParagraph; ?>
              </p>
              <p class="ideas__paragraph--second">
                <?php echo $ideasParagraphSecond; ?>
              </p>
            </div>
          </div>
        </div>
      </section>
      <?php
get_template_part('template-parts/form');
?>
    </main>



<?php get_footer(); ?>