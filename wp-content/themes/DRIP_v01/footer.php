<section class="footer">
      <h1 class="footer__header">DRIP</h1>
      <div class="footer__lists flex">
        <!-- <ul class="footer__list">
          <li class="footer__list-item"><a class="footer__list-link" href="#">ABOUT</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="#">CONTACT</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="#">ADVERTISE</a></li>
        </ul>
        <div class="footer__hor-div"></div>
        <ul class="footer__list">
          <li class="footer__list-item"><a class="footer__list-link" href="#">CAREERS</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="#">INTERNSHIPS</a></li>
          <li class="footer__list-item"><a class="footer__list-link" href="#">STORE</a></li>
        </ul> -->
        <?php 
        //item class loca
        $menu_args = [
          'menu_class' => 'footer__lists flex'
        ];
        wp_nav_menu($menu_args); ?>
      </div>

      <h4 class="footer__copy">&copy; DRIP Media 2018. All Rights Reserved.</h4>
</section>
<?php wp_footer(); ?> 
</body>
</html>