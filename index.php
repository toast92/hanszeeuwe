<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/reset.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/resources/lightbox.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/resources/wpforms-full.css'?>">
    <title>Hans Zeeuwe</title>
  </head>
  <body>
  <header>
    <div class="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) );?>
    </div>
  </header>

  <div class="container">    
    <div class="main"> 
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>
        <h2 class="page-title"><?php the_title(); ?></h2>
        <?php the_content();?>
        <div class="gallery <?php the_field('amount') ?>">
          <?php $images = get_field('gallery');
          if($images): 
            foreach( $images as $image ):?>
              <div class="thumbnail">
                <a 
                  href="<?php echo $image['sizes']['large']; ?>"
                  data-lightbox="gallery-item"
                  data-title="<?php echo $image['description']; ?>">
                  <?php echo wp_get_attachment_image( $image['ID'], 'thumbnail'); ?>
                </a>
              </div>
            <?php endforeach;
          endif; ?>
        </div>
      <?php endwhile; endif; ?> <!-- loop is closed -->
    </div>

    <footer>
      <ul>
        <li>CONTACT</li>
        <li>06-13170468</li>
        <li>contact@hanszeeuwe.nl</li>
        <li>Achtste donk 126</li>
        <li>5233PE, Den Bosch</li>
      </ul>
    </footer>
    </div>

    <script src="<?php echo get_template_directory_uri(). '/resources/lightbox-plus-jquery.js' ?>"></script>
    <script>
    lightbox.option({
      'resizeDuration': 400,
      'wrapAround': true,
      'imageFadeDuration': 400
    })
    </script>
  </body>
</html>