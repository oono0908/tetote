<?php get_header(); ?>
	<main>
		<div class="message">
			<div class="message__inner inner">

        <?php if (have_posts()) : ?>
          <ul class="message__cards">
            <?php while (have_posts()) : the_post(); ?>
              <li class="message__card">
                <?php
                
                  $img      = get_field('message-img');

                  $img_html = '';
                  $alt_text = $name ?: get_the_title();

                  if (  !empty($img['url']) ) {
                      $img_html = '<img src="'.esc_url($img['url']).'" alt="'.esc_attr($alt_text).'" class="message__thumb" />';
                    } 
                ?>
                <figure class="message__img-wrap">
                   <?php echo $img_html; ?>
                </figure>
                <div class="message__body">
                  <span class="message__tag"><?php the_category(); ?></span>
                  <a href="<?php the_permalink(); ?>" class="message__txt"><?php the_title(); ?></a>
                  <time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="message__time"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </li>
            <?php endwhile; ?>
          </ul>

          <!-- ページネーション -->
          <div class="pagination">
            <?php
              the_posts_pagination([
                'mid_size'  => 2,
              ]);
            ?>
          </div>
        <?php endif; ?>

      </div>
		</div>
	</main>
<?php get_footer(); ?>
