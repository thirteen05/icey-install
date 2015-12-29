<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<?php if ( is_search() ) : ?>
	<article>
		<a href="<?php the_permalink(); ?>" title="Read more">
			<?php $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title); ?>
			<h3><?php echo $title; ?></h3>
			<?php the_post_thumbnail(); ?>
			<?php $excerpt = get_the_excerpt(); $keys= explode(" ",$s); $excerpt = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $excerpt); ?>
			<?php echo $excerpt; ?>
			<div class="btn">Read More</div>
		</a>
	</article>
<?php endif; ?>