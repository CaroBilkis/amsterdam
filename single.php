
<?php get_header(); ?>

<div class="todo justify-content-center">
  <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1 class="t3-left"><?php the_title(); ?></h1>
        <?php the_content( ); ?>
      </article>

  </div>
</div>
</div>

<?php get_footer(); ?>
