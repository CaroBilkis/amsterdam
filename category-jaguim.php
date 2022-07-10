

<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm12">
      <h2 class="titulo2-left">Jaguim</h2>


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


        <div class="tag pesaj" id="tab-pesaj">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Pesaj" onclick="tag('Pesaj');hide('tab-pesaj');show('pesaj');hideFilter('tipo');">
            Pesaj <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag verduras" id="tab-iom Kipur">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Iom Kipur" onclick="tag('Iom Kipur');hide('tab-iom Kipur');show('iom Kipur');hideFilter('tipo');">
            Iom Kipur <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag rosh hashana" id="tab-rosh hashana">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Rosh hashana" onclick="tag('Rosh hashana');hide('tab-rosh hashana');show('rosh hashana');hideFilter('tipo');">
            Rosh hashana <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag purim" id="tab-purim">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Purim" onclick="tag('Purim');hide('tab-purim');show('purim');hideFilter('tipo');">
            Purim <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="tag januca" id="tab-januca">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Januca" onclick="tag('Januca');hide('tab-januca');show('januca');hideFilter('tipo');">
            Januca <span class="badge badge-light"><i class="fas fa-times"></i></span>
          </button>
        </div>

        <div class="tag sucot" id="tab-sucot">
          <button  type="button" class="btn btn-secondary t5-tag" name="category" value="Sucot" onclick="tag('Sucot');hide('tab-sucot');show('sucot');hideFilter('tipo');">
            Sucot <span class="badge badge-light"><i class="fas fa-times"></i></span>
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
          <label class="btn" id='pesaj' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-pesaj');hide('pesaj');hideFilterJaguim('tipo');" name="category" value="Pesaj"> Pesaj
          </label>
          <br>

          <label class="btn" id='iom Kipur' >
            <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-iom Kipur');hide('iom Kipur');hideFilterJaguim('tipo');" name="category" value="Iom Kipur"> Iom Kipur
          </label>
          <br>

            <label class="btn" id='rosh hashana' >
              <input  class="btn-check"type="checkbox" onclick="filterSelection();show('tab-rosh hashana');hide('rosh hashana');hideFilterJaguim('tipo');" name="category" value="Rosh hashana"> Rosh hashana
            </label>
            <br>

            <label class="btn" id='purim' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-purim');hide('purim');hideFilterJaguim('tipo');" name="category" value="Purim"> Purim
            </label>
            <br>

            <label class="btn" id='januca' >
              <input  class="btn-check"type="checkbox"  onclick="filterSelection();show('tab-januca');hide('januca');hideFilterJaguim('tipo');" name="category" value="Januca"> Januca
            </label>
            <br>

          <label class="btn" id='sucot'>
            <input class="btn-check" type="checkbox" onclick="filterSelection();show('tab-sucot');hide('sucot');hideFilterJaguim('tipo');" name="category" value="Sucot"> Sucot

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
