<section class="nouvelles container-big">
     <h1 class="heading-primary u-margin-top-big u-margin-bottom-mid">Nouvelles</h1>
     <div class="nouvelles__content flex">
          <?php query_posts('cat=2');
          if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
                    <div class="nouvelles__box u-margin-bottom-mid">
                         <div class="nouvelles__box--thumb" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);background-position:center;background-size:cover; background-repeat:no-repeat"></div>
                         <h4 class="heading-quaternary heading-quaternary--dark u-margin-top-small"><?php echo get_the_date(); ?></h4>
                         <h2 class="heading-secondary u-margin-top-small u-margin-bottom-small"><?php the_title(); ?></h2>
                         <?php the_excerpt(); ?>
                         <div class="nouvelles__link center u-margin-top-small">
                              <a href="<?php the_permalink(); ?>">Lire la suite</a>
                         </div>

                    </div>
                    </li>

          <?php endwhile;
          endif; ?>
     </div>


</section>
