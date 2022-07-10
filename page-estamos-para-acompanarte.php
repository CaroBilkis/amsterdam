

<?php get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

<div class="container">
  <div class="row " >
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2"><?php the_title(); ?></h2>
      <!-- <h2 class="titulo2">Estamos para acompañarte</h2> -->

      <div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
      <div class="row">
          <p><?php the_content(); ?></p>
        <?php get_search_form(  ); ?>
      </div>
          <img class="img1"src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/Illustration-Peep-2.png" alt="">
        </div>

      <div class="row justify-content-right">
        <div class="col-lg-5 col-md-5 col-sm12">

        </div>
      <div class="col-lg-7 col-md-7 col-sm12">

          <h2 class="titulo-home-2">¿Qué mejor que compartir?</h2>

          <p class="px-home-2"><b>¿Tenés alguna actividad, noticia o recurso que esté bueno?</b>
            <br>Envialo a nuestro mail para que lo compartamos con todxs.<br><br><b>Próximamente</b> vas a poder ser vos quien suba los contenidos.<br>¡Mientras tanto podes chusmear y guardar todo lo que te sirva!</p>
        </div>
      </div>


      <!-- <img class="img2" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/10/cuate.png" alt="IMG"> -->





    </div>
</div>




  <?php endwhile;

endif;

?>
<?php get_footer(); ?>
