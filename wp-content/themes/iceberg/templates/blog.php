<?php 
/*
	Template Name: Blog Page
*/
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
			<?php // Display blog posts on any page @ http://m0n.co/l
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<article>
				<a href="<?php the_permalink(); ?>" title="Read more">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail(); ?>
					<?php the_excerpt(); ?>
					<div class="btn">Read More</div>
				</a>
			</article>
			<?php endwhile; ?>

			

			<?php wp_reset_postdata(); ?>
			<?php if (function_exists("pagination")) : ?>
    			<div class="blog-pagination">
    				<?php pagination($additional_loop->max_num_pages); ?>
    			</div>
			<?php endif; ?>
        </div>
        <div class="col-md-3">
              <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>