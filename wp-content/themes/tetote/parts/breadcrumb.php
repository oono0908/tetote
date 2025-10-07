<?php if (function_exists('bcn_display')) { ?>
		<div class="bread-lists md-show" vocab="http://schema.org/" typeof="BreadcrumbList">
      <div class="bread-lists__inner inner">
			  <?php bcn_display(); ?>
      </div>
		</div>
	<?php } ?>