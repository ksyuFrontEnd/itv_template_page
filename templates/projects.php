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
          <!-- <ul class="project__list"> -->



          <?php
$total_rows = count(get_field("project__item")); # всього постів
$count = 0;  # лічильник
$number = 2; # скільки відображати на сторінці
?>


<?php
// Якщо є вкладені поля
if (have_rows("project__item")) { ?>

    <ul class="project__list">

        <?php
        while (have_rows("project__item")) {
            the_row();

            if ($count == $number) {
                break; # якщо показали всі пости, виходимо з циклу
            } ?>

          <?php $projectName = get_sub_field("project__name"); ?>
          <?php $projectImg = get_sub_field("project__img"); ?>
          <?php $projectParagraph = get_sub_field("project__paragraph"); ?>
          <?php $projectLink = get_sub_field("project__link"); ?>

          <li class="project__item">
                <div class="project__img" ><img 
              src="<?php echo $projectImg['url']; ?>" 
              alt="<?php echo $projectImg['alt']; ?>" 
              /></div>
              <div class="project__text">
                <h5 class="project__name">
                  <?php echo $projectName; ?>
                </h5>
                <p class="project__paragraph">
                   <?php echo $projectParagraph; ?>
                </p>
<?php
        echo "<script>console.log(\"$projectLink\")</script>";
if ($projectLink) { ?>
<a class="project__button" href="<?php echo esc_url( $projectLink['url']); ?>" 
            target="<?php echo esc_attr(  $projectLink['target']); ?>">
            <?php echo $projectLink['title']; ?></a>
<?php } else { ?>
  <p class="project__subtext">Проєкт в роботі...</p>

<?php } ?>
  
              </div>
              </li>

            <?php
            $count++;
        } ?>

      </ul>

<?php } ?>
          
       <div class="loadmore-wrapper">
           <button class="btn acf-loadmore" onclick="javascript: acf_repeater_show_more();"
    <?php if ($total_rows < $count) : ?> style="display: none;" <?php endif; ?>>
    Показати ще
</button>
       </div>
          
<!-- AJAX завантаження -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
  let buttonACF = document.querySelector('.acf-loadmore');
    let my_repeater_field_post_id = <?php echo $post->ID; ?>;
    let my_repeater_field_offset = <?php echo $number; ?>;
    let my_repeater_field_nonce = "<?php echo wp_create_nonce("my_repeater_field_nonce"); ?>";
    let my_repeater_ajax_url = "<?php echo admin_url("admin-ajax.php"); ?>";
    let my_repeater_more = true;

    function acf_repeater_show_more() {
      buttonACF.classList.add('loading');
        // робимо AJAX запит
        jQuery.post(my_repeater_ajax_url, {

            // AJAX, який ми налагодили в PHP
            "action": "acf_repeater_show_more",
            "post_id": my_repeater_field_post_id,
            "offset": my_repeater_field_offset,
            "nonce": my_repeater_field_nonce
        }, function (json) {
            // додаємо контент в контейнер
            // цей ідентифікатор має відповідати контейнеру
            // до якого ви хочете додати контент
            jQuery(".project__list").append(json["content"]);
            // оновимо зміщення
            my_repeater_field_offset = json["offset"];
            // перевіримо, чи є ще що завантажити
            if (!json["more"]) { // якщо ні, сховаємо кнопку завантаження
                jQuery(".acf-loadmore").css("display", "none");
            }
            else {
            buttonACF.classList.remove('loading');
        }
        }, "json");
    }
</script>

          <!-- </ul> -->
              
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

<?php
get_template_part('template-parts/form');
?>

<?php get_footer(); ?>