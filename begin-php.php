<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php
      $name = "Ciburaska";

      function display_post_title( $post_title ) {
        echo "<h6>" . $post_title . "</h6>";
      }

      // array of post titles
      $post_titles = [
        "test", "try", "sneeze"
      ];

      // loop through an array of posts
      foreach ($post_titles as $post_title) {
      // call display_post function
       display_post_title( $post_title );
      }

    ?>

    <h2>Greetings, <?php echo $name; ?> </h2>

  </div>

</body>
</html>
