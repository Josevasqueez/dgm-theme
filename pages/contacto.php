<?php

/**
 * Template Name: Contacto
 *
 */
get_header();
?>
<section class="max-w-7xl mx-auto px-8 md:px-16 my-20">
  <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-12">
    <div class="lg:col-span-2">
      <h2 class="max-w-2xl text-lg md:text-2xl font-bold mb-4">¿Querés hacer una consulta, solicitar más información
        o comunicarte con
        nuestro equipo?</h2>
      <p>Completá el formulario y te responderemos a la brevedad.</p>
    </div>
    <div class="lg:col-span-3">
      <div>
        <?php echo do_shortcode('[contact-form-7 id="60834b8" title="Formulario de contacto"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>