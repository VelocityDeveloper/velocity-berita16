<?php

/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package justg
 */

// Exit if accessed directly.

defined('ABSPATH') || exit;
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">	
            <h1 class="velocity-title"><span><?php wp_title(''); ?></span></h1>
			<?php if ( have_posts() ) : ?>
                <div class="velocity-post-loop">
                    <?php while ( have_posts() ) : the_post();
                        $post_id = get_the_ID();
                        echo '<div class="velocity-post-content text-muted mb-3 pb-3 border-bottom">';
                        echo '<div class="row">';
                            echo '<div class="col-4 col-md-3 pe-0">';
                                echo do_shortcode('[resize-thumbnail width="400" height="400" linked="true" class="w-100" post_id="'.$post_id.'"]');
                            echo '</div>';
                            echo '<div class="col-8 col-md-9">';
                                echo '<small class="d-block text-success mb-1">';
                                    echo velocity_post_date($post_id);
                                echo '</small>';
                                echo '<div class="mb-0 mb-md-2">';
                                    echo '<a class="velocity-title-archive secondary-font fw-bold text-color-theme" href="'.get_the_permalink($post_id).'">'.get_the_title($post_id).'</a>';
                                echo '</div>';
                                echo '<div class="d-md-block d-none">';
                                    echo do_shortcode('[velocity-excerpt count="150" post_id="'.$post_id.'"]');
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    endwhile; ?>
                </div>
			<?php else : ?>
				<?php get_template_part( 'loop-templates/content', 'none' ); ?>
			<?php endif; ?>
        </div>
        <div class="col-md-4 mt-3 mt-md-0 order-md-3">
            <?php get_sidebar('main');?>
        </div>
    </div>
</div>

<?php
get_footer();