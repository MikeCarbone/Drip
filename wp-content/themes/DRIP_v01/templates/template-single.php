<?php

get_header();
?>
    <!-- banner Page
    ==========================================-->
    <main class="content">
        <?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $categories = get_categories();
        ?>
        <section class="article flex">
           <?php the_post_thumbnail('full', ['class' => 'article__img']);?>
            <h1 class="article__header"><?php the_title()?></h1>
            <div class="byline flex">
                <h4 class="byline__text">By Mike Carbone</h4>
                <h4 class="byline__text"><?php the_date(); ?></h4>
            </div>
            
            <div class="sub-content flex">
                <div class="sub-content__article">
                    <?php the_content(); ?>
            <?php endwhile; //resetting the page loop?>
                <?php wp_reset_query(); //resetting the page query?>
        <?php else: ?>
            <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
                    <div class="next">
                        <h4 class="next__header article__h4 article__header">Enjoyed the article? Check these out:</h2>
                        <div class="threesome flex">
                            <?php
                                $arg = [
                                  'post_type'     => 'post',
                                  'post_status'   => 'publish',
                                  'posts_per_page'=> 3
                                ];
                                $posts = new WP_Query($arg);

                            ?>
                            <?php if ($posts->have_posts()) : ?>
                                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="suggested-article flex">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('thumbnail', array('class' => 'suggested-article__img'));?>
                                        <?php else: ?>
                                            <img class="hero__img" src="https://placehold.it/1280x720" alt="">
                                        <?php endif; ?>
                                        <h3 class="suggested-article__title"><?php the_title(); ?></h3>
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
                </div>
            </div>

    <?php get_footer(); ?>