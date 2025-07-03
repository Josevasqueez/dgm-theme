<?php
// Componente Call to Action reutilizable
function dgm_call_to_action($titulo, $url)
{
?>
  <div class="bg-secondary">
    <section class="max-w-5xl mx-auto px-8 md:px-16 py-20 text-center text-white">
      <h3 class="text-xl px-4 md:text-3xl font-bold max-w-3xl mx-auto"><?php echo esc_html($titulo); ?></h3>
      <div class="mt-8 flex justify-center">
        <a href="<?php echo esc_url($url); ?>">
          <?php dgm_button('chevrolet.svg', 'Dónde comprar', true); ?>
        </a>
      </div>
    </section>
  </div>
<?php
}
