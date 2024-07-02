<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WPDev</title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="bg-dark py-3">
    <div class="container">
      <h1 class="text-white fs-3 fw-bold m-0">
        <a class="text-decoration-none text-white" href="<?php echo home_url(); ?>">WPDev</a>
      </h1>
    </div>
  </header>

  <nav class="main-navbar">
    <div class="container">
      <div class="navbar-responsive-header">
        <span>MENU</span>
        <button id="menu-toggler">
          <svg class="feather feather-menu" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          <svg class="feather feather-x" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
      </div>
      <?php
        wp_nav_menu(array(
          "theme_location"  => "main-menu",
          "container"  => false,
        ));
      ?>
    </div>
  </nav>