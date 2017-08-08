<?php

// 테마 셋업
function my_theme_setup(){

    // 포스트 썸네일 등록하기
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'custom', 320, 200, true );
    add_image_size( 'single', 880, 400, true );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// 부트스트랩 메뉴 적용
require_once('wp_bootstrap_navwalker.php');

// 스크립트 로드
function dev_enqueue_scripts(){

    wp_register_style( 'fontello', get_template_directory_uri() . '/css/fontello.css' );
    wp_register_script( 'typewriter', get_template_directory_uri() . '/js/typewriter.js' );
    wp_register_script( 'animatescroll', get_template_directory_uri() . '/js/animatescroll.min.js' );
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js' );

    wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'fontello' ) );
    wp_enqueue_style( 'fontello' );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'typewriter' );

    if( is_home() ) :
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'typewriter') );
        elseif( is_page_template( 'page-contact.php' ) ) :
            wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact-ajax.js', array('jquery') );
        elseif( !is_home() && is_page() ) :
            wp_enqueue_script( 'page-script', get_template_directory_uri() . '/js/page.js', array('jquery', 'animatescroll') );
    endif;
    // test
    wp_localize_script( 'contact', 'ajaxHandler', array(
      'adminAjax' => admin_url( 'admin-ajax.php' ),
      'security' => wp_create_nonce( 'user-submitted-question' ),
    ) );

}
add_action('wp_enqueue_scripts', 'dev_enqueue_scripts');

// 메뉴 등록하기
register_nav_menus(array(
  'primary' => __( 'Primary Menu' ),
  'footer' => __( 'Footer Menu' )
));

// 상위 페이지 아이디 가져오기
function get_top_parent_id(){
    global $post;
    if( $post->post_parent ){
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        return $ancestors[0];
    }
    return $post->ID;
}

// 자식페이지가 있는 지 확인하기
function has_children() {
    global $post;
    $parent = false;
    $children = get_pages('child_of='.$post->ID);
    if( count( $children ) > 0 ) {
        $parent = true;
    }

    return $parent;
}

// Bread crumb
function qt_custom_breadcrumbs() {

  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '<span class="delimiter">></span>'; // delimiter between crumbs
  $home = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) {

    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

  } else {

    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
				$cats = substr_replace($cats, "", -8, 8);
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;

        // if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end qt_custom_breadcrumbs()

// ajax
function process_send_email(){

  	if ( ! check_ajax_referer( 'user-submitted-question', 'security' ) ) {
  		wp_send_json_error( 'Security Check failed' );
  	}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( ! empty( $_POST[ 'submission' ] ) ) {
          wp_send_json_error( 'Honeypot Check Failed' );
        }

        $name = sanitize_text_field($_POST["data"]["name"]);
        $email = sanitize_email($_POST["data"]["email"]);
        $sort = sanitize_text_field($_POST['data']['sort']);
        $message = sanitize_text_field($_POST["data"]["message"]);

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {

            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        $recipient = get_option( 'admin_email' );

        $subject = "New contact from" . get_bloginfo('name');

        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Sort: \n$sort\n";
        $email_content .= "Message:\n$message\n";

        $email_headers = "From: $name <$email>";

        // Send the email.
        if (wp_mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            wp_send_json_success("Thank You! Your message has been sent.");
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            wp_send_json_error("Oops! Something went wrong and we couldn't send your message.");

        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

}
add_action( 'wp_ajax_process_send_email', 'process_send_email' );
add_action( 'wp_ajax_nopriv_process_send_email', 'process_send_email' );
