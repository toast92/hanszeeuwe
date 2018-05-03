<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/reset.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/resources/lightbox.min.css' ?>">
    <script src="<?php echo get_template_directory_uri(). '/resources/lightbox-plus-jquery.js' ?>"></script>
    <script>
    lightbox.option({
      'resizeDuration': 400,
      'wrapAround': true,
      'imageFadeDuration': 400
    })
</script>
    <title>Hans Zeeuwe</title>
  </head>
  <body>
  <header>
    <div class="menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); 
        ?>
    </div>
      </header>
    <div class="container">
      
      <div class="main"> 
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>
        <h2 class="page-title"><?php the_title(); ?></h2>
        <?php the_content();?>
          <div class="schilderijen <?php the_field('amount') ?>">
            <?php $images = get_field('gallery');
            if($images): 
              foreach( $images as $image ):?>
              <div class="thumbnail">
                <a 
                  href="<?php echo $image['sizes']['large']; ?>"
                  data-lightbox="paintings"
                  data-title="<?php echo $image['description']; ?>">
                  <?php echo wp_get_attachment_image( $image['ID'], 'thumbnail'); ?>
  
                  <!-- -->
                </a>

            </div>
                <?php add_image_size( 'my-thumbnail', 400, 200, true);?>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        <?php endwhile; endif; ?> <!-- loop is closed -->
      </div>

      <footer>
            <?php include 'footer.php'; ?>
      </footer>
    </div>
  </body>
</html>