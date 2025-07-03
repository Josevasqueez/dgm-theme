<?php

/**
 * Template Name: Repuestos originales
 *
 */
get_header();
?>
<section class="max-w-5xl mx-auto px-8 md:px-16 my-20 text-center">
  <?php
  dgm_feature_basico(
    'Repuestos Originales: más valor, más confianza, más vida útil.',
    'Las piezas originales Chevrolet están diseñadas por General Motors para funcionar con precisión en cada modelo. Su uso  garantiza seguridad, rendimiento constante y una vida útil prolongada.',
    'max-w-2xl md:max-w-3xl'
  );
  ?>
  <a href="<?php echo esc_url(home_url('/donde-comprar')); ?>">
    <div class="mt-8 flex justify-center">
      <?php dgm_button('chevrolet.svg', 'Dónde comprar'); ?>
    </div>
  </a>
</section>

<section class="relative" style="background-color: #000;">
  <div class="absolute inset-0 backdrop-blur-sm bg-black/40"></div>
  <div class="relative z-10 flex justify-center items-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comparativa.webp" class="hidden sm:block w-full md:max-w-4xl" alt="Comparativa de repuestos originales Chevrolet">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/comparativa-movil.webp" class="sm:hidden w-full" alt="Comparativa de repuestos originales Chevrolet">
  </div>
</section>

<div class="bg-gray-100">
  <section class="max-w-5xl mx-auto px-8 md:px-16 py-20 text-center">
    <h2 class="max-w-3xl mx-auto text-lg md:text-2xl mb-12 text-[#898888] font-semibold">
      Solo los repuestos originales aseguran el rendimiento del vehículo para el que fueron diseñados.
    </h2>
    <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 text-center md:text-left justify-center">
      <div>
        <h3 class="text-secondary text-lg md:text-xl font-bold mb-4">Repuesto Original</h3>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Diseñado por GM</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Ajuste exacto</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Mayor vida útil</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Garantía y respaldo oficial</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Conserva la garantía del vehículo</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-secondary text-xl">✔</span> Rendimiento comprobado</li>
        </ul>
      </div>
      <div>
        <h3 class="text-black text-lg md:text-xl font-bold mb-4">Repuesto Alternativo</h3>
        <ul class="space-y-2">
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Genérico o sin diseño específico</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Posibles incompatibilidades</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Menor durabilidad</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Sin garantía del fabricante</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Puede anular la garantía</li>
          <li class="flex items-center gap-2 justify-center md:justify-start"><span class="text-black text-xl">✖</span> Riesgo de fallas o bajo desempeño</li>
        </ul>
      </div>
    </div>
  </section>
</div>

<section class="max-w-5xl mx-auto px-8 md:px-16 py-20 text-center">
  <h2 class="max-w-3xl mx-auto text-3xl mb-12 text-secondary font-semibold">
    Beneficios clave:
  </h2>
  <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 mb-12">
    <?php
    $benefits = [
      [
        'title' => 'Seguridad y rendimiento',
        'desc' => 'Funcionan como fueron pensadas:<br>sin riesgos, sin sorpresas.'
      ],
      [
        'title' => 'Larga vida útil',
        'desc' => 'Menos reemplazos, mayor<br>confiabilidad en el tiempo.'
      ],
      [
        'title' => 'Garantía oficial',
        'desc' => 'El respaldo de GM, con piezas<br>certificadas y soporte técnico.'
      ],
      [
        'title' => 'Valor del vehículo',
        'desc' => 'Mantiene la integridad<br>mecánica y el valor de reventa.'
      ],
    ];
    foreach ($benefits as $benefit) : ?>
      <div class="border-2 border-secondary rounded-lg p-8 flex flex-col items-center justify-center">
        <h3 class="font-semibold text-lg mb-2"><?php echo esc_html($benefit['title']); ?></h3>
        <p><?php echo $benefit['desc']; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
  <a href="<?php echo esc_url(home_url('/donde-comprar')); ?>">
    <?php dgm_button('chevrolet.svg', 'Dónde comprar'); ?>
  </a>
</section>

<?php
dgm_call_to_action(
  'Tu auto es Chevrolet, elegí originales',
  home_url('/donde-comprar'), // Cambia la URL aquí si es necesario
);
?>

<?php get_footer(); ?>