<?php

/**
 * Template Name: Contacto Exitoso
 *
 */
get_header();
?>

<section class="max-w-7xl mx-auto px-8 md:px-16 my-20 text-center">

  <p class="text-xl">Nos pondremos en contacto contigo lo antes posible.</p>
  <div class="text-center mt-8">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <?php dgm_button('chevrolet.svg', 'Volver a inicio'); ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>