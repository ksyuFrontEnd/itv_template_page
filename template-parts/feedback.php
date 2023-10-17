<?php

              $fbTitle = get_field('fb__title', 'option');
              $fbText = get_sub_field("fb__text", 'option');
                $fbName = get_sub_field("fb__name", 'option');
                $fbSpec = get_sub_field("fb__spec", 'option');
              ?>


<div class="fb_section">
              <div class="fb_container">
    <h2 class="fb__title"><?php echo $fbTitle; ?>
    </h2>
    <ul class="fb__list">
        <li class="fb__item">
            <p class="fb__icon">“</p>
            <p class="fb__text">Найкраща IT-компанія, з якою я коли-небудь працювала! Вони мають сильну команду професіоналів, які завжди готові надати ефективні та інноваційні рішення.<?php echo $fbText; ?></p>
            <div class="fb__info">
                
            <img class="fb__img"
              src="img" 
              alt="img" 
              />
                
            <div>
                <p class="fb__name">Олександрова Аліна<?php echo $fbName; ?></p>
            <p class="fb__spec">Менеджер<?php echo $fbSpec; ?></p>
            </div>
            </div>
        </li>
        <li class="fb__item">
            <p class="fb__icon">“</p>
            <p class="fb__text">Найкраща IT-компанія, з якою я коли-небудь працювала! Вони мають сильну команду професіоналів, які завжди готові надати ефективні та інноваційні рішення.<?php echo $fbText; ?></p>
            <div class="fb__info">
                
            <img class="fb__img"
              src="img" 
              alt="img" 
              />
                
            <div>
                <p class="fb__name">Олександрова Аліна<?php echo $fbName; ?></p>
            <p class="fb__spec">Менеджер<?php echo $fbSpec; ?></p>
            </div>
            </div>
        </li>
        <li class="fb__item">
            <p class="fb__icon">“</p>
            <p class="fb__text">Найкраща IT-компанія, з якою я коли-небудь працювала! Вони мають сильну команду професіоналів, які завжди готові надати ефективні та інноваційні рішення.<?php echo $fbText; ?></p>
            <div class="fb__info">
                
            <img class="fb__img"
              src="img" 
              alt="img" 
              />
                
            <div>
                <p class="fb__name">Олександрова Аліна<?php echo $fbName; ?></p>
            <p class="fb__spec">Менеджер<?php echo $fbSpec; ?></p>
            </div>
            </div>
        </li>
    </ul>
    <div class="pagination swiper-pagination"></div>  
    
</div>
</div>