<?php

/**
 * Template part for displaying a gallery of images.
 *
 * @package dgm-theme
 * @since 1.0.0
 */


function dgm_gallery($galeria)
{
  if (empty($galeria) || !is_array($galeria)) {
    return;
  }
  $total = count($galeria);
  $is_mobile = wp_is_mobile();
  if ($is_mobile) {
    $cols = 3;
    if ($total <= 2) {
      $imagenes_a_mostrar = $total;
      $restantes = 0;
    } else {
      $imagenes_a_mostrar = 2;
      $restantes = $total - 2;
    }
  } else {
    if ($total <= 3) {
      $cols = $total;
      $imagenes_a_mostrar = $total;
      $restantes = 0;
    } elseif ($total == 4 || $total == 5) {
      $cols = 3;
      $imagenes_a_mostrar = 2;
      $restantes = $total - 2;
    } elseif ($total == 6) {
      $cols = 3;
      $imagenes_a_mostrar = 6;
      $restantes = 0;
    } else { // más de 6
      $cols = 3;
      $imagenes_a_mostrar = 5;
      $restantes = $total - 5;
    }
  }
?>
  <div class="bg-black">
    <div class="grid grid-cols-1 md:grid-cols-<?php echo $cols; ?>">
      <?php for ($i = 0; $i < $imagenes_a_mostrar; $i++): ?>
        <a data-fancybox="galeria" href="<?php echo esc_url($galeria[$i]['url']); ?>" data-caption="<?php echo esc_attr($galeria[$i]['alt']); ?>" class="overflow-hidden cursor-pointer block fancybox-galeria">
          <img src="<?php echo esc_url($galeria[$i]['url']); ?>" alt="<?php echo esc_attr($galeria[$i]['alt']); ?>" class="w-full h-64 md:h-80 object-cover transition duration-700 hover:scale-125" />
        </a>
      <?php endfor; ?>
      <?php if ($restantes > 0): ?>
        <?php $img_restante = $galeria[$imagenes_a_mostrar]; ?>
        <a data-fancybox="galeria" href="<?php echo esc_url($img_restante['url']); ?>" data-caption="<?php echo esc_attr($img_restante['alt']); ?>" class="relative flex items-center justify-center rounded overflow-hidden group h-64 md:h-80 cursor-pointer block fancybox-galeria" style="aspect-ratio: auto; min-height: 16rem;">
          <img src="<?php echo esc_url($img_restante['url']); ?>" alt="" class="absolute inset-0 w-full h-full object-cover blur-sm scale-125" style="filter: blur(4px);" />
          <div class="absolute inset-0 bg-black bg-opacity-75 hover:bg-opacity-50 transition duration-700"></div>
          <div class="relative z-10 text-white text-center">
            <h4 class="font-medium text-secondary text-lg">Galería de imágenes</h4>
            <span class="text-white text-sm">+<?php echo $restantes; ?> restantes</span>
          </div>
        </a>
      <?php endif; ?>
      <?php for ($i = $imagenes_a_mostrar + 1; $i < $total; $i++): ?>
        <a data-fancybox="galeria" href="<?php echo esc_url($galeria[$i]['url']); ?>" data-caption="<?php echo esc_attr($galeria[$i]['alt']); ?>" class="hidden fancybox-galeria"></a>
      <?php endfor; ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (window.Fancybox && typeof Fancybox.bind === 'function') {
        Fancybox.bind('[data-fancybox="galeria"]', {
          Thumbs: false,
          Images: {
            initialSize: 'fit',
          },
          Toolbar: ["close"] // El Toolbar debe ser un array simple, no un objeto
        });
      }
    });
  </script>
<?php
}
