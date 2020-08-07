<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<!-- If we have some flexible content, let’s loop through it -->
		<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();

			// If it’s a header, go through the data
			if( get_row_layout() == 'header' ): ?>

				<!-- Here we seperate our header into its own component file -->
				<?php get_template_part( 'template-parts/content-header' ); ?>
				
			<!-- If it’s a text component, show us the data -->
			<?php elseif( get_row_layout() == 'text_block' ): ?>

				<!-- Here we seperate our text into its own component file -->
				<?php get_template_part( 'template-parts/content-text' ); ?>

			<?php elseif( get_row_layout() == 'gallery' ): ?>

				<!-- Here we put in our gallery component -->
				<?php get_template_part( 'template-parts/content-gallery' ); ?>
				
			<?php endif; 
		endwhile; endif; ?>
		
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<!-- Here we have our social link component -->
		<?php get_template_part( 'template-parts/content-share' ); ?>

		<!-- Here we include our explore component -->
		<?php get_template_part( 'template-parts/content-explore' ); ?>

		<?php //nomadsun_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
