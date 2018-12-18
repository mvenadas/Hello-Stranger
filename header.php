<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/materialize.css">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/scss/main.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
