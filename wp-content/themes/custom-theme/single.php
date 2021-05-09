<!-- THE PLACE TO SHOW SINGLE CLIENT INFORMATION -->

<section class="single container-big">
    <?php while (have_posts()) : the_post(); ?>


        <?php echo $post->ID ?>


    <?php
    endwhile;
    ?>
