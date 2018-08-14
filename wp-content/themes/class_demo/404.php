<?php 
/*
  Template Name: 404
*/

  get_header();?>


<div class="container"> 
<!--blog body-->

<div id="Blog-post"> 
  
  <!-- banner Page
    ==========================================-->
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
       <div class="col-md-8 col-sm-12 single-post"> 
              <?php if(have_posts()): ?>  
              <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>

            <?php else: ?>
              <h2>Sorry, no content</h2>
          <?php endif; ?>
        </div>
		<br>
        <div class="clearfix"></div>
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php get_footer();?>