<?php 

function huddle_theme() {
  wp_enqueue_style('huddle_fonts', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@600&display=swap');
  wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.5.0/js/all.js');
  wp_enqueue_style('huddle_main_styles', get_stylesheet_uri());
};

add_action('wp_enqueue_scripts', 'huddle_theme');
?>

