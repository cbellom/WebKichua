<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ABARIS
 */

get_header(); ?>
<div class="row">

	<?php if( isset( $abaris['layout'] ) && $abaris['layout'] == 2 ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

	<div id="primary" class="content-area two-thirds column span9">
		<main id="main" class="site-main" role="main">
			
			<?php if ( $abaris['breadcrumb'] && function_exists( 'abaris_breadcrumbs' ) ) : ?>			
				<div id="breadcrumb" role="navigation">
					<?php abaris_breadcrumbs(); ?>
				</div>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if( isset( $abaris['layout'] ) && $abaris['layout'] == 3 ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>

	<?php if( ! isset( $abaris['layout'] ) ) : ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>
	
<?php get_footer(); ?>