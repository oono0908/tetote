<?php get_header(); ?>
<div class="inner">
	<main class="">
		<h1 class="page_head">ブログ</h1>
		<div class="news_list_wrap">
			<?php if (have_posts()) : ?>
				<ul>
					<?php while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) { ?>
										<?php the_post_thumbnail('blog'); ?>
									<?php } else { ?>
										<img src="<?php echo esc_url(get_theme_file_uri('/images/noimage.jpg')); ?>">
									<?php } ?>
								<div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
								<div class="ttl">
									<div class="cat">
									</div>
									<?php the_title(); ?>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</main>
</div>
<?php get_footer(); ?>