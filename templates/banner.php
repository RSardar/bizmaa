<?php
query_posts('posts_per_page=1'); ?>

<?php
 if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row m-0 align-items-center">
  <div class="col-lg-6 ">
    <div class="container">
    <div class="banner_post_info">
      <p class="banner_category"><?php _e( ' ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
  <h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  </h2>
  <!-- /post title -->

  <!-- post details -->
  	<p> <?php echo get_avatar(get_the_author_meta('user_email')); ?>
  <span class="author"><?php _e( '&#8213;', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span></p>
  <div class="index_post_time">
  <span class="date"><?php the_time('<p>F</p> <p class="date_specific">j</p>'); ?></span></div>
  <!-- /post details -->
<p class="banner-excerpt">
  <?php echo wp_trim_words(get_the_content(),30); // Build your custom callback length in functions.php ?></p>
  <a href="<?php the_permalink();?>" class="btn index-continue" role="button">Continue Reading</a>
</div></div>    </div>
<div class="col-lg-6 pr-3 pr-lg-0">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
    </div>
		<!-- post title -->

</div>
	</article>
	<!-- /article -->
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
