</body>

<footer>

  <!-- Social Media Bar -->

  <div class="container-fluid">
      <div class="row social-footer animated fadeInLeft duration1 eds-on-scroll ">
          <div class="col-md-12">

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

    <div class="animals animated fadeInRight duration1 eds-on-scroll ">
      <img src="<?php echo get_template_directory_uri() . '/images/FooterImage.png'?>" alt="Bear and Bunny">
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
