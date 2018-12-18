<?php /* Template Name: About : about.php */ ?>
<?php get_header(); ?>

<div id="about">
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

      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-group.png" alt="Group">

      <div class="row">
        <div class="col copy s8 offset-s2">

          <p>
            <?php the_field('about_us_-_copy'); ?>
          </p>

          <div class="cross">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cross-b.svg" alt="Cross">
          </div>

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
