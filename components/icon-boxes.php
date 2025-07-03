<?php

/**
 * Template part for displaying icon boxes.
 *
 * @package dgm-theme
 * @since 1.0.0
 */

function icon_boxes($icon_boxes)
{
  $count = is_array($icon_boxes) ? count($icon_boxes) : 0;
  $cols = min(max($count, 1), 4); // mínimo 1, máximo 4 columnas
?>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-<?php echo $cols; ?> gap-12 content-center justify-items-center
">
    <?php
    // Loop through each icon box and display it
    if (empty($icon_boxes) || !is_array($icon_boxes)) {
      return; // Exit if no boxes are provided
    }
    foreach ($icon_boxes as $box) : ?>
      <div class="flex flex-col items-center gsap-fade-in-up">
        <img class="w-32 md:w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo $box['icon']; ?>.svg" alt="<?php echo esc_attr($box['title']); ?>">
        <h3 class="font-medium mt-4 mb-2"><?php echo esc_html($box['title']); ?></h3>
        <?php if (!empty($box['desc'])) : ?>
          <p class="text-sm mx-10 md:mx-0"><?php echo esc_html($box['desc']); ?></p>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php
}
