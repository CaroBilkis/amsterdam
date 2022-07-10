

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Educación Sexual Integral</h2>


    </div>



    <div class="col-lg-12 col-md-12 col-sm12">
      <div class="containerc">
        <h3 class="t3 pad">Filtrar por</h2>
          <div class="tag menor" id="tab-menor">
            <button type="button" class="btn btn-primary t5-tag" name="category" value="Menor" onclick="tag('Menor');hide('tab-menor');show('menor');hideFilter('capa');" >
              Menor <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>

          </div>

          <div class="tag media" id="tab-media">
            <button  type="button" class="btn btn-primary t5-tag" name="category" value="Media" onclick="tag('Media');hide('tab-media');show('media');hideFilter('capa');">
              Media <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>
          <div class="tag mayor" id="tab-mayor">
            <button  type="button" class="btn btn-primary t5-tag" name="category" value="Mayor" onclick="tag('Mayor');hide('tab-mayor');show('mayor');hideFilter('capa');">
              Mayor <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>


          <div class="tag propuestas" id="tab-propuestas">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Propuestas" onclick="tag('Propuestas');hide('tab-propuestas');show('propuestas');hideFilterESI('tipo');">
              Propuestas <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>

          <div class="tag canciones" id="tab-canciones">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Canciones" onclick="tag('Canciones');hide('tab-canciones');show('canciones');hideFilterESI('tipo');">
              Canciones <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>
          <div class="tag teoria" id="tab-teoria">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Teoria" onclick="tag('Teoria');hide('tab-teoria');show('teoria');hideFilterESI('tipo');">
              Teoría <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>
          <div class="tag ley" id="tab-ley">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Ley" onclick="tag('Ley');hide('tab-ley');show('horno');hideFilterESI('tipo');">
              La ley <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>

          <div class="tag audiovisuales" id="tab-audiovisuales">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Audiovisuales" onclick="tag('Audiovisuales');hide('tab-audiovisuales');show('sinHorno');hideFilterESI('tipo');">
              Audiovisuales <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>

          <div class="tag referentes" id="tab-referentes">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Referentes" onclick="tag('Referentes');hide('tab-referentes');show('referentes');hideFilterESI('tipo');">
              Referentes <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>

          <div class="tag noticias" id="tab-noticias">
            <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Noticias" onclick="tag('Noticias');hide('tab-noticias');show('noticias');hideFilterESI('tipo');">
              Noticias <span class="badge badge-light"><i class="fas fa-times"></i></span>
            </button>
          </div>
        </div>
      </div>


      <div class="col-lg-2 col-md-2 col-sm2">
        <div class="ct t5 " id="capa">
          <h4 class="t4">Capa</h4>

          <label class="btn" id='menor' >
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-menor');hide('menor');hideFilter('capa');"  name="category"  value="Menor"  > Menor
          </label>
          <br>

          <label class="btn" id='media'>
            <input class="btn-check"  type="checkbox" onchange="filterSelection();show('tab-media');hide('media');hideFilter('capa');"  name="category" value="Media"  > Media
          </label>
          <br>


          <label class="btn" id='mayor'>
            <input class="btn-check"type="checkbox"  onchange="filterSelection();show('tab-mayor');hide('mayor');hideFilter('capa');"  name="category" value="Mayor"  > Mayor
          </label>
          <br>

        </div>

        <br>

        <div class="ct t5" id ="tipo">
          <h4 class="t4">Tipo</h4>

          <label class="btn" id='noticias'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-noticias');hide('noticias');hideFilterESI('tipo');" name="category" value="Noticias"> Noticias

          </label>
          <br>

          <label class="btn" id='propuestas' >
            <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-propuestas');hide('propuestas');hideFilterESI('tipo');" name="category" value="Propuestas"> Propuestas
          </label>
          <br>

          <label class="btn" id='canciones' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-canciones');hide('canciones');hideFilterESI('tipo');" name="category" value="Canciones"> Canciones
          </label>
          <br>

          <label class="btn" id='teoria' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-teoria');hide('teoria');hideFilterESI('tipo');" name="category" value="Teoria"> Teoría
          </label>
          <br>

          <label class="btn" id='ley'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-ley');hide('ley');hideFilterESI('tipo');" name="category" value="Ley"> La Ley

          </label>
          <br>

          <label class="btn" id='audiovisuales'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-audiovisuales');hide('audiovisuales');hideFilterESI('tipo');" name="category" value="Audiovisuales"> Audiovisuales

          </label>
          <br>

          <label class="btn" id='referentes'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-referentes');hide('referentes');hideFilterESI('tipo');" name="category" value="Referentes"> Referentes

          </label>
          <br>

          <!-- <div class="t5"><input type="checkbox"  onclick="filterSelection()" name="category" value="all" > Mostrar todos</div> -->
        </div>
      </div>








      <div class="col-lg-10 col-md-10 col-sm10">



        <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
        <div class="container ">


          <?php

          if( have_posts() ):

            while( have_posts() ): the_post(); ?>

            <div class="template filterDiv <?php $cat = get_the_category();echo $cat[1]->cat_name . ' ';$cat = get_the_category();echo $cat[2]->cat_name . ' ' ?> show ">
              <?php get_template_part( 'post', get_post_format()) ?>
            </div>



          <?php endwhile;

        endif;

        ?>
      </div>








    </div>
  </div>
</div>
<?php get_footer(); ?>
