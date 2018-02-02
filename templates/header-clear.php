<header class="nav-banner banner">
    <div class="container-fluid clearfix">
    <div class="row justify-content-center">
      <div class="col-md-10">
      <a class="brand float-left" href="<?= esc_url(home_url('/')); ?>">
        <?php
          dynamic_sidebar('header-logo');
        ?>
      </a>
      <div class="row justify-content-right">
      <div class="col-md-12">
        <nav class="navbar navbar-toggleable-md nav-primary navbar-light float-right navbar-fixed" role="navigation">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarNav',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
                ]);
            endif;
            ?>
          </nav>
        </div>
        </div>
        </div>
      </div>
    </div>
</header>
