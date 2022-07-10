

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Juegos</h2>


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


        <div class="tag agua" id="tab-agua">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Agua" onclick="tag('Agua');hide('tab-agua');show('agua');hideFilter('tipo');">
            Agua <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag pelota" id="tab-pelota">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Pelota" onclick="tag('Pelota');hide('tab-pelota');show('pelota');hideFilter('tipo');">
            Pelota <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag musica" id="tab-musica">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Música" onclick="tag('Música');hide('tab-musica');show('musica');hideFilter('tipo');">
            Música <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag cartas" id="tab-cartas">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Cartas" onclick="tag('Cartas');hide('tab-cartas');show('cartas');hideFilter('tipo');">
            Cartas <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag mesa" id="tab-mesa">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Mesa" onclick="tag('Mesa');hide('tab-mesa');show('mesa');hideFilter('tipo');">
            Mesa <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag memoria" id="tab-memoria">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Memoria" onclick="tag('Memoria');hide('tab-mesa');show('mesa');hideFilter('tipo');">
            Memoria <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag soga" id="tab-soga">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Soga" onclick="tag('Soga');hide('tab-soga');show('soga');hideFilter('tipo');">
            Soga <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag varios" id="tab-varios">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Varios" onclick="tag('Varios');hide('tab-varios');show('varios');hideFilter('tipo');">
            Varios <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='agua' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-agua');hide('agua');hideFilterJuegos('tipo');" name="category" value="Agua"> Agua
          </label>
          <br>
          <label class="btn" id='pelota' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-pelota');hide('pelota');hideFilterJuegos('tipo');" name="category" value="Pelota"> Pelota
          </label>
          <br>

          <label class="btn" id='musica' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-musica');hide('musica');hideFilterJuegos('tipo');" name="category" value="Música"> Música
          </label>
          <br>

            <label class="btn" id='cartas' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-cartas');hide('cartas');hideFilterJuegos('tipo');" name="category" value="Cartas"> Cartas
            </label>
            <br>

            <label class="btn" id='mesa' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-mesa');hide('mesa');hideFilterJuegos('tipo');" name="category" value="Mesa"> Mesa
            </label>
            <br>

            <label class="btn" id='memoria' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-memoria');hide('memoria');hideFilterJuegos('tipo');" name="category" value="Memoria"> Memoria
            </label>
            <br>

          <label class="btn" id='soga'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-soga');hide('soga');hideFilterJuegos('tipo');" name="category" value="Soga"> Soga

          </label>
          <br>

          <label class="btn" id='varios'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-varios');hide('varios');hideFilterJuegos('tipo');" name="category" value="Varios"> Varios

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

            <div class="template filterDiv <?php $cat = get_the_category();
            echo $cat[1]->cat_name . ' ';$cat = get_the_category();
            echo $cat[2]->cat_name . ' ';$cat = get_the_category();
            echo $cat[3]->cat_name . ' ';$cat = get_the_category();
            echo $cat[4]->cat_name . ' ';$cat = get_the_category();
            echo $cat[5]->cat_name . ' ';$cat = get_the_category();
            echo $cat[6]->cat_name . ' ';$cat = get_the_category();
            echo $cat[7]->cat_name . ' ';$cat = get_the_category();
            echo $cat[8]->cat_name . ' ';$cat = get_the_category();




             ?> show ">
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
