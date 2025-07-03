<?php get_header(); ?>

<main class="max-w-5xl mx-auto px-8 md:px-16 py-8">
  <?php if (is_home() && !is_front_page()) : ?>
    <h1 class="text-3xl font-bold text-gray-800 mb-4"><?php esc_html_e('Blog', 'dgm-theme'); ?></h1>
  <?php endif; ?>

  <?php if (have_posts()) : ?>
    <div class="posts-grid">
      <?php while (have_posts()) : the_post(); ?>
        <article class="mb-8 post-item">
          <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
              <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover rounded-lg']); ?>
              </a>
            </div>
          <?php endif; ?>

          <h2 class="text-xl font-semibold text-primary mb-2">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="hover:text-secondary transition-colors">
              <?php echo esc_html(get_the_title()); ?>
            </a>
          </h2>

          <div class="text-gray-600 mb-4">
            <?php
            $excerpt = get_the_excerpt();
            if (!empty($excerpt)) {
              echo wp_kses_post($excerpt);
            } else {
              echo wp_kses_post(wp_trim_words(get_the_content(), 20, '...'));
            }
            ?>
          </div>

          <div class="text-sm text-gray-500">
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
              <?php echo esc_html(get_the_date()); ?>
            </time>
            <?php if (has_category()) : ?>
              <span class="mx-2">•</span>
              <span><?php the_category(', '); ?></span>
            <?php endif; ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>

    <!-- Paginación -->
    <div class="pagination-wrapper mt-8">
      <?php
      the_posts_pagination([
        'mid_size' => 2,
        'prev_text' => __('&laquo; Anterior', 'dgm-theme'),
        'next_text' => __('Siguiente &raquo;', 'dgm-theme'),
        'class' => 'flex justify-center space-x-2',
      ]);
      ?>
    </div>

  <?php else : ?>
    <div class="text-center py-12">
      <h2 class="text-2xl font-semibold text-gray-700 mb-4">
        <?php esc_html_e('No se encontraron entradas', 'dgm-theme'); ?>
      </h2>
      <p class="text-gray-500 mb-6">
        <?php esc_html_e('Parece que no hay contenido disponible en este momento.', 'dgm-theme'); ?>
      </p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-secondary text-white px-6 py-3 rounded-full hover:bg-secondaryDark transition-colors">
        <?php esc_html_e('Volver al inicio', 'dgm-theme'); ?>
      </a>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>