<div class="filterDivcard">
<div class="contenido">
  <a class="t-card" href="<?php the_permalink();?>"><?php the_title(); ?></a>
  <div class="card-txt">
    <p><?php the_excerpt(); ?></p>

  </div>

  <div class="card-interactuar">
    <!-- <a href="#">  <span><i class="far fa-heart"></i></span></a>
    <a href="#">  <span><i class="fas fa-share-alt"></i></span></a> -->
    <div class="bookmark">
        <?php echo do_shortcode( '[cbxwpbookmarkbtn]' ) ; ?>
    </div>


  </div>
</div>

</div>
