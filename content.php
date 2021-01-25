<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cool_Mat
 */
global $item_number
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<h1 class="entry-title">
			<div class="entry-number">
				<span>
					<?php echo $item_number; ?>
				</span>

				</div>
		<?php
		the_title();
		?>
		</h1>
		<div class=" entry-price">

		<?php the_content(); ?>
		</div>

	

	</header><!-- .entry-header -->

	<?php cool_mat_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
