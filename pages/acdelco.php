<?php

/**
 * Template Name: ACDelco
 *
 */
get_header();
?>
<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'ACDelco: tecnología global para el mantenimiento confiable',
    'ACDelco es la marca global de mantenimiento automotriz de General Motors. Ofrece una línea completa de productos de alta calidad, como filtros, bujías y más.<br/><br/>

Desarrollados bajo estándares internacionales, los productos ACDelco están pensados para extender la vida útil del vehículo y mantener su rendimiento con el respaldo de una marca líder.',
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
  <h2 class="max-w-3xl mx-auto px-8 md:px-16 text-3xl mb-6 text-secondary font-light">
    Repuestos ACDelco para tu auto
  </h2>
  <div class="mx-auto w-fit">
    <?php
    $repuestos = [
      [
        'icono' => 'amortiguadores.svg',
        'alt' => 'Amortiguadores',
        'texto' => 'Amortiguadores delanteros y traseros'
      ],
      [
        'icono' => 'bobinas.svg',
        'alt' => 'Bobinas de encendido',
        'texto' => 'Bobinas de encendido'
      ],
      [
        'icono' => 'bujias.svg',
        'alt' => 'Bujías',
        'texto' => 'Bujías'
      ],
      [
        'icono' => 'cable.svg',
        'alt' => 'Cable de bujía',
        'texto' => 'Cable de bujía'
      ],
      [
        'icono' => 'correas.svg',
        'alt' => 'Correas',
        'texto' => 'Correas'
      ],
      [
        'icono' => 'escobillas.svg',
        'alt' => 'Escobillas',
        'texto' => 'Escobillas'
      ],
      [
        'icono' => 'filtros.svg',
        'alt' => 'Filtros de aceite, aire y nafta',
        'texto' => 'Filtros de aceite, aire y nafta'
      ],
      [
        'icono' => 'pastillas.svg',
        'alt' => 'Pastillas de freno delanteras y traseras',
        'texto' => 'Pastillas de freno delanteras y traseras'
      ],
    ];
    ?>
    <?php foreach ($repuestos as $item): ?>
      <div class="flex space-x-2 items-center mt-1">
        <img class="w-10 sm:w-12" src="<?php echo get_template_directory_uri(); ?>/assets/repuestos/<?php echo $item['icono']; ?>" alt="<?php echo esc_attr($item['alt']); ?>">
        <span class="text-sm sm:text-base"><?php echo $item['texto']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>


<?php
dgm_call_to_action(
  'Descubrí las piezas ACDelco y asegurará el mejor rendimiento de tu Chevrolet',
  home_url('/donde-comprar'), // Cambia la URL aquí si es necesario
);
?>
<?php get_footer(); ?>