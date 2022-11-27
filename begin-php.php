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
    
     <!-- WP LOOP -->
      <!-- THE LOOP starts -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Display the_title and the_content here -->
      <h2><?php the_title(); ?></h2>

      <?php the_content(); ?>

    <?php endwhile; 
          else: ?>

      <p><?php _e( '404 Page not found', 'texdomain' ); ?>

    <?php endif; ?>

  </div>

</body>
</html>


<!-- Seperating footer and header -->
<?php get_header(); ?>

  <div id="content">

  <!-- Add any template tags outside of loop -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Add any post template tags inside of loop -->

      <article <?php post_class(); ?> >

      
      <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      </article>

      <section>
        <p class="byline">
          Author:
          <a href="<?php echo get_author_posts_url( $post->post_author );  ?>">
          <?php the_author(); ?></a> 
        </p>
        <p>
          Date:
          <?php the_time( 'M. j, Y' ); ?> |
          Categories: 
          <?php the_category( ',' ) ?> |
          Tags:
          <?php the_tags( '',',','' ); ?>
        </p>
      </section>

      <?php endwhile; else: ?>

        <h2><?php esc_html_e( '404 Error', 'phpforwp' ); ?></h2>
        <p><?php esc_html_e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

      <?php endif; ?>

  <!-- Add any template tags outside of loop -->

    </div>

    <?php get_footer(); ?>


