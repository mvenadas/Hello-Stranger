<?php /* Template Name: Merch : merch.php */ ?>
<?php get_header(); ?>

<div id="merch">
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
      <p>
        Merch Goes Here!
      </p>
    </div>

    <?php include ("footer-block-inside.php"); ?>

    <div id="rose-block">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rose-b.svg" alt="Rose">
    </div>

  </div>

</div>

<?php get_footer(); ?>
