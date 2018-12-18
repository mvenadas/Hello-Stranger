<?php /* Template Name: Home : main.php */ ?>
<?php get_header(); ?>

<div id="home">

  <header>
    <div class="logo"></div>
    <div>
      <?php include ("nav.php"); ?>
    </div>
    <div class="face"></div>
  </header>

  <div class="container">

    <div class="row mosaic">
      <div class="col left s12 l6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-01.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-02.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-03.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-04.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-05.png" alt="Hello Stranger">
      </div>
      <div class="col right s12 l6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-06.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-07.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-08.png" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cross-w.svg" alt="Hello Stranger">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-photo-09.png" alt="Hello Stranger">
      </div>
    </div>

  </div>

  <?php include ("footer-block.php"); ?>

  <div id="rose-block">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rose-w.svg" alt="Rose">
  </div>

</div>

<?php get_footer(); ?>
