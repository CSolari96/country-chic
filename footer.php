</body>

<footer>

  <div class="not-animals">
    <!-- Social Media Bar -->
    <div class="container-fluid">
        <div class="row social-footer">
            <div class="col-md-12">

              <a href="https://www.facebook.com/CountryChicPaint/">
                <button class="social-button">
                  <img src="<?php echo get_template_directory_uri() . '/images/facebook.png'?>" alt="Facebook icon" class="social-icon"/>
                </button>
              </a>

              <a href="https://www.pinterest.com/CountryChicP/">
                <button class="social-button">
                  <img src="<?php echo get_template_directory_uri() . '/images/pinterest.png'?>" alt="Facebook icon" class="social-icon"/>
                </button>
              </a>

              <a href="https://www.youtube.com/user/CountryChicPaint">
                <button class="social-button">
                  <img src="<?php echo get_template_directory_uri() . '/images/youtube.png'?>" alt="Facebook icon" class="social-icon"/>
                </button>
              </a>

              <a href="https://www.instagram.com/countrychicpaint/">
                <button class="social-button">
                  <img src="<?php echo get_template_directory_uri() . '/images/instagram.png'?>" alt="Facebook icon" class="social-icon"/>
                </button>
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
      </div>

    <div class="animals">
      <img src="<?php echo get_template_directory_uri() . '/images/FooterImage.png'?>" alt="Bear and Bunny">
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
