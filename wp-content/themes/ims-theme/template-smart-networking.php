<?php
/* Template Name: Smart Networking & Matchmaking Page */
get_header(); 
?>

<main id="site-content">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>