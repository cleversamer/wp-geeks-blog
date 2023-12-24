<?php

function geeks_blog_features()
{
    // Add dynamic title tag in the HTML <head> section
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "geeks_blog_features");

function register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("geeks-blog-style", get_template_directory_uri() . "/style.css", array("geeks-blog-bootstrap"), $version, "all");
    wp_enqueue_style("geeks-blog-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    wp_enqueue_style("geeks-blog-font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}

add_action("wp_enqueue_scripts", "register_styles");

function register_scripts()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_script("geeks-blog-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script("geeks-blog-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
    wp_enqueue_script("geeks-blog-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
    wp_enqueue_script("geeks-blog-main", get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

add_action("wp_enqueue_scripts", "register_scripts");