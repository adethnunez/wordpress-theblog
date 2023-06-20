<?php

function blog_assets(){
    wp_enqueue_style('blog-style', get_template_directory_uri() . "./css/style.css", microtime());
}

add_action('wp_enqueue_scripts', 'blog_assets');