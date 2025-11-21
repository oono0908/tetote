<?php get_header(); ?>
	<main>
		<div class="message">
			<div class="message__inner inner">

        <?php if (have_posts()) : ?>
          <ul class="message__cards">
            <?php while (have_posts()) : the_post(); ?>
              <li class="message__card">
                <?php
                  $image = get_field('message-img');
                ?>
                <figure class="message__img-wrap">
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo get_the_title(); ?>" class="message__thumb" width="158" height="182" loading="lazy" />
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

