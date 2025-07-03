<?php

/**
 * Template Name: Accesorios
 *
 */
get_header();
?>
<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'Accesorios Originales: funcionalidad, diseño y respaldo Chevrolet',
    'Los accesorios originales Chevrolet están pensados para integrarse perfectamente a cada modelo, sin comprometer la estética, el rendimiento ni la garantía del vehículo.',
    'max-w-2xl md:max-w-3xl'
  );
  ?>
  <a href="<?php echo esc_url(home_url('/donde-comprar')); ?>">
    <div class="mt-8 flex justify-center">
      <?php dgm_button('chevrolet.svg', 'Dónde comprar'); ?>
    </div>
  </a>
</section>

<?php dgm_gallery(get_field('galeria')); ?>


<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <h2 class="max-w-3xl mx-auto px-8 md:px-16 text-3xl mb-12 text-secondary font-semibold">
    Beneficios:
  </h2>
  <?php
  $icon_boxes = [
    [
      'icon' => 'compatibilidad',
      'title' => 'Compatibilidad perfecta',
      'desc' => 'Diseñados para cada modelo, sin adaptaciones ni riesgos.'
    ],
    [
      'icon' => 'diseno',
      'title' => 'Diseño original',
      'desc' => 'Estética alineada a la marca, sin alterar líneas ni acabados.'
    ],
    [
      'icon' => 'originalidad',
      'title' => 'Garantía Chevrolet',
      'desc' => 'Soporte oficial y calidad comprobada por General Motors.'
    ],
  ];
  icon_boxes($icon_boxes);
  ?>
</section>

<?php
dgm_call_to_action(
  'Encontrá nuestros accesorios originales en la red de Concesionarios Oficiales Chevrolet',
  home_url('/donde-comprar'), // Cambia la URL aquí si es necesario
);
?>
<?php get_footer(); ?>