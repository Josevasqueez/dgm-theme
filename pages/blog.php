<?php

/**
 * Template Name: Blog
 *
 */
get_header();
?>
<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    '¿Por qué elegir repuestos originales?',
    'Encontrá en este espacio artículos breves con información útil, comparativas y argumentos claros sobre el valor de los repuestos originales.',
    'max-w-2xl md:max-w-3xl'
  );
  ?>
</section>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php dgm_listing_post(6, true); ?>
</section>
<?php get_footer(); ?>