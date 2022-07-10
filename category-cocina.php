

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Cocina</h2>


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
          <button  type="button" class="btn btn-primary t5-tag"name="category" value="Media" onclick="tag('Media');hide('tab-media');show('media');hideFilter('capa');">
            Media <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag mayor" id="tab-mayor">
          <button  type="button" class="btn btn-primary t5-tag"name="category" value="Mayor" onclick="tag('Mayor');hide('tab-mayor');show('mayor');hideFilter('capa');">
            Mayor <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>


        <div class="tag frutas" id="tab-frutas">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="Frutas" onclick="tag('Frutas');hide('tab-frutas');show('frutas');hideFilter('tipo');">
            Frutas <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag verduras" id="tab-verduras">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="Verduras" onclick="tag('Verduras');hide('tab-verduras');show('verduras');hideFilter('tipo');">
            Verduras <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag chocholate" id="tab-chocolate">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="Chocolate" onclick="tag('Chocolate');hide('tab-chocolate');show('chocolate');hideFilter('tipo');">
            Chocolate <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag judias" id="tab-judias">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="Judias" onclick="tag('Judias');hide('tab-judias');show('judias');hideFilter('tipo');">
            Judias <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag horno" id="tab-horno">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="Horno" onclick="tag('Horno');hide('tab-horno');show('horno');hideFilter('tipo');">
            Horno <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag sinHorno" id="tab-sinHorno">
          <button  type="button" class="btn btn-secondary t5-tag"name="category" value="sinHorno" onclick="tag('sinHorno');hide('tab-sinHorno');show('sinHorno');hideFilter('tipo');">
            Sin horno <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='frutas' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-frutas');hide('frutas');hideFilter2('tipo');" name="category" value="Frutas"> Frutas
          </label>
          <br>

          <label class="btn" id='verduras' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-verduras');hide('verduras');hideFilter2('tipo');" name="category" value="Verduras"> Verduras
          </label>
          <br>

            <label class="btn" id='chocolate' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-chocolate');hide('chocolate');hideFilter2('tipo');" name="category" value="Chocolate"> Chocolate
            </label>
            <br>

            <label class="btn" id='judias' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-judias');hide('judias');hideFilter2('tipo');" name="category" value="Judias"> Tipicas judias
            </label>
            <br>

            <label class="btn" id='horno' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-horno');hide('horno');hideFilter2('tipo');" name="category" value="Horno"> Con horno
            </label>
            <br>

          <label class="btn" id='sinHorno'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-sinHorno');hide('sinHorno');hideFilter2('tipo');" name="category" value="sinHorno"> Sin horno

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
