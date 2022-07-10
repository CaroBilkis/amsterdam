

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Cocina</h2>
    </div>
    <div class="col-lg-2 col-md-2 col-sm2">
      <nav class="navbar navigation-filtros navigation-filtros">

        <h3>Filtrar por</h3>
        <div class="container-fluid ">

          <div class="nav justify-content-end">

            <?php
            wp_nav_menu( array(
              'theme_location'    => 'filtro',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'container-fluid',
              'container_id'      => 'nav justify-content-end',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
          </div>

        </div>
      </nav>

    </div>

    <div class="col-lg-10 col-md-10 col-sm10">
      <?php

      if( have_posts() ):

        while( have_posts() ): the_post(); ?>

        <h2 class="titulo4"><?php the_title(); ?></h2>

        <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
        <p><?php the_content(); ?></p>


<?php endwhile;

endif;

?>

</div>
</div>
</div>
<?php get_footer(); ?>
