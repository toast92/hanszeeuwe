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

      
      </div>
      <footer>
            <?php include 'footer.php'; ?>
      </footer>
    </div>

  </body>
</html>