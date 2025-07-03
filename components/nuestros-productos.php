<?php

/**
 * Template part for displaying the nuestros productos section.
 *
 * @package dgm-theme
 * @since 1.0.0
 */

function dgm_nuestros_productos_section($showTitle = true)
{
  $icono = 'chevrolet.svg';
  $alt = 'Dónde comprar';
  $productos = [
    [
      'img' => 'repuestos.webp',
      'titulo' => 'Repuestos originales',
      'descripcion' => 'Piezas oficiales de General Motors para garantizar el máximo rendimiento y seguridad',
      'link' => esc_url(home_url('/repuestos-originales')),
    ],
    [
      'img' => 'acdelco.webp',
      'titulo' => 'ACDelco',
      'descripcion' => 'Línea global de mantenimiento de General Motors. Alta calidad comprobada.',
      'link' => esc_url(home_url('/acdelco')),
    ],
    [
      'img' => 'accesorios.webp',
      'titulo' => 'Accesorios',
      'descripcion' => 'Diseño, calidad y ajuste perfecto, sin comprometer garantía ni performance.',
      'link' => esc_url(home_url('/accesorios')),
    ],
  ];
?>
  <div class="bg-gray-200">
    <section class="max-w-5xl mx-auto px-8 md:px-16 py-20 text-center">
      <div class="flex flex-col items-center">
        <?php if ($showTitle) : ?>
          <h2 class="max-w-2xl text-3xl md:text-4xl font-light mb-10 md:mb-12">Conocé nuestros productos.</h2>
        <?php endif; ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 *:max-w-[350px]">
          <?php foreach ($productos as $producto) : ?>
            <div>
              <a href="<?php echo $producto['link']; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($producto['img']); ?>" alt="<?php echo esc_attr($producto['titulo']); ?>" class="w-full h-[175px] md:h-[200px] object-cover object-center">
              </a>
              <div class="bg-white px-4 py-12 h-[280px] md:h-[320px] flex flex-col items-center justify-between">
                <div>
                  <a href="<?php echo $producto['link']; ?>">
                    <h3 class="font-bold mb-2"><?php echo esc_html($producto['titulo']); ?></h3>
                  </a>
                  <p class="mb-4"><?php echo esc_html($producto['descripcion']); ?></p>
                </div>
                <a href="<?php echo $producto['link']; ?>">
                  <?php dgm_button($icono, 'Dónde comprar'); ?>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>
<?php
}
