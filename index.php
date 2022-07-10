

<?php get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm12">

        <h2 class="titulo2-left">  <?php the_title( ); ?></h2>

            <?php


            the_content();


           ?>












<?php endwhile;

endif;

?>

<?php get_footer(); ?>
