<?php get_header(); ?>

<main class="max-w-4xl mx-auto px-8 md:px-16 my-20">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <?php if (has_post_thumbnail()) : ?>
          <div class="mb-8">
            <?php the_post_thumbnail('large', [
              'class' => 'w-full h-36 md:h-80 object-cover object-center',
            ]); ?>
          </div>
        <?php endif; ?>
        <!-- <h1 class="text-3xl font-bold text-gray-800 mb-4"><?php the_title(); ?></h1> -->
        <div class="contenido-articulo text-gray-600 mb-8">
          <?php the_content(); ?>
        </div>
        <div class="flex justify-center mt-12">
          <a href="<?php echo esc_url(home_url('/blog')); ?>">
            <?php dgm_button('chevrolet.svg', 'Volver al blog'); ?>
          </a>
        </div>
      </article>
  <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>