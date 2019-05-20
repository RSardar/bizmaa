<?php get_header(); ?>
<div class="main_latest_post category_page">
<div class="container">
	<main role="main">
		<!-- section -->
		<section>
			<div class="row">
<div class="col-lg-8">

		<?php if (have_posts()): the_post(); ?>

			<h1 class="brown-mix-color merri-font mb-4"><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta('description')) : ?>

		<?php echo get_avatar(get_the_author_meta('user_email')); ?>

			<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

			<?php echo wpautop( get_the_author_meta('description') ); ?>

		<?php endif; ?>
		<div class="row">


		<?php rewind_posts(); while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div class="col-lg-6 py-3">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<p class="banner_category my-2"><?php _e( ' ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->

				<!-- post details -->
				<span class="author"><?php _e( '', 'html5blank' ); ?>
					<span class="mr-2"> <?php echo get_avatar(get_the_author_meta('user_email')); ?></span>
					<?php the_author_posts_link(); ?></span>
				<!-- /post details -->

			</article>
			</div>
			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?></div>
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
