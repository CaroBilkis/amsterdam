

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Cosas útiles</h2>


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


        <div class="tag tecnicas" id="tab-tecnicas">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Técnicas" onclick="tag('Técnicas');hide('tab-tecnicas');show('tecnicas');hideFilter('tipo');">
            Técnicas <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag materiales" id="tab-materiales">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Materiales" onclick="tag('Materiales');hide('tab-materiales');show('materiales');hideFilter('tipo');">
            Materiales <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag varias" id="tab-varias">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Varias" onclick="tag('Varias');hide('tab-varias');show('varias');hideFilter('tipo');">
            Varias <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='tecnicas' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-tecnicas');hide('tecnicas');hideFilterUtil('tipo');" name="category" value="Técnicas"> Técnicas
          </label>
          <br>

          <label class="btn" id='materialees' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-materialees');hide('materialees');hideFilterUtil('tipo');" name="category" value="Materialees"> Materialees
          </label>
          <br>

            <label class="btn" id='varios' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-varios');hide('varios');hideFilterUtil('tipo');" name="category" value="Varios"> Varios
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
