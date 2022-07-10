

<?php get_header(); ?>

<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-10col-md-10 col-sm10">
      <h2 class="titulo2">Buscá por categorías</h2>
<div class="conteiner-recursos">
  <a href="http://192.168.64.3/kinderRecursos/category/arte/">
   <img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Arte.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Arte.png');"  width="200" />
 </a>

 <a href="http://192.168.64.3/kinderRecursos/category/cocina/">
  <img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cocina.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-1.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cocina.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/cuentos/">
 <img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cuentos.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-4.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cuentos.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/util/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cosas-utiles.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-5.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Cosas-utiles.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/juegos/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Juegos.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-7.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Juegos.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/tecnologia/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Tecnologia.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-2.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Tecnologia.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/esi/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/ESI.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-6.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/ESI.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/historia/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Holocausto.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-9.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Holocausto.png');"  width="200" />
</a>

<a href="http://192.168.64.3/kinderRecursos/category/jaguim/">
<img class="btn-recurso" src="http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Dictadura.png" onmouseover="hover(this,'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/12/StatusHover-10.png');" onmouseout="unhover(this, 'http://192.168.64.3/kinderRecursos/wp-content/uploads/2021/11/Dictadura.png');"  width="200" />
</a>
</div>


    </div>
    </div>
    </div>


  <?php endwhile;

endif;

?>
<?php get_footer(); ?>
