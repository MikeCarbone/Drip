<?php 
/*
	Template Name: 404
*/

get_header(); ?>
<main class="content">
    <section class="article flex">
        <div class="fouroh">
            <h1 class="header fouroh__header">404</h1>
            <h3 class="fouroh__subheader">Page Not Found</h3>
            <h3 class="fouroh__mean">Fix your shit boi</h3>
        </div>
        <img class="article__img fouroh__img" src="https://media.giphy.com/media/20k1punZ5bpmM/giphy.gif">
    </section>
    <div class="bottom-labels flex">
        <a href="#" class="bottom-labels__button">Previous</a>
        <a href="#" class="bottom-labels__button">Next</a>
    </div>
    </main>
    
    <div class="flex row">
        <a href="">
        <section class="sub-article col-50">
            <img class="sub-article__img" src="http://cache.umusic.com/_images/facebook/drdre/og-dre.jpg">
            <div class="sub-article__overlay"></div>
            <div class="sub-article__caption-zone flex">
                <h1 class="sub-article__title">Kanye West is the king.</h1>
                <div class="flex caption-bottom">
                    <h4 class="main-caption">Read about how this guy is literally a x beast.</h4>
                    <div class="button sub-article__button">
                        <h4><a class="button-link" href="#">Read More</a></h4>
                    </div>
                </div>
            </div>
        </section>
        </a>
        <a href="#">
        <section class="sub-article col-50">
            <img class="sub-article__img" src="img/2guysNoCountry.jpg">
            <div class="sub-article__overlay"></div>
            <div class="sub-article__caption-zone flex">
                <h1 class="sub-article__title">Kanye West is the x king.</h1>
                <div class="flex caption-bottom">
                    <h4 class="main-caption">Read about how this guy is literally a x beast.</h4>
                    <div class="button sub-article__button">
                        <h4><a class="button-link" href="#">Read More</a></h4>
                    </div>
                </div>
            </div>
        </section>
        </a>
    </div>
<?php get_footer(); ?>