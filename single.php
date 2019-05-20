<?php get_header(); ?>
<div class="single_post">



	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );?>
			<!-- post thumbnail -->
			<div class="single_post_thumb">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
				<?php endif; ?>
				<div class=" overlay">

				</div>
			</div>


			<div class="single_post_intro text-center">

				<p class="banner_category"><?php _e( '', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
				<h1 class="post_title text-white">
					 <?php the_title(); ?>
				</h1>

				<div class="single_post_intro_info  text-white">
				<span><?php echo get_avatar(get_the_author_meta('user_email')); ?></span>
				<span class="author pr-3"> <?php _e( ' ', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="align-middle">&#8210;</span>
				<span class="time_to_read align-middle pr-3" id="time_to_read"></span>
				<span class="date align-middle pr-3">&#8210;<?php the_time(' F j, Y'); ?> </span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '&#8210;  Leave your thoughts', 'html5blank' ), __( '&#8210;  1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				</div>
			</div>
<div class="container">

			<!-- /post thumbnail -->


			<!-- post title -->

			<!-- /post title -->

			<!-- post details -->

			<div class="row">
				<div class="col-lg-8">

			<!-- /post details -->

					<div class="article_content" id="article_content">
						<?php the_content(); // Dynamic Content ?>
						<div class="post_tag">
							<?php the_tags( __( '<span class="tags">Tags :</span> ', 'html5blank' ), ' ', ''); // Separated by commas with a line break at the end ?>
						</div>
			<div class="single_post_comment">
				<?php comments_template(); ?>
			</div>
					</div>
				</div>
				<div class="col-lg-4">
					
					<?php get_sidebar(); ?>
				</div>
			</div>




		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
</div>
</div>

<?php get_footer(); ?>
