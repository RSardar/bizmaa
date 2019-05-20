<?php get_header(); ?>
<div class="main_latest_post category_page">
<div class="container">
	<main role="main">
		<!-- section -->
		<section>
			<div class="row">
				<div class="col-lg-8">
					<h1 class="brown-mix-color merri-font "><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
					<?php get_template_part('loop'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
			</div>




		</section>
		<!-- /section -->
	</main>
</div>
</div>

<?php get_footer(); ?>
