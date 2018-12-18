<?php /* Template Name: Location : location.php */ ?>
<?php get_header(); ?>

<div id="location">
  <div id="inside">

    <header>
      <div class="logo">
        <a href="/hello-stranger/">
          <span></span>
        </a>
      </div>
      <div>
        <?php include ("nav.php"); ?>
      </div>
      <div class="face"></div>
    </header>

    <div class="container">

      <div class="row mosaic">

        <div class="col left s12 l6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-photo-01.png" alt="Low Rider">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cross-b.svg" alt="Cross">
        </div>
        <div class="col right s12 l6">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-photo-02.png" alt="Low Rider Backseat">
        </div>

      </div>

      <div class="row copy-container">
        <div class="col copy s8 offset-s2">

          <h5>
            <?php the_field('location_-_address'); ?>
          </h5>
          <p>
            <?php the_field('location_-_copy'); ?>
          </p>

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/location-photo-03.png" alt="Low Rider">

        </div>
      </div>

    </div>

    <?php include ("footer-block-inside.php"); ?>

    <div id="rose-block">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rose-b.svg" alt="Rose">
    </div>

  </div>

</div>

<?php get_footer(); ?>
