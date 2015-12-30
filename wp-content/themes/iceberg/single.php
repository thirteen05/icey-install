<?php get_header(); ?>
<div class="container"> 
    <div class="row">
        <div class="col-md-9">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p class="blogdate"> <?php the_time('F jS') ?>, <?php the_time('Y') ?></p>
                <?php the_content();?>
                <p class="blogcategory">Categories: <?php the_category(' &bull; '); ?></p>
                <?php endwhile; else: ?>
                <p> <?php _e('Sorry, no posts matched your criteria.'); ?> </p>

            <?php endif; ?>
            <ul class="navigationarrows"> 
                <?php previous_post_link(' &laquo; %link'); ?> <?php if(!get_adjacent_post(false, '', true)) { echo ''; } // if there are no older articles ?>
                <?php next_post_link(' %link &raquo;'); ?> <?php if(!get_adjacent_post(false, '', false)) { echo ''; } // if there are no newer articles ?> 
            </ul> 
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>