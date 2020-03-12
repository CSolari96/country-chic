<?php

	/*

	Template Name: Contact About Layout
	Template Post Type: page

	*/

?>

<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12">
        <?php
          if(have_posts())  {
            while(have_posts()){
              the_post(); ?>

              <?php the_title(); ?>

              <?php the_content(); ?>

          <?php  } //ends while loop
          } //ends if statement
         ?>

      </main>

    </div>
  </div>


<?php get_footer(); ?>
