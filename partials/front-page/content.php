<?php
/**
 * Template part for displaying content of normal posts.
 *
 * @version 1.0.0
 *
 * @package Photographia
 */

/**
 * Add post template class if post has a template
 */
if ( '' !== $post_type_template ) {
	$post_template_class = "-$post_type_template-template";
}
?>
<article class="clearfix frontpage-section">
	<?php the_title( '<h2 class="frontpage-section-title">', '</h2>' ) ?>
	<div class="entry-content <?php echo photographia_get_post_type_template_class(); ?>">
		<?php echo photographia_get_the_post_thumbnail(); ?>
		<div>
			<?php
			/**
			 * Displays the post content.
			 */
			photographia_the_content();

			/**
			 * Display pagination if the post is paginated.
			 */
			photographia_wp_link_pages(); ?>
		</div>
	</div>
	<?php
	/**
	 * Closing div tag if we have a post with the template
	 * large portrait featured image.
	 *
	 * Tag was opened in photographia_the_entry_header()
	 */
	$post_type_template = photographia_get_post_type_template();
	if ( 'large-portrait-featured-image' === $post_type_template ) { ?>
		</div>
	<?php } ?>
</article>