<?php

/**
 * Template part for displaying a button with an icon and text.
 *
 * @package dgm-theme
 * @since 1.0.0
 */

function dgm_button($icono = 'chevrolet.svg', $texto = 'Dónde comprar', $invert = false)
{
  $btn_classes = $invert
    ? 'transition rounded-full bg-white text-secondary border-2 border-secondary hover:bg-white/90 hover:text-secondaryDark px-5 py-3 uppercase'
    : 'hover:outline hover:outline-2 hover:outline-offset-2 outline-secondaryDark transition rounded-full bg-secondary hover:bg-secondaryDark text-white hover:text-white px-5 py-3 uppercase';

  $icono_final = $invert ? 'chevrolet-alt.svg' : $icono;
?>
  <button class="hover:scale-95 duration-300	<?php echo $btn_classes; ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo esc_attr($icono_final); ?>" alt="<?php echo esc_attr($texto); ?>" class="inline-block mr-2">
    <span class="text-xs inline-block">
      <?php echo esc_html($texto); ?>
    </span>
  </button>
<?php
}
