<?php
/*
 * Template Name: Post Listing
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/

$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 3
];
$posts = new WP_Query($arg);

get_header(); ?>


  <!-- banner Page==========================================-->

  <!-- <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1>
          <?php the_title();?>
        </h1>
      </div>
  </header> -->
  <main>
  <section class="two archive flex">
    <div class="trending trending-wrapper archive">
      <h1 class="trending__header">ARCHIVE</h1>
      <div class="article-list archive-list flex">
  <?php if ($posts->have_posts()) : ?>
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
					<a class="article-listing flex" href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail', array('class' => 'article-listing__img'));?>
            <?php else: ?>
                <img class="article-listing__img" src="https://placehold.it/1280x720" alt="">
            <?php endif; ?>
						<div class="article-listing__info">
							<h1 class="article-listing__title"><?php the_title()?></h1>
							<h3 class="article-listing__caption"><?php the_excerpt(); ?></h3>
							<h4 class="article-listing__date"><?php the_date();?></h4>
						</div>
					</a>
        
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p>
      <?php echo 'Sorry, no posts matched your criteria.'; ?>
    </p>
  <?php endif; ?>
  </div>
  </div>
  <?php get_footer(); ?>