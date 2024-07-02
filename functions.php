<?php

  // Load CSS Files
  function load_css() {
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
    wp_enqueue_style("bootstrap");
    wp_register_style("main", get_template_directory_uri() . "/css/main.css", array("bootstrap"), "1.0.0", "all");
    wp_enqueue_style("main");
    wp_register_style("fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array("main"), false, "all");
    wp_enqueue_style("fontawesome");
  }

  add_action("wp_enqueue_scripts", "load_css");

  // Load Javascript Files
  function load_js() {
    wp_enqueue_script("jquery");

    wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", array("jquery"), null, true);
    wp_enqueue_script("bootstrap");

    wp_register_script("main", get_template_directory_uri() . "/js/main.js", array("jquery"), "1.0.0", true);
    wp_enqueue_script("main");
  }

  add_action("wp_enqueue_scripts", "load_js");


  // ~~~~~~ Theme Options ~~~~~~
  add_theme_support("menus");
  add_theme_support("post-thumbnails");

  // Menu Locations
  register_nav_menus(array(
    "main-menu" => "Main Navbar Location",
    "footer-menu" => "Footer Menus Location",
  ));

  // Add Image Sizes


?>