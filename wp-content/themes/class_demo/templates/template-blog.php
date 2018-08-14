<?php

  $arg = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3
  ];

  $posts = new WP_Query($arg);

?>


<?php get_header(); ?>

<div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-12 single-post">
        <article class="post"> 
        

<?php get_footer(); ?>