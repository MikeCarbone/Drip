<!DOCTYPE html>
<html>
<head>
  <title>DRIP</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php
    if(!is_home()){
      $header_class = '--dark';
    } else {
      $header_class = '';
    }

?>
  <header class="flex header header<?php echo $header_class; ?>">
    <h1 class="header__logo header__logo<?php echo $header_class; ?>">DRIP</h1>
    <nav class="nav flex">
      <div id="menu-js">
        <div class="menu__icon"></div>
      </div>
      <div class="search flex">
        <div class="search__icon search__icon<?php echo $header_class; ?>">
          <div></div>
        </div>
        <input class="search__input search__input<?php echo $header_class; ?>" type="text" name="search" placeholder="Search...">
        <button class="search__button search__button<?php echo $header_class; ?>">Search</button>
      </div>

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