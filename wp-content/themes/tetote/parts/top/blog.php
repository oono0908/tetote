<section class="message">
  <div class="message__inner inner">
    <div class="section-title">
      <div class="section-title__main-wrap">
        <h2 class="section-title__main _message">採用ブログ</h2>
        <p class="section-title__back _message">BLOG</p>
      </div>
      <p class="section-title__sub">採用情報やイベント情報、社員の紹介など、</br>日々の現場の様子をご紹介します。</p>
    </div>
    <ul class="message__cards">
      <?php
        $args = [
          'post_type' => 'post',
          'posts_per_page' => 4
        ];
        $the_query = new WP_Query($args);
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php
            $message_img = get_field('message-img');
          ?>
          <li class="message__card">
            <figure class="message__img-wrap">
              <?php if ( $message_img ) : ?>
                <img src="<?php echo esc_url($message_img['url']); ?>" 
                     width="158" 
                     height="182" 
                     alt="<?php echo esc_attr( get_the_title() ); ?>" 
                     class="message__thumb"
                     loading="lazy">
              <?php else : ?>
                <img src="<?php echo esc_url( get_theme_file_uri('./assets/images/noimage.jpg') ); ?>" 
                     alt="画像がありません"
                     width="158" 
                     height="182" 
                     class="message__thumb"
                     loading="lazy">
              <?php endif; ?>
            </figure>
            <div class="message__body">
              <span class="message__tag">
                <?php
                  $category = get_the_category();
                  if ( !empty( $category ) ) {
                    echo esc_html( $category[0]->name );
                  }
                ?>
              </span>
              <a href="<?php the_permalink(); ?>" class="message__txt"><?php the_title(); ?></a>
              <time datetime="<?php echo esc_attr( get_the_date('Y-m-d') ); ?>" class="message__time">
                <?php echo esc_html( get_the_date('Y.m.d') ); ?>
              </time>
            </div>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <li>投稿がありません。</li>
      <?php endif; ?>
    </ul>

    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="message__btns">
      <button class="btn-next btn-round--arrow btn-round--large _left" aria-label="採用ブログをもっと見る"></button>
      <span class="message__btn-txt">VIEW MORE</span>
    </a>
  </div>
</section>