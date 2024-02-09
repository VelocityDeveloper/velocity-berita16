</div>
</div>

<footer class="site-footer mb-3" id="colophon">
    <div class="container">
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
        <?php echo '<div class="row m-0 bg-light pt-4 pb-3 px-1 footer-widget border-bottom-0 border">';
            for ($x = 1; $x <= 4; $x++) {
                if (is_active_sidebar('footer-widget-'.$x)) {
                    echo '<div class="col-md col-12 footer-widget-'.$x.'" >';
                        dynamic_sidebar('footer-widget-'.$x);
                    echo '</div>';
                }
            }
        echo '</div>'; ?>
        <div class="bg-white px-3 pb-3 border-top-0 border">
            <div class="site-info text-center bg-dark text-white py-3">
                <small>© <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved. Design by <a class="text-white" href="https://velocitydeveloper.com/" target="_blank" rel="noopener noreferrer"> Velocity Developer</a>.</small>
            </div>
        </div>
    </div>
</footer>