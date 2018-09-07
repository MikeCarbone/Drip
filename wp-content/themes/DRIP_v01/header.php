<!DOCTYPE html>
<html>
<head>
  <title>DRIP</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php
    if(is_home()){
      $header_class = '';
    } else {
      $header_class = '--not-home';
    }

?>
  <header class="flex header header<?php echo $header_class; ?>">
    <h1 class="header__logo header__logo<?php echo $header_class; ?>"><a class="header__logo-link<?php echo $header_class; ?>" href="<?php echo home_url(); ?>">DRIP</a></h1>
    <nav class="nav flex">
      <div class="menu-js<?php echo $header_class; ?>" id="menu-js">
        <div class="menu__icon">
          <svg aria-hidden="true" class="svg-inline--fa fa-align-right fa-w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M160 84V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H176c-8.837 0-16-7.163-16-16zM16 228h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm160-128h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H176c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
        </div>
      </div>
      
        <?php get_search_form(); ?>

    </nav>
    <div class="menu">
			<h1 class="header menu__header">DRIP</h1>
			<h1 class="menu__close-button">X</h1>
      <?php 
        //item class loca
        $menu_args = [
          'menu_class' => 'menu__list flex'
        ];
        wp_nav_menu($menu_args); ?>
        
      
      <!-- <ul class="menu__list flex">
          <li class="menu__list-item"><a class="menu__list-link" href="#">ABOUT</a></li>
          <li class="menu__list-item"><a class="menu__list-link" href="#">STORE</a></li>
          <li class="menu__list-item"><a class="menu__list-link" href="#">ADVERTISE</a></li>
          <li class="menu__list-item"><a class="menu__list-link" href="#">CAREERS</a></li>
          <li class="menu__list-item"><a class="menu__list-link" href="#">INTERNSHIPS</a></li>
          <li class="menu__list-item"><a class="menu__list-link" href="#">CONTACT</a></li>
        </ul> -->
    </div>
  </header>