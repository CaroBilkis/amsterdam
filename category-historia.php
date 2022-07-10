

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Historia</h2>


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


        <div class="tag dictadura" id="tab-dictadura">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Dictadura" onclick="tag('Dictadura');hide('tab-dictadura');show('dictadura');hideFilter('tipo');">
            Dictadura <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag holocausto" id="tab-holocausto">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Holocausto" onclick="tag('Holocausto');hide('tab-holocausto');show('holocausto');hideFilter('tipo');">
            Holocausto <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag guerra fria" id="tab-guerra fria">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Guerra fría" onclick="tag('Chocolate');hide('tab-guerra fria');show('guerra fria');hideFilter('tipo');">
            Guerra fría
 <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag neoliberalismo" id="tab-neoliberalismo">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Neoliberalismo" onclick="tag('Neoliberalismo');hide('tab-neoliberalismo');show('neoliberalismo');hideFilter('tipo');">
            Neoliberalismo <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag referentes" id="tab-referentes">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Referentes" onclick="tag('Referentes');hide('tab-referentes');show('referentes');hideFilter('tipo');">
            Referentes <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag sitios" id="tab-sitios">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Sitios" onclick="tag('Sitios');hide('tab-sitios');show('sitios');hideFilter('tipo');">
            Sitios <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='dictadura' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-dictadura');hide('dictadura');hideFilterHistoria('tipo');" name="category" value="Dictadura"> Dictadura
          </label>
          <br>

          <label class="btn" id='holocausto' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-holocausto');hide('holocausto');hideFilterHistoria('tipo');" name="category" value="Holocausto"> Holocausto
          </label>
          <br>

            <label class="btn" id='guerra fría' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-guerra fría');hide('guerra fría');hideFilterHistoria('tipo');" name="category" value="Guerra fría"> Guerra fría
            </label>
            <br>

            <label class="btn" id='neoliberalismo' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-neoliberalismo');hide('neoliberalismo');hideFilterHistoria('tipo');" name="category" value="Neoliberalismo"> Neoliberalismo
            </label>
            <br>

            <label class="btn" id='referentes' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-referentes');hide('referentes');hideFilterHistoria('tipo');" name="category" value="Referentes"> Referentes
            </label>
            <br>

          <label class="btn" id='sitios'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-sitios');hide('sitios');hideFilterHistoria('tipo');" name="category" value="Sitios"> Sitios

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
