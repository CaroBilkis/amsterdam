

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Cuentos</h2>


    </div>


    <div class="col-lg-12 col-md-12 col-sm12">
      <div class="containerc">
              <h3 class="t3 pad">Filtrar por</h2>
        <div class="tag menor" id="tab-menor">
          <button type="button" class="btn btn-primary t5-tag"name="category" value="Menor" onclick="tag('Menor');hide('tab-menor');show('menor');hideFilter('capa');" >
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


        <div class="tag frutas" id="tab-infantiles">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Infantiles" onclick="tag('Infantiles');hide('tab-infantiles');show('infantiles');hideFilter('tipo');">
            Infantiles <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag verduras" id="tab-ilustrados">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Ilustrados" onclick="tag('Ilustrados');hide('tab-ilustrados');show('ilustrados');hideFilter('tipo');">
            Ilustrados <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag chocholate" id="tab-identidad">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Identidad" onclick="tag('Identidad');hide('tab-identidad');show('identidad');hideFilter('tipo');">
            Identidad <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag judias" id="tab-dictadura">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Dictadura" onclick="tag('Dictadura');hide('tab-dictadura');show('dictadura');hideFilter('tipo');">
            Dictadura <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag horno" id="tab-cuerpo">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Cuerpo" onclick="tag('Cuerpo');hide('tab-cuerpo');show('cuerpo');hideFilter('tipo');">
            Cuerpo <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag sinHorno" id="tab-emociones">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Emociones" onclick="tag('Emociones');hide('tab-emociones');show('emociones');hideFilter('tipo');">
            Emociones <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='infantiles' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-infantiles');hide('infantiles');hideFilterCuentos('tipo');" name="category" value="Infantiles"> Infantiles
          </label>
          <br>

          <label class="btn" id='ilustrados' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-ilustrados');hide('ilustrados');hideFilterCuentos('tipo');" name="category" value="Ilustrados"> Ilustrados
          </label>
          <br>

            <label class="btn" id='identidad' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-identidad');hide('identidad');hideFilterCuentos('tipo');" name="category" value="Identidad"> Identidad
            </label>
            <br>

            <label class="btn" id='dictadura' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-dictadura');hide('dictadura');hideFilterCuentos('tipo');" name="category" value="Dictadura"> Dictadura
            </label>
            <br>

            <label class="btn" id='cuerpo' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-cuerpo');hide('cuerpo');hideFilterCuentos('tipo');" name="category" value="Afectos"> Cuerpo
            </label>
            <br>

          <label class="btn" id='emociones'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-emociones');hide('emociones');hideFilterCuentos('tipo');" name="category" value="Emociones"> Emociones

          </label>
          <br>

          <label class="btn" id='varios'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-varios');hide('varios');hideFilterCuentos('tipo');" name="category" value="Varios"> Varios

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
