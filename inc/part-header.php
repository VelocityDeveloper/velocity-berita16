<div class="bg-color-theme text-white">
<div class="row align-items-center m-0 py-3">
    <div class="col-md-8 mb-md-0 mb-2 text-md-start text-center">
        <?php echo the_custom_logo(); ?>
    </div>
    <div class="col-md-4 ps-md-0 text-center text-md-end mt-2 mt-md-0">
        <?php $sq = isset($_GET['s'])?$_GET['s']:''; ?>
        <form method="get" name="searchform" action="<?php echo get_home_url();?>">
            <input type="hidden" name="post_type" value="post" />
            <div class="row">
                <div class="col-9 col-md-10 pe-0">
                    <input type="text" name="s" class="border-0 rounded-0 form-control form-control-sm" placeholder="Search" value="<?php echo $sq;?>" required />
                </div>
                <div class="col-3 col-md-2 ps-1">
                    <button type="submit" class="h-100 w-100 btn btn-primary btn-sm bg-dark border-0 rounded-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="row mx-0">
    <div class="col pb-1 bg-primary"></div>
    <div class="col pb-1 bg-success"></div>
    <div class="col pb-1 bg-danger"></div>
    <div class="col pb-1 bg-warning"></div>
    <div class="col pb-1 bg-info"></div>
    <div class="col pb-1 bg-primary"></div>
    <div class="col pb-1 bg-success"></div>
    <div class="col pb-1 bg-dark"></div>
</div>
<nav id="main-nav" class="bg-dark navbar navbar-expand-md d-block navbar-dark py-0 shadow-none" aria-labelledby="main-nav-label">

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNavOffcanvas" aria-controls="navbarNavOffcanvas" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'justg'); ?>">
        <span class="navbar-toggler-icon"></span>
        <small>Menu</small>
    </button>

    <div class="offcanvas bg-dark offcanvas-start" tabindex="-1" id="navbarNavOffcanvas">

        <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div><!-- .offcancas-header -->

        <!-- The WordPress Menu goes here -->
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'container_class' => 'offcanvas-body',
                'container_id'    => '',
                'menu_class'      => 'navbar-nav justify-content-start flex-grow-1 pe-3',
                'fallback_cb'     => '',
                'menu_id'         => 'main-menu',
                'depth'           => 4,
                'walker'          => new justg_WP_Bootstrap_Navwalker(),
            )
        );
        ?>
    </div><!-- .offcanvas -->
</nav>
</div>

<div class="text-center py-3">
    <?php get_berita_iklan('iklan_header'); ?>
</div>