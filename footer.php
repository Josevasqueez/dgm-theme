<footer class="bg-[#23242A] text-gray-200 py-20">
  <div class="max-w-7xl mx-auto px-8 md:px-16">
    <!-- Logos -->
    <div class="flex flex-row gap-4 items-center mb-20">
      <?php
      $logo_url = get_template_directory_uri() . '/assets/logo.svg';
      $gm_logo_url = get_template_directory_uri() . '/assets/gm-new.svg';
      $acdelco_logo_url = get_template_directory_uri() . '/assets/acdelco.svg';
      ?>
      <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name') . ' - Logo'); ?>" class="h-10 md:h-12 w-auto filter invert brightness-0 saturate-0">
      <img src="<?php echo esc_url($gm_logo_url); ?>" alt="<?php esc_attr_e('Logo GM Genuine Parts', 'dgm-theme'); ?>" class="h-10 md:h-12 w-auto">
      <img src="<?php echo esc_url($acdelco_logo_url); ?>" alt="<?php esc_attr_e('Logo ACDelco', 'dgm-theme'); ?>" class="h-10 md:h-12 w-auto">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full gap-8">
      <!-- Contacto -->
      <div class="space-y-6 text-xs">
        <div class="flex items-start gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/map.svg'); ?>" alt="<?php esc_attr_e('Ubicación', 'dgm-theme'); ?>">
          <span class="text-white"><?php esc_html_e('Parque Logístico San Juan Ruta 101 - Cap. Juan A. Artigas Km 24.500 - 15500 Colonia Nicolich, Departamento de Canelones', 'dgm-theme'); ?></span>
        </div>
        <div class="flex items-start gap-4">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/mail.svg'); ?>" alt="<?php esc_attr_e('Email', 'dgm-theme'); ?>">
          <div class="pt-1">
            <a href="mailto:info@dgm.uy">
              <span class="text-white">info@dgm.uy</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Menú -->
      <div class="flex flex-col gap-2 mt-6 md:mt-0">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Inicio', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/sobre-nosotros')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Nosotros', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/donde-comprar')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Dónde comprar', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Blog', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
      </div>

      <div class="flex flex-col gap-2 -mt-6 md:mt-0">
        <a href="<?php echo esc_url(home_url('/repuestos-originales')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Repuestos originales', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/accesorios')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Accesorios', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/acdelco')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('ACDelco', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="hover:text-secondary transition-all flex items-center justify-between gap-2">
          <?php esc_html_e('Contacto', 'dgm-theme'); ?>
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-right.svg'); ?>" alt="<?php esc_attr_e('Ir', 'dgm-theme'); ?>" class="w-4 h-4">
        </a>
      </div>

      <!-- Redes sociales -->
      <div class="space-y-2">
        <span><?php esc_html_e('Seguinos en redes', 'dgm-theme'); ?></span>
        <div class="flex items-center gap-4">
          <a href="https://www.facebook.com/profile.php?id=61577079520818" target="__blank" class="hover:text-secondary transition-all" aria-label="<?php esc_attr_e('Facebook', 'dgm-theme'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/facebook.svg'); ?>" alt="<?php esc_attr_e('Facebook', 'dgm-theme'); ?>">
          </a>
          <a href="https://www.instagram.com/repuestoschevrolet.uy/" target="__blank" class="hover:text-secondary transition-all" aria-label="<?php esc_attr_e('Instagram', 'dgm-theme'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/instagram.svg'); ?>" alt="<?php esc_attr_e('Instagram', 'dgm-theme'); ?>">
          </a>
          <a href="https://www.linkedin.com/company/dgm-uruguay/" target="__blank" class="fill-white hover:text-secondary transition-all" aria-label="<?php esc_attr_e('LinkedIn', 'dgm-theme'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/linkedin.svg'); ?>" alt="<?php esc_attr_e('LinkedIn', 'dgm-theme'); ?>" class="w-6 h-6">
          </a>
        </div>
      </div>
    </div>

    <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-400 text-xs">
      &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>. <?php esc_html_e('Todos los derechos reservados.', 'dgm-theme'); ?>
    </div>
  </div>
</footer>

<!-- Botón flotante "Dónde comprar" -->
<a href="<?php echo esc_url(home_url('/donde-comprar')); ?>" class="btn-rotado" aria-label="<?php esc_attr_e('Dónde comprar', 'dgm-theme'); ?>">
  <span class="uppercase">
    <?php esc_html_e('Dónde comprar', 'dgm-theme'); ?>
  </span>
</a>

<?php wp_footer(); ?>
</body>

</html>