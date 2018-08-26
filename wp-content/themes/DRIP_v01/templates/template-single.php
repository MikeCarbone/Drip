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
                            <a href="#" class="suggested-article flex">
                                <img class="suggested-article__img"  src="img/2guysNoCountry.jpg">
                                <h3 class="suggested-article__title">These guys rock and are really cool and you should really look at these</h3>
                            </a>
                            <a href="#" class="suggested-article flex">
                                <img class="suggested-article__img"  src="img/2guysNoCountry.jpg">
                                <h3>These guys rock</h3>
                            </a>
                            <a href="#" class="suggested-article flex">
                                <img class="suggested-article__img"  src="img/2guysNoCountry.jpg">
                                <h3>These guys rock</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    <?php get_footer(); ?>