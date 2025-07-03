<?php

/**
 * Template part for displaying the main menu.
 *
 * @package dgm-theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

function dgm_menu()
{
  // Sanitize current path
  $current_path = '';
  if (isset($_SERVER['REQUEST_URI'])) {
    $current_path = sanitize_text_field(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if ($current_path === false) {
      $current_path = '';
    }
  }

  // Get logo URL
  $logo_url = get_template_directory_uri() . '/assets/logo.svg';
  $logo_alt = get_bloginfo('name') . ' - Logo';
?>
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-8 md:px-16 py-4 flex justify-between items-center">
      <!-- Logo / Título -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold text-primary" aria-label="<?php echo esc_attr($logo_alt); ?>">
        <?php if (file_exists(get_template_directory() . '/assets/logo.svg')) : ?>
          <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($logo_alt); ?>" class="h-10 md:h-12">
        <?php else : ?>
          <?php echo esc_html(get_bloginfo('name')); ?>
        <?php endif; ?>
      </a>

      <!-- Menú Desktop -->
      <nav class="hidden md:flex space-x-6 items-center relative" role="navigation" aria-label="<?php esc_attr_e('Menú principal', 'dgm-theme'); ?>">
        <?php
        $menu_items = [
          [
            'label' => __('Producto', 'dgm-theme'),
            'submenu' => [
              ['href' => home_url('/repuestos-originales'), 'label' => __('Repuestos originales', 'dgm-theme')],
              ['href' => home_url('/accesorios'), 'label' => __('Accesorios', 'dgm-theme')],
              ['href' => home_url('/acdelco'), 'label' => __('ACDelco', 'dgm-theme')],
            ]
          ],
          ['href' => home_url('/donde-comprar'), 'label' => __('Dónde comprar', 'dgm-theme')],
          ['href' => home_url('/sobre-nosotros'), 'label' => __('Nosotros', 'dgm-theme')],
          ['href' => home_url('/blog'), 'label' => __('Blog', 'dgm-theme')],
          ['href' => home_url('/contacto'), 'label' => __('Contacto', 'dgm-theme'), 'class' => 'rounded-full bg-secondary hover:bg-secondaryDark text-white hover:text-white px-5 py-3'],
        ];

        foreach ($menu_items as $item) {
          if (isset($item['submenu'])) {
            echo '<div class="relative group">';
            echo '<button type="button" class="font-medium text-sm text-primary hover:text-secondary transition-all flex items-center gap-1 submenu-toggle" aria-expanded="false" aria-haspopup="true">' .
              esc_html($item['label']) .
              ' <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg></button>';
            echo '<div class="absolute left-0 top-full mt-2 w-60 bg-white shadow-lg py-2 z-50 hidden submenu-dropdown" role="menu">';
            foreach ($item['submenu'] as $subitem) {
              $is_active = rtrim($current_path, '/') === rtrim(parse_url($subitem['href'], PHP_URL_PATH), '/');
              $active_class = $is_active ? ' text-secondary' : ' text-primary';
              echo '<a href="' . esc_url($subitem['href']) . '" class="block px-8 py-2 font-medium text-sm' . esc_attr($active_class) . ' hover:text-secondary transition-all" role="menuitem">' . esc_html($subitem['label']) . '</a>';
            }
            echo '</div>';
            echo '</div>';
          } else {
            $extra_class = isset($item['class']) ? ' ' . $item['class'] : '';
            $is_active = isset($item['href']) && rtrim($current_path, '/') === rtrim(parse_url($item['href'], PHP_URL_PATH), '/');
            $active_class = $is_active ? ' text-secondary' : ' text-primary';
            echo '<a href="' . esc_url($item['href']) . '" class="font-medium text-sm' . esc_attr($active_class) . ' hover:text-secondary transition-all' . esc_attr($extra_class) . '">' . esc_html($item['label']) . '</a>';
          }
        }
        ?>
      </nav>

      <!-- Botón hamburguesa mejorado -->
      <button id="menu-toggle" class="md:hidden w-8 h-8 relative focus:outline-none z-50" aria-label="<?php esc_attr_e('Abrir menú', 'dgm-theme'); ?>" aria-expanded="false" aria-controls="mobile-menu">
        <span class="bar absolute left-0 top-1/2 w-8 h-0.5 bg-gray-800 transform transition duration-300 ease-in-out translate-y-[-8px]"></span>
        <span class="bar absolute left-0 top-1/2 w-8 h-0.5 bg-gray-800 transition duration-300 ease-in-out"></span>
        <span class="bar absolute left-0 top-1/2 w-8 h-0.5 bg-gray-800 transform transition duration-300 ease-in-out translate-y-[8px]"></span>
      </button>
    </div>

    <!-- Menú Móvil -->
    <div id="mobile-menu" class="hidden md:hidden overflow-hidden transition-all duration-500 ease-in-out max-h-0 px-8 md:px-16 pb-4 shadow" role="navigation" aria-label="<?php esc_attr_e('Menú móvil', 'dgm-theme'); ?>">
      <?php
      $menu_items_mobile = [
        ['href' => home_url('/'), 'label' => __('Inicio', 'dgm-theme')],
        ['href' => home_url('/repuestos-originales'), 'label' => __('Repuestos originales', 'dgm-theme')],
        ['href' => home_url('/accesorios'), 'label' => __('Accesorios', 'dgm-theme')],
        ['href' => home_url('/acdelco'), 'label' => __('ACDelco', 'dgm-theme')],
        ['href' => home_url('/donde-comprar'), 'label' => __('Dónde comprar', 'dgm-theme')],
        ['href' => home_url('/sobre-nosotros'), 'label' => __('Nosotros', 'dgm-theme')],
        ['href' => home_url('/blog'), 'label' => __('Blog', 'dgm-theme')],
        ['href' => home_url('/contacto'), 'label' => __('Contacto', 'dgm-theme')],
      ];

      foreach ($menu_items_mobile as $item) {
        $is_active = rtrim($current_path, '/') === rtrim(parse_url($item['href'], PHP_URL_PATH), '/');
        $active_class = $is_active ? ' text-secondary' : ' text-primary';
        echo '<a href="' . esc_url($item['href']) . '" class="block py-2 font-medium' . esc_attr($active_class) . ' hover:text-secondary">' . esc_html($item['label']) . '</a>';
      }
      ?>
    </div>
  </header>
<?php
}
