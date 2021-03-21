<?php wp_footer(); ?>
<?php get_template_part('template-parts/newsletter'); ?>

</main>
<footer class="footer">
     <div class="footer__content container-big flex">
          <div class="footer__logo">
               <img src="<?php echo get_template_directory_uri(); ?>/img/logo-forme.png" alt="Logo Effix">
          </div>
          <a href="<?php echo the_permalink(9); ?>">Contact</a>
     </div>
</footer>

</body>

</html>