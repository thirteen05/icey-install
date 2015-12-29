<?php get_header(); ?>
<div class="container"> 
    <div class="row single-page">
        <div class="col-md-9">
            <h1><?php printf( __( 'Search Results: %s', 'climatech' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

    		<?php if ( have_posts() ) : ?>

    			<?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'content', 'search' ); ?>

    			<?php endwhile; ?>

    		<?php else : ?>

    			<?php get_template_part( 'no-results', 'search' ); ?>

    		<?php endif; ?>

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