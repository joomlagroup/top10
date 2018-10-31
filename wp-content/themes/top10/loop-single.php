<?php
/**
 * The single post loop Default template
 **/

if (have_posts()) {
    the_post();

    $td_mod_single = new td_module_single($post);
    ?>

    <article id="post-<?php echo $td_mod_single->post->ID;?>" class="<?php echo join(' ', get_post_class());?>" <?php echo $td_mod_single->get_item_scope();?>>
        <div class="td-post-header">

            <?php echo $td_mod_single->get_category(); ?>

            <header class="td-post-title">
                <?php echo $td_mod_single->get_title();?>


                <?php if (!empty($td_mod_single->td_post_theme_settings['td_subtitle'])) { ?>
                    <p class="td-post-sub-title"><?php echo $td_mod_single->td_post_theme_settings['td_subtitle'];?></p>
                <?php } ?>


                <div class="td-module-meta-info">
                    <?php echo $td_mod_single->get_author();?>
                    <?php echo $td_mod_single->get_date(false);?>
                    <?php echo $td_mod_single->get_comments();?>
                    <?php echo $td_mod_single->get_views();?>
                </div>

            </header>

        </div>

        <?php echo $td_mod_single->get_social_sharing_top();?>


        <div class="td-post-content">

        <?php
        // override the default featured image by the templates (single.php and home.php/index.php - blog loop)
        if (!empty(td_global::$load_featured_img_from_template)) {
            echo $td_mod_single->get_image(td_global::$load_featured_img_from_template);
        } else {
            echo $td_mod_single->get_image('td_696x0');
        }
        ?>

        <?php echo $td_mod_single->get_content();?>
            <!-- list top -->
            <?php
            $top_list = get_field('top_list' );
            if( $top_list ): ?>
                <div id="list_tops">
                    <div class="item_dsp_row" style="margin-top: 0px;"></div>

                    <?php
                    $arr_title = array();
                    // loop through the rows of data
                    foreach ($top_list as $key => $item):
                        $title = $item['item_title_top'];
                        $content  = $item['item_content_top'];
                        $arr_title[]= $title;
                    ?>

                    <div id="item_list<?php echo $key + 1 ?>" class="item">
                        <div class="top_item">
                            <div class="left_item pull-left">
                                <div class="text-center">
                                    <span class="badged_small"><?php echo $key + 1; ?></span>
                                </div>
                            </div>
                            <div class="right_item">
                                <h4><?php echo $title; ?></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mid_item">
                            <div class="left_item pull-left  hidden-xs"></div>
                            <div class="right_item">
                                <div class="item_content">
                                    <?php echo $content ?>
                                </div>
                            </div>
                        </div>


                    </div>

                    <?php endforeach; ?>

                    <ul class="sticky circle_link">
                        <?php foreach ($arr_title as $key => $val): ?>
                            <a class="btn-primary" data-tooltip="<?php echo $val ?>" href="#item_list<?php echo $key + 1 ?>"><?php echo $key + 1 ?></a>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <!-- end list top -->
        </div>
<div class="related-posts">
<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo '<p id="contact" class="btn-xl btn-lightblue"><strong>Bài viết liên quan:</strong></p>';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>50,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<p>✓ <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
<?php
endwhile;
}
wp_reset_query();
}
?>
</div>

        <footer>
            <?php echo $td_mod_single->get_post_pagination();?>
            <?php echo $td_mod_single->get_review();?>

            <div class="td-post-source-tags">
                <?php echo $td_mod_single->get_source_and_via();?>
                <?php echo $td_mod_single->get_the_tags();?>
            </div>

            <?php echo $td_mod_single->get_social_sharing_bottom();?>
        </footer>

    </article> <!-- /.post -->


<?php
} else {
    //no posts
    echo td_page_generator::no_posts();
}

?>



