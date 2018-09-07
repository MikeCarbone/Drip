<?php 
/*
Template Name: Search Page
*/

$searched_string = $_GET['s'];
echo $searched_string;

// $arg = [
//   'post_type'     => 'post',
//   'post_status'   => 'publish',
//   'posts_per_page'=> 10,
//   's' => 'hello'
// ];

// $posts = new WP_Query( $arg );



get_header(); 


?>

<main>
		<section class="two archive flex">
			<div class="trending trending-wrapper archive">
				<h1 class="trending__header">SEARCH RESULTS FOR:</h1>
				<h2 class="search-term"><?php echo $searched_string; ?></h2>
				<div class="article-list archive-list flex">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
       <!-- the article -->
        <a class="article-listing flex" href="<?php the_permalink(); ?>">
            <?php
            // Check to see if the post has a featured image
            if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('thumbnail', array('class' => 'article-listing__img'));?>
            <?php else: ?>
                <img class="article-listing__img" src="https://placehold.it/1280x720" alt="">
            <?php endif; ?>
            <div class="article-listing__info">
                <h1 class="article-listing__title"><?php the_title(); ?></h1>
                <h3 class="article-listing__caption"><?php the_excerpt(); ?></h3>
                <h4 class="article-listing__date"><?php the_date(); ?></h4>
            </div>
        </a>
       <!--  end article -->
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