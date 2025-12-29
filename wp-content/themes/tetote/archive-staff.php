<?php get_header(); ?>
<div id="container" class="container_archive_course w_inner">
	<main>
    <div class="staff">
      <div class="staff__inner inner">
        <?php if (have_posts()) : ?>
          <ul class="staff__cards">
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="staff__card-wrap">
                <?php
                  $image      = get_field('staff-img');
                  $message1 = get_field('message01');
                  $message2 = get_field('message02');
                  $role     = get_field('role');
                  $name     = get_field('name');
                ?>

                  <li class="staff__card">
                    <div class="staff__card-thum">
                    <?php if ( $image ) : ?>
                      <img src="<?php echo esc_url( $image['url'] ); ?>" 
                        alt="<?php echo esc_attr( $name ); ?>" 
                        class="staff__card__img" 
                        width="300" 
                        height="379" 
                        loading="lazy"
                      />
                    <?php endif; ?>
                      <div class="staff__card-title">
                        <?php if ( $message1 ) : ?><p class="staff__card-text"><?php echo esc_html($message1); ?></p><?php endif; ?>
                        <?php if ( $message2 ) : ?><p class="staff__card-text"><?php echo esc_html($message2); ?></p><?php endif; ?>
                      </div>
                    </div>
                    <div class="staff__card-body">
                      <?php if ( $role ) : ?><p class="staff__card-role"><?php echo esc_html($role); ?></p><?php endif; ?>
                      <?php if ( $name ) : ?><p class="staff__card-name"><?php echo esc_html($name); ?></p><?php endif; ?>
                    </div>
                  </li>
                </a>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>
  <?php get_footer(); ?>