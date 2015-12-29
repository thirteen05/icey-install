<div id="sidebar">
	<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<input placeholder="Search Posts..." type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
		</div>
	</form>

	<h3>Recent Posts</h3>
    <ul>
    	<?php get_archives('postbypost', '5', 'custom', '<li>', '</li>'); ?>
    </ul>
    <h3>Categories</h3>
    <ul>
    	<?php wp_list_cats('sort_column=name'); ?>
    </ul>
</div><!-- #secondary -->
