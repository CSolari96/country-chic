<footer>

  <!-- Social Media Bar -->

  <div class="container-fluid">
      <div class="row social-footer animated fadeInLeft duration1 eds-on-scroll ">
          <div class="col-md-12 inline-icons">

            <a href="https://www.facebook.com/CountryChicPaint/">
              <div class="social-button">
                <img src="<?php echo get_template_directory_uri() . '/images/facebook.png'?>" alt="Facebook icon" class="social-icon"/>
              </div>
            </a>

            <a href="https://www.pinterest.com/CountryChicP/">
              <div class="social-button">
                <img src="<?php echo get_template_directory_uri() . '/images/pinterest.png'?>" alt="Facebook icon" class="social-icon"/>
              </div>
            </a>

            <a href="https://www.youtube.com/user/CountryChicPaint">
              <div class="social-button">
                <img src="<?php echo get_template_directory_uri() . '/images/youtube.png'?>" alt="Facebook icon" class="social-icon"/>
              </div>
            </a>

            <a href="https://www.instagram.com/countrychicpaint/">
              <div class="social-button">
                <img src="<?php echo get_template_directory_uri() . '/images/instagram.png'?>" alt="Facebook icon" class="social-icon"/>
              </div>
            </a>

          </div>


      </div>
  </div>
    <!-- Green Footer bar -->
      <div class="container-fluid">
          <div class="row green-footer test">
              <!-- Left -->
              <div class="col-md-4">
                <?php dynamic_sidebar('footer-left'); ?>
              </div>

              <!-- Middle -->
              <div class="col-md-4">
                <?php dynamic_sidebar('footer-middle'); ?>
              </div>

              </div>
          </div>

    <!-- Animals -->
    <div class="animals animated fadeInRight duration1 eds-on-scroll ">
      <img src="<?php echo get_template_directory_uri() . '/images/FooterImage.png'?>" alt="Bear and Bunny">
    </div>

    <!-- Copyright and Payment info -->
    <div class="under-footer">

        <div class="copyright">
          <p> &copy; 2020 Country Chic Paint </p>
        </div>

        <div class="payment">
          <img src="<?php echo get_template_directory_uri() . '/images/amex.png'?>" alt="American Express" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/apay.png'?>" alt="Apple Pay" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/gpay.png'?>" alt="Google Pay" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/master.png'?>" alt="Master Card" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/paypal.png'?>" alt="PayPal" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/spay.png'?>" alt="Shop Pay" class="pay-icon"/>

          <img src="<?php echo get_template_directory_uri() . '/images/visa.png'?>" alt="Visa" class="pay-icon"/>
        </div>

      </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
