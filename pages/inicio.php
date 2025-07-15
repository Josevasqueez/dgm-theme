<?php

/**
 * Template Name: Home
 *
 */

get_header();

?>

<?php dgm_slider(); ?>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <div class="flex flex-col items-center mb-16">
    <img class="w-32 md:w-auto mb-4" src="<?php echo get_template_directory_uri(); ?>/assets/chevrolet.svg" alt="Logo DGM">
    <p class="max-w-3xl"><span class="font-semibold">Somos el distribuidor exclusivo de repuestos originales Chevrolet en Uruguay.</span>
      Designados por General Motors, con el compromiso de garantizar que cada vehículo reciba piezas genuinas que cuiden su rendimiento, seguridad y durabilidad.</p>
  </div>
  <?php
  $icon_boxes = [
    [
      'icon' => 'garantia',
      'title' => 'Garantía General Motors',
    ],
    [
      'icon' => 'precio',
      'title' => 'Precio justo',
    ],
    [
      'icon' => 'cobertura',
      'title' => 'Cobertura nacional',
    ],
    [
      'icon' => 'seguridad',
      'title' => 'Seguridad garantizada',
    ],
  ];
  icon_boxes($icon_boxes);
  ?>
</section>

<?php dgm_nuestros_productos_section(false); ?>

<section class="max-w-5xl mx-auto px-8 md:px-16 mt-20 mb-8 text-center">
  <div class="flex flex-col items-center">
    <span class="uppercase font-light mb-6 text-sm md:text-xl">__ Blog __</span>
    <h2 class="max-w-2xl text-lg md:text-2xl font-bold mb-4">¿Por qué elegir repuestos originales?</h2>
    <p class="max-w-2xl">Descubrí por qué las piezas certificadas hacen la diferencia en rendimiento, seguridad y valor a largo plazo.
    </p>
  </div>
  <div class="mt-12">
    <?php dgm_listing_post(2, false); ?>
  </div>
  <div class="text-white text-center text-xs">
    <h4>Razón Social de la empresa</h4>
    <p>TAUDEL SA</p>
    <h4>Dirección</h4>
    <p>Colonia 810 4013 Montevideo, Montevideo 11100 Uruguay</p>
  </div>
</section>

<?php get_footer(); ?>