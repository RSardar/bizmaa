
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->

<div class="row m-0">


<div class="col-lg-12 col-md-12">


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
<p class="banner_category my-2"><?php _e( ' ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

    <p class="py-3"> <?php echo get_avatar(get_the_author_meta('user_email')); ?>
  <span class="author pr-2 pl-2"><?php _e( '', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments">&#8210;<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( ' Leave your thoughts', 'html5blank' ), __( ' 1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></p>
		<!-- /post details -->



	</article>
	<!-- /article --></div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->
</div>
<?php endif; ?>
