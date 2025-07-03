<?php
// Componente para el bloque destacado de Sobre Nosotros, ahora customizado y permitiendo HTML solo en el párrafo
function dgm_feature_basico($titulo, $parrafo, $ancho = 'max-w-3xl')
{
?>
  <div class="flex flex-col items-center mb-16">
    <h2 class="max-w-2xl text-lg font-bold mb-4"><?php echo esc_html($titulo); ?></h2>
    <p class="<?php echo esc_attr($ancho); ?>"><?php echo wp_kses_post($parrafo); ?></p>
  </div>
<?php
}
