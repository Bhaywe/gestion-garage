<section class="contact container-small u-margin-bottom-big">
     <h2 class="heading-secondary u-margin-top-big u-margin-bottom-small">Contact</h2>
     <?php if (is_active_sidebar('contact-form')) : ?>
          <div id="primary-sidebar" class="contact__widget u-margin-top-small" role="complementary">
               <?php dynamic_sidebar('contact-form'); ?>
          </div>
     <?php endif; ?>
</section>