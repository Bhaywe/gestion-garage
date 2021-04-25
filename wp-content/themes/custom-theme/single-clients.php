<?php
get_header();
?>

<!-- THE PLACE TO SHOW SINGLE CLIENT INFORMATION -->

<section class="single container-big">
     <?php while (have_posts()) : the_post(); ?>


          <div class="single__thumb u-margin-top-big u-margin-bottom-mid" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);background-position:center;background-size:cover; background-repeat:no-repeat"></div>

          <div class="single__title u-margin-bottom-mid">
               <h4 class="heading-quaternary heading-quaternary--dark u-margin-bottom-small"><?php echo get_the_date(); ?></h4>
               <h1 class="heading-secondary"><?php the_title(); ?></h1>
          </div>
          <article class="single__content u-margin-bottom-big">
               <?php the_content(); ?>
          </article>

</section>

<?php
     endwhile;
     get_footer();
?>
