<!DOCTYPE html>
<html>
<head>
  <title>DRIP</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php wp_head(); ?>

</head>
<body>
  <header class="flex header header--dark">
    <h1 class="header__logo header__logo--dark">DRIP</h1>
    <nav class="nav flex">
      <div id="menu-js">
        <div class="menu__icon"></div>
      </div>
      <div class="search flex">
        <div class="search__icon search__icon--dark">
          <div></div>
        </div>
        <input class="search__input search__input--dark" type="text" name="search" placeholder="Search...">
        <button class="search__button search__button--dark">Search</button>
      </div>

    </nav>
    <div class="me-menu">
      <h1 class="header menu__header">DRIP</h1>
      <h1 class="menu__close-button">X</h1>
      <?php wp_nav_menu(['DRIP_v01' => 'main']); ?>
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