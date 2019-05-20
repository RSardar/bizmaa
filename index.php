<?php get_header(); ?>

<main role="main">
<!-- section -->
	<section>
		<div class="hero-banner-post">
			<?php get_template_part('templates/banner'); ?>
		</div>


		<div class="second_div">
			<div class="container">
					<h3 class="index_sections">Top Updates</h3>
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="second_div_left">
							<?php query_posts('posts_per_page=1&offset=1'); ?>
							<?php get_template_part('templates/custom-loop'); ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<?php query_posts('posts_per_page=2&offset=2'); ?>
						<?php get_template_part('templates/custom-loop-side'); ?>
					</div>
				</div>
			</div>
		</div>
			<div class="main_latest_post">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<h3 class="index_sections">Latest Posts</h3>

							<div class="">
								<?php query_posts('offset=4'); ?>
								<?php get_template_part('loop'); ?>
								<?php get_template_part('pagination'); ?>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="index_sidebar mt-5">
									<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
			</div>
		</div>

	</section>
<!-- /section -->
</main>

<?php get_footer(); ?>
