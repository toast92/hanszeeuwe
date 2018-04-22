<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/reset.css' ?>">
    <script type="text/javascript" src="/functions.php"></script>
    <title>Hans Zeeuwe</title>
  </head>
  <body>
    <div class="container">
      <header>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); 
        ?>
      </header>

      <div class="main"> 
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>
        <!-- contents of the loop -->
          <div class="schilderijen">
            <h2 class="page-title"><?php the_title(); ?></h2>

            <h1><?php the_field('hello'); ?></h1>

            <?php $images = get_field('gallery');
            $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

            if( $images ): 
            ?>
                <ul>
                    <?php foreach( $images as $image ): ?>
                        <li>
                          <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
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