<?php

/**
 * Listing de posts del blog
 * @param int $count Cantidad de posts a mostrar
 * @param bool $pagination Si debe mostrar paginación
 */
function dgm_listing_post($count = 2, $pagination = false)
{
  $paged = ($pagination && get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = [
    'posts_per_page' => $count,
    'post_status' => 'publish',
    'paged' => $paged,
  ];
  $recent_posts = new WP_Query($args);
  echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-12">';
  if ($recent_posts->have_posts()):
    while ($recent_posts->have_posts()): $recent_posts->the_post();
      $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>
      <a href="<?php the_permalink(); ?>" class="relative h-64 flex items-center justify-center overflow-hidden group">
        <?php if ($thumb_url): ?>
          <div class="absolute inset-0 bg-center bg-cover" style="background-image: url('<?php echo esc_url($thumb_url); ?>');"></div>
        <?php else: ?>
          <div class="absolute inset-0 bg-gray-200"></div>
        <?php endif; ?>
        <div class="absolute inset-0 bg-secondaryDark/50 transition-opacity group-hover:opacity-60"></div>
        <h3 class="relative z-10 text-white text-lg md:text-2xl font-bold text-center px-8 md:px-16">
          <?php the_title(); ?>
        </h3>
      </a>
<?php
    endwhile;
    if ($pagination) {
      global $wp_query;
      $temp_query = $wp_query;
      $wp_query = $recent_posts;
      $current_page = max(1, get_query_var('paged'));
      $total_pages = $recent_posts->max_num_pages;
      echo '<div class="col-span-2 mt-6 flex items-center justify-center gap-4">';
      if ($current_page > 1) {
        echo '<a href="' . get_pagenum_link($current_page - 1) . '" class="px-4 py-2 bg-secondary text-white rounded-full hover:bg-secondaryDark transition-all">' . __('Anterior', 'dgm') . '</a>';
      }
      echo '<span>Página ' . $current_page . ' de ' . $total_pages . '</span>';
      if ($current_page < $total_pages) {
        echo '<a href="' . get_pagenum_link($current_page + 1) . '" class="px-4 py-2 bg-secondary text-white rounded-full hover:bg-secondaryDark transition-all">' . __('Siguiente', 'dgm') . '</a>';
      }
      echo '</div>';
      $wp_query = $temp_query;
    }
    wp_reset_postdata();
  else:
    echo '<p>No hay artículos disponibles.</p>';
  endif;
  echo '</div>';
}
