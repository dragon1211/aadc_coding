<?php

define("PAGE_NAVI_NUM", 15);

define("AADCBLOG_CATEGORY", 'aadcblog_ctg');

// ヘッダー無効化
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical');

// 絵文字無効化
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('admin_print_styles', 'print_emoji_styles' );


// ウィジェット
register_sidebar( array(
   'name'          => 'Widget-BizCalendar',
   'id'            => 'Widget-BizCalendar',
   'description'   => 'Biz Calendarのウィジットエリアです。',
   'before_widget' => '<div id="%1$s" class="widget %2$s">',
   'after_widget'  => '</div>',
) );

// アイキャッチ画像
add_theme_support('post-thumbnails');
add_image_size('media_thumbnail', 640, 480 ,true );


// タイトル表示
function setup_aadctheme() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'setup_aadctheme');

//functions.php
function register_my_menus() { 
   register_nav_menus( array(
      'header-menu' => 'Header Menu',
      'footer-menu'  => 'Footer Menu',
   ));
}
add_action( 'after_setup_theme', 'register_my_menus' );

function add_additional_class_on_li($classes, $item, $args){
   if (isset($args->add_li_class)) {
      $classes['class'] = $args->add_li_class;
   }
   return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function pagename_class($classes = '') {
   if (is_page()) {
       $page = get_page(get_the_ID());
       $classes[] = $page->post_name;
       if ($page->post_parent) {
         $classes[] = get_page_uri($page->post_parent);
    }
   }
return $classes;
}
add_filter('body_class','pagename_class');
