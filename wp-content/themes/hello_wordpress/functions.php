<?php

function load_file() {
  wp_enqueue_style( "google-font", "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
  wp_enqueue_style( "font-awesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  wp_enqueue_style( "style", get_stylesheet_uri(), array(), rand(1, 99), 'all');
  wp_enqueue_script( "script", get_template_directory_uri() . "/js/scripts-bundled.js", NULL, '1.0', true );
}

add_action( "wp_enqueue_scripts", "load_file");

function set_up_title() {
  add_theme_support("title-tag");
}

add_action( "after_setup_theme", "set_up_title" );


function mytheme_custom_excerpt_length( $length ) {
  return 20;
}

add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999);


function wpbeginner_comment_text_after($arg) {
  $arg['comment_notes_after'] = "<p class='comment-policy'>We are glad you have chosen to leave a comment. Please keep in mind that comments are moderated according to our <a href='#'>comment policy</a>.</p>";
  $arg['class_submit'] = "submit-comment";
  $arg['label_submit'] = 'SUBMIT COMMENT';
  return $arg;
}

add_filter('comment_form_defaults', 'wpbeginner_comment_text_after');