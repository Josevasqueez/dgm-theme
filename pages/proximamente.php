<?php

/**
 * Template Name: Proximamente
 *
 */

get_header();

?>

<div class="h-screen flex-col flex items-center justify-between px-8 md:px-16">
  <div></div>

  <section class="flex flex-col items-center justify-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-prox.svg" alt="DGM Piezas Genuinas" class="w-48">
    <h1 class="md:text-2xl font-light">Próximamente nuevo sitio web</h1>
  </section>

  <div class="text-white text-center text-xs">
    <h4>Razón Social de la empresa</h4>
    <p>TAUDEL SA</p>
    <h4>Dirección</h4>
    <p>Colonia 810 4013 Montevideo, Montevideo 11100 Uruguay</p>
  </div>
</div>

<?php wp_footer(); ?>
</body>

</html>