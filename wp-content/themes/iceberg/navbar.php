<nav class="navbar navbar-inverse navbar-fixed-top" id="thirteen05-navbar" role="navigation">
  <?php if(is_admin_bar_showing()): ?>
    <div id="bootstrap-navbar-patch"></div>
    <?php endif; ?>
      <div class="container relative">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#iceberg-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>"></a>
        </div>
        <div class="navbar-collapse collapse" id="iceberg-navbar">
          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
        'container_id'      => 'iceberg-navbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        </div>
      </div>
</nav>
