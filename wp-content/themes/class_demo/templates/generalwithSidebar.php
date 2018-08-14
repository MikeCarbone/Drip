<?php 
/*
	Template Name: General With Sidebar
*/

	get_header();?>
	<div id="Blog-post">
		<div class="container">
			<div class="row">

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
			    <aside class="col-md-4 col-sm-12">
	      			<?php get_sidebar(); ?>
	      		</aside>
			    <div class="clearfix"></div>
	      	</div>
	    </div>
    </div>

      


<?php get_footer();?>
