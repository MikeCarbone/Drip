<?php 
/*
	Template Name: General
*/
    get_header();
?>
	<main class="content">
		<section class="article flex">
			<img class="article__img" src="https://media.wmagazine.com/photos/57d2f99424d0d1ef061db933/4:3/w_1536/1316.flip.covers.KANYE.image.jpg">
			<h1 class="article__header">Kanye West is the x King</h1>
			<div class="byline flex">
				<h4 class="byline__text">By Mike Carbone</h4>
				<h4 class="byline__text">August 17th, 2018</h4>
			</div>
			
			<div class="sub-content flex">
				<div class="sub-content__article">
                        <?php if (have_posts()): ?>
                            <article class="post">   
                            <?php // TO SHOW THE PAGE CONTENTS?>
                            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                            <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
                            <?php endwhile; //resetting the page loop?>
                            <?php wp_reset_query(); //resetting the page query?>
                            </article>
                        <?php else: ?>
                            <h2>Sorry, No Post Found</h2>
                        <?php endif; ?>
				</div>
				
				</div>
			</div>
		</main>
		
		<?php get_footer(); ?>