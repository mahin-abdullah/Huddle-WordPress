<footer>
      <div class="container row--ft">
        <div class="footer__contact col">
          <a href="#">
            <img
              class="footer__logo"
              src="<?php echo get_theme_file_uri('/images/logo-footer.svg') ?>"
              alt="Logo of Huddle"
            />
          </a>
          <p><img src="<?php echo get_theme_file_uri('/images/icon-location.svg') ?>" alt="location icon">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quisquam quod animi sit doloremque atque necessitatibus.</p>
          
          <p>
            <img src="<?php echo get_theme_file_uri('/images/icon-phone.svg') ?>" alt="phone icon" />Phone:
            +1-543-123-4567 
          </p>
          <p>
            <img
              src="<?php echo get_theme_file_uri('/images/icon-email.svg') ?>"
              alt="email icon"
            />example@huddle.com 
          </p>
        </div>

        <div class="footer__list col">
          <li class="footer__item">
            <a class="footer__link" href="#">About Us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Jobs</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Blog</a>
          </li>
        </div>

        <div class="footer__list col">
          <li class="footer__item">
            <a class="footer__link" href="#">Contact Us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Privacy</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">FAQ</a>
          </li>
        </div>

        <div class="social__icons col">
          <i class="fab fa-facebook-f fa-lg"><a href="#"></a></i>
          <i class="fab fa-twitter fa-lg"><a href="#"></a></i>
          <i class="fab fa-instagram fa-lg"><a href="#"></a></i>
        </div>
      </div>

      <div class="dev">
        <p class="dev-title">
          Made with love by
          <a class="dev--info" href="https://github.com/mahin-abdullah"
            >mahin</a
          >
        </p>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>