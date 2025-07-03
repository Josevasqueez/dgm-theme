<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  // Get current page description
  $description = '';
  if (is_singular() && has_excerpt()) {
    $description = get_the_excerpt();
  } elseif (is_home() || is_front_page()) {
    $description = get_bloginfo('description');
  } elseif (is_category() || is_tag() || is_tax()) {
    $description = strip_tags(category_description());
  } else {
    $description = get_bloginfo('description');
  }
  ?>
  <meta name="description" content="<?php echo esc_attr($description); ?>">

  <!-- Favicon -->
  <?php
  $favicon_path = get_template_directory_uri() . '/assets/favicon.svg';
  if (file_exists(get_template_directory() . '/assets/favicon.svg')) : ?>
    <link rel="icon" href="<?php echo esc_url($favicon_path); ?>" type="image/svg+xml">
    <link rel="shortcut icon" href="<?php echo esc_url($favicon_path); ?>" type="image/svg+xml">
  <?php endif; ?>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NXNSK8WF');
  </script>
  <!-- End Google Tag Manager -->

  <?php wp_head(); ?>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#000000',
            secondary: '#CEA459',
            secondaryDark: '#B18434',
          }
        }
      }
    }
  </script>

  <!-- Lenis for smooth scrolling -->
  <script src="https://unpkg.com/lenis@1.3.4/dist/lenis.min.js"></script>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXNSK8WF"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>

  <?php
  $is_proximamente = is_page_template('pages/proximamente.php');
  $is_homeTemplate = is_page_template('pages/inicio.php');
  ?>

  <?php if (!$is_proximamente): ?>
    <?php dgm_menu(); ?>
  <?php endif; ?>

  <?php if (!$is_proximamente && !$is_homeTemplate && !is_front_page() && !is_home()) : ?>
    <?php
    $title_bg_path = get_template_directory_uri() . '/assets/images/title-bg.jpg';
    $title_classes = is_single() ? 'text-lg md:text-3xl font-medium' : 'text-3xl md:text-6xl font-light';
    ?>
    <section class="h-32 md:h-[230px] flex items-center" style="background: url('<?php echo esc_url($title_bg_path); ?>') no-repeat center center; background-size: 100% 100%;">
      <div class="max-w-7xl mx-auto px-8 md:px-16 text-secondary">
        <h1 class="<?php echo esc_attr($title_classes); ?> text-center"><?php echo esc_html(get_the_title()); ?></h1>
      </div>
    </section>
  <?php endif; ?>