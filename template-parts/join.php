<?php

              $joinTitle = get_field('join__title', 'option');
              $joinParagraph = get_field('join__paragraph', 'option');
              $joinImage = get_field('join__img', 'option');

              $joinButton = get_field('join__button', 'option');

              $link_url = $joinButton['url'];
              $link_title = $joinButton['title'];
              $link_target = $joinButton['target'] ? $joinButton['target'] : '_self';

              ?>
        <div class="join container">
          <img class="join__img" src="<?php echo $joinImage['url']; ?>" 
          alt="<?php echo $joinImage['alt']; ?>" />
          <h4 class="join__title">
            <?php echo $joinTitle; ?>
          </h4>
          <p class="join__paragraph">
            <?php echo $joinParagraph; ?>
          </p>
          
            <a class="join__button" href="<?php echo esc_url( $link_url); ?>" 
            target="<?php echo esc_attr( $link_target); ?>">
            <?php echo esc_html( $link_title ); ?>
</a>
          
        </div>