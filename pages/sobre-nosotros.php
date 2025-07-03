<?php

/**
 * Template Name: Sobre nosotros
 *
 */
get_header();
?>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'DGM nació en 2024 por iniciativa de la red oficial de concesionarios Chevrolet en Uruguay.',
    'Con el respaldo de General Motors, somos el único distribuidor oficial de repuestos Chevrolet en Uruguay. Abastecemos a Concesionarios, Compañías Aseguradoras y Agentes Comerciales Mayoristas, buscando llegar de forma eficiente y accesible a todos los propietarios Chevrolet de todo el país.',
    'max-w-3xl'
  );
  $icon_boxes = [
    [
      'icon' => 'oficial',
      'title' => 'Designación oficial de General Motors',
      'desc' => 'Único distribuidor autorizado de repuestos Chevrolet en Uruguay.'
    ],
    [
      'icon' => 'distribucion',
      'title' => 'Red de distribución nacional',
      'desc' => 'Conectamos 31 puntos de venta en todo el país.'
    ],
    [
      'icon' => 'origen',
      'title' => 'Origen en la red de concesionarios',
      'desc' => 'Nacimos desde quienes conocen de cerca el servicio postventa.'
    ],
    [
      'icon' => 'originalidad',
      'title' => 'Piezas originales',
      'desc' => 'Solo comercializamos piezas genuinas provistas por General Motors.'
    ],
  ];
  icon_boxes($icon_boxes);
  ?>
</section>

<section class="h-96 md:h-[90vh] flex items-center justify-center relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/centro.webp'); background-repeat: no-repeat; background-position: center; background-size: cover;">
  <div class="absolute inset-0 bg-secondaryDark/50 z-0"></div>
  <div class="mx-auto px-8 md:px-16 w-full max-w-4xl relative z-10">
    <h2 class="text-white text-xl sm:text-3xl md:text-4xl lg:text-6xl font-bold text-center drop-shadow-lg" style="line-height: 1.4;">
      Contamos con más de 10.000 artículos, en un Centro de Distribución de última generación
    </h2>
  </div>
</section>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'Reconocimiento regional.',
    'En 2024, fuimos reconocidos por General Motors Sudamérica con el premio <span class="font-semibold">Aftersales Investor of the Year</span>, destacando nuestro compromiso con el desarrollo del servicio postventa y la inversión en infraestructura.',
    'max-w-3xl'
  );
  ?>
</section>

<section class="relative" style="background-color: #000; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
  <div class="absolute inset-0 backdrop-blur-sm bg-black/40"></div>
  <div class="relative z-10 flex justify-center items-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/award.jpg" class="w-full md:max-w-4xl" alt="Reconocimiento de General Motors Sudamérica">
  </div>
</section>

<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'Equipo humano y compromiso.',
    '<span class="font-semibold">Nuestro equipo está formado por personas que conocen el sector desde adentro.</span> Venimos del mundo de los concesionarios, de la operación diaria, del contacto con talleres y repuesteros. Esa experiencia se traduce en un compromiso real: trabajar con seriedad, foco en el largo plazo y una visión clara de lo que significa representar a una marca como Chevrolet.',
    'max-w-4xl'
  );
  ?>
</section>

<?php dgm_nuestros_productos_section(); ?>


<?php get_footer(); ?>