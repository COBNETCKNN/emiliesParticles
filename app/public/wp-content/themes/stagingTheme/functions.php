<?php 

function stagingtheme_files() {

    //enqueing CSS
        wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css');

    //enqueing JS
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
        wp_enqueue_script('nextParticles', 'https://nextparticle.nextco.de/nextparticle.min.js', array(), 1.0, true);
        wp_enqueue_script('particlesJS', get_stylesheet_directory_uri() . '/js/particles.js-master/dist/particles.min.js', array(), 1.0, true);
}
add_action('wp_enqueue_scripts', 'stagingtheme_files');

//including custom shrotcodes
include('custom-shortcodes.php');


?>