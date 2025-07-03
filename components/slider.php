<?php

/**
 * Template part for displaying the main slider.
 *
 * @package dgm-theme
 * @since 1.0.0
 */

function dgm_slider()
{
  $slider_query = new WP_Query([
    'post_type' => 'slider',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  ]);
  if ($slider_query->have_posts()) : ?>
    <div class="relative w-full bg-black">
      <div class="swiper" id="main-slider">
        <!-- <style>
          /* Transición suave y desacelerada para los slides */
          #main-slider .swiper-wrapper {
            transition-timing-function: cubic-bezier(0.25, 1, 0.5, 1) !important;
          }
        </style> -->
        <div class="swiper-wrapper">
          <?php while ($slider_query->have_posts()) : $slider_query->the_post();
            // $button_text = get_post_meta(get_the_ID(), 'button_text', true);
            // $button_href = get_post_meta(get_the_ID(), 'button_href', true);
            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
          ?>
            <div class="swiper-slide">
              <div class="relative w-full h-[70vh] md:h-[90vh] overflow-hidden" style="background: url('<?php echo esc_url($img_url); ?>') center center / cover no-repeat;">
                <!-- <div class="absolute inset-0 bg-black/20"></div> -->
                <div class="relative max-w-7xl mx-auto px-8 md:px-16 justify-end flex items-center h-full">
                  <div class="text-white md:text-right w-full md:max-w-xl flex flex-col md:items-end ">
                    <h2 class="text-3xl sm:text-4xl xl:text-5xl mb-12 md:mb-10"><?php the_content(); ?></h2>
                    <a href="<?php echo esc_url(home_url('/donde-comprar')); ?>">
                      <?php dgm_button(); ?>
                    </a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/gm.svg" alt="GM Genuine Parts" class="w-32">
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
      </div>
    </div>
    <!-- <script>
      document.addEventListener('DOMContentLoaded', function() {
        new Swiper('#main-slider', {
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
          slidesPerView: 1,
          spaceBetween: 0,
          speed: 500, // Transición más lenta
        });
      });
    </script> -->
    <?php wp_reset_postdata(); ?>
<?php endif;
}
