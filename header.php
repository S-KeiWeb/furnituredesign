<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <title><?php bloginfo('name'); ?></title>
  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('furniture-design-main', get_template_directory_uri() . '/js/app.js');
  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header" class="wrapper">
    <h1 class="site-title"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="site-logo"></a></h1>
    <nav class="site-menu">
      <?php
      $args = array(
        'menu' => 'global-navigation',
        'menu-class' => 'site-menu-list',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
    <div id="mask"></div>
    
    <span class="nav_toggle">
      <i></i>
      <i></i>
    </span>
  </header>