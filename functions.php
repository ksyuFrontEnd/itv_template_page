<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/services.php') ) {
    wp_enqueue_style( 'services-style', get_template_directory_uri() . '/assets/styles/template-styles/services.css', array('main') );
    wp_enqueue_script( 'services-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/services.js', array(), false, true );
  }
 
  if ( is_page_template('templates/projects.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }

  if (is_singular() && locate_template('template-parts/join.php')) {
    wp_enqueue_style( 'join-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/join.css', array('main') );
    wp_enqueue_script( 'join-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/join.js', array(), false, true );
    }

    if (is_singular() && locate_template('template-parts/form.php')) {
    wp_enqueue_style( 'form-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/form.css', array('main') );
    wp_enqueue_script( 'form-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/form.js', array(), false, true );
    }

    if (is_singular() && locate_template('template-parts/feedback.php')) {
    wp_enqueue_style( 'feedback-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedback.css', array('main') );
    wp_enqueue_script( 'feedback-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/feedback.js', array(), false, true );
    }
}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap' );
}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** add swiper */
function add_swiper() {
  wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' );
}

add_action( 'wp_enqueue_scripts', 'add_swiper' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}



/**
 * ACF AJAX підвантаження
 */

// додаємо action для авторизованих користувачів
add_action("wp_ajax_acf_repeater_show_more", "acf_repeater_show_more");
// додаємо action для не авторизованих користувачів
add_action("wp_ajax_nopriv_acf_repeater_show_more", "acf_repeater_show_more");

function acf_repeater_show_more()
{
    // валідація Nonce («Одноразові числа»)
    if (!isset($_POST["nonce"]) || !wp_verify_nonce($_POST["nonce"], "my_repeater_field_nonce")) {
        exit;
    }
    // впевнимося, що в нас є інші значення
    if (!isset($_POST["post_id"]) || !isset($_POST["offset"])) {
        return;
    }
    $show = 6; // по скільки відображати
    $start = $_POST["offset"];
    $end = $start + $show;
    $post_id = $_POST["post_id"];
    // використаємо об'єктний буфер для захоплення виводу html
    ob_start();
    if (have_rows("project__item", $post_id)) {
        $total = count(get_field("project__item", $post_id));
        $count = 0;

        while (have_rows("project__item", $post_id)) {
            the_row();
            if ($count < $start) {
                // продовжуємо показивати і збільшувати лічильник
                $count++;
                continue;
            }
            ?>
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
if ($projectLink['title']) { ?>
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
            if ($count == $end) {
                break; 
            }
        }
    }
    $content = ob_get_clean();
    // перевіряємо, чи показали ми останній елемент
    $more = false;
    if ($total > $count) {
        $more = true;
    }
    // виводим наші 3 значення у вигляді масиву в кодуванні json
    echo json_encode(array("content" => $content, "more" => $more, "offset" => $end));
    exit;
}

//validation Contact form 7, field - text
add_filter('wpcf7_validate_text*', 'custom_text_confirmation_validation_filter', 20, 2);

function custom_text_confirmation_validation_filter($result, $tag) {
    $tag = new WPCF7_FormTag($tag);
    $name = 'text-name';
    $value = $_POST[$name];    
    $regex = "/^(([a-z\\\']{1,80})|([а-яёіїґє]{1,80}))+$/iu";
    $Valid = preg_match($regex, $value, $matches );

    if ( $name == $tag->name ) {
        $your_name = isset($_POST[$name]) ? trim($_POST[$name]) : '';
        
        if ( !$Valid ) {
            $result->invalidate($tag, "Ім'я має містити лише літери, без пробілів або спеціальних символів");
        }
    }
    return $result;
}
