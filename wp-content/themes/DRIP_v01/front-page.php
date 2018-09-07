<?php 

$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 6
];
$posts = new WP_Query($arg);


get_header(); ?>


<main>
  <?php $count = 0; ?>
  <?php if ($posts->have_posts()) : ?>
   <?php while ($posts->have_posts()) : $posts->the_post(); ?>
   <?php if ($count === 0): ?>
      <div class="hero flex">
        <div class="hero__dark-overlay"></div>
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full', array('class' => 'hero__img'));?>
        <?php else: ?>
            <img class="hero__img" src="https://placehold.it/1280x720" alt="">
        <?php endif; ?>
        <div class="hero__caption-zone flex">
          <h1 class="hero__title"><?php the_title(); ?></h1>
          <div class="flex caption-bottom">
            <h4 class="main-caption"><?php the_excerpt(); ?></h4>
            <div class="button hero__button">
              <h4><a class="button-link" href="<?php the_permalink(); ?>">Read More</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="flex row">
    <?php $count++;?>
    <?php elseif (($count == 1) || ($count == 2)): ?>
      <section class="sub-article col-50">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full', array('class' => 'sub-article__img'));?>
        <?php else: ?>
            <img class="sub-article__img" src="https://placehold.it/1280x720" alt="">
        <?php endif; ?>
        <div class="sub-article__overlay"></div>
        <div class="sub-article__caption-zone flex">
          <h1 class="sub-article__title"><?php the_title(); ?></h1>
          <div class="flex caption-bottom">
            <h4 class="main-caption"><?php the_excerpt(); ?></h4>
            <div class="button sub-article__button">
              <h4><a class="button-link" href="<?php the_permalink(); ?>">Read More</a></h4>
            </div>
          </div>
        </div>
      </section>
      <?php if($count === 2): ?>
          </div>
          <section class="two flex">
            <div class="trending trending-wrapper">
              <h1 class="trending__header">TOP TRENDING</h1>
              <div class="article-list flex">
      <?php endif; ?>

    <?php $count++; ?>
    <?php elseif (($count == 3) || ($count == 4) || ($count == 5) || ($count == 6)): ?>
        <a class="article-listing flex" href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()): ?>
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
        <?php if($count === 6): ?>
           </div>
         </div>
        <?php endif; ?>
      <?php $count++; ?>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>
        <?php echo 'Sorry, no posts matched your criteria.'; ?>
      </p>
    <?php endif; ?>
      </div>
      <!-- <div class="sidebar">
        <div class="sidebar__section sidebar__socials">
          <h1 class="sidebar__header">Follow us you fuck</h1>
          <div class="sidebar-all-socials flex">
            <div class="sidebar__icon">
              <a class="icon-link" href="http://twitter.com/themcarbone" target="_blank">
                <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="iconz" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
              </a>
            </div>
            <div class="sidebar__icon">
              <a class="icon-link" href="http://twitter.com/themcarbone" target="_blank">
                <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="iconz" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
              </a>
            </div>
            <div class="sidebar__icon">
              <a class="icon-link" href="http://twitter.com/themcarbone" target="_blank">
                <svg aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="iconz" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
              </a>
            </div>
          </div>
        </div>
        <div class="sidebar__section sidebar__socials">
          <h1 class="sidebar__header">Get Notified</h1>
          <div class="input flex">
            <input class="input__input" type="text" placeholder="email@sumthin.com" name="email">
            <h4><a class="button-link input__button">Esketit</a></h4> 
          </div>
        </div>
        <div class="sidebar__section">
          <h1 class="sidebar__header">A List Element</h1>
          <ul class="list sidebar__indent">
            <li class="list-item">Site Admin</li>
            <li class="list-item">Log Out</li>
            <li class="list-item">Entries RSS</li>
          </ul>
        </div>
        <div class="sidebar__section">
          <h1 class="sidebar__header">Archives</h1>
          <div class="sidebar__indent">
            <h4 class="faded-header"><a href="#">Support (01)</a></a></h4>
            <h4 class="faded-header"><a href="#">Design (11)</a></h4>
            <h4 class="faded-header"><a href="#">User Interface (301)</a></h4>
            <h4 class="faded-header"><a href="#">Wiki (533)</a></h4>
          </div>
        </div> -->
    </div>
      <div>
        <?php get_sidebar(); ?>
      </div>
    </section>
    <section class="peep">
      <h1 class="peep__header">Like our stuff? Hit our lines:</h1>
      <div class="peep__socials flex">
        <div class="peep__icon">
          <a class="peep__icon-link" href="http://twitter.com/themcarbone" target="_blank">
          <svg data-icon="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="peep__iconz" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
          </svg>
        </a>
        </div>
        <div class="peep__icon">
          <a class="peep__icon-link" href="http://twitter.com/themcarbone" target="_blank">
          <svg data-icon="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="peep__iconz" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
          </svg>
        </a>
        </div>      
      </div>
      <h1 class="peep__header">or subscribe to our newsletter:</h1>
      <div class="peep__email input flex">
        <input class="input__input" type="text" placeholder="email@sumthin.com" name="email">
        <h4><a class="button-link input__button">Esketit</a></h4>
      </div>  
    </section>
    

<?php get_footer(); ?>