<?php

locate_template('includes/wp_booster/td_single_template_vars.php', true);

get_header();

global $loop_module_id, $loop_sidebar_position, $post, $td_sidebar_position;

$td_mod_single = new td_module_single($post);


?>
<div class="td-main-content-wrap">

    <div class="td-container td-post-template-default <?php echo $td_sidebar_position; ?>">
        <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

        <div class="td-pb-row">

            <!-- ads here -->
            <div class="td-pb-span12">
                <?php
                $image_top_1 = get_field('image_top_1');
                $image_top_2 = get_field('image_top_2');
                ?>
                <div class="ads_top">
                    <?php if($image_top_1 or $image_top_2): ?>
                        <div class="">
                            <?php if($image_top_1): ?>
                                <div class="pull-left item_banner">
                                    <img src="<?php echo $image_top_1['url']; ?>" alt="<?php echo $image_top_1['alt']; ?>"  />
                                </div>
                            <?php endif; ?>

                            <?php if($image_top_2): ?>
                                <div class="pull-left item_banner">
                                    <img src="<?php echo $image_top_2['url']; ?>" alt="<?php echo $image_top_2['alt']; ?>"  />
                                </div>
                            <?php endif; ?>

                            <div class="clearfix"></div>
                        </div>

                    <?php else: ?>
                        <ul>
                            <li><a href="<?php echo site_url('/lien-he'); ?>">
                                    <img src="<?php echo get_template_directory_uri().'/images/ads/lien-he-quang-cao-top.jpg' ?>"  />
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <!-- end ads here -->

            <?php

            //the default template
            switch ($loop_sidebar_position) {
                default: //sidebar right
					?>
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">

                                 <?php $image_1 = get_field('image_1'); ?>
                                 <?php $image_2 = get_field('image_2'); ?>
                                 <?php if($image_1 or $image_2): ?>

                                     <?php if($image_1): ?>
                                     <div class="image_1">
                                        <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>" />
                                     </div>
                                     <?php endif; ?>
                                     <?php if($image_2): ?>
                                        <div class="image_2">
                                            <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>" />
                                        </div>
                                     <?php endif; ?>

                                 <?php else: ?>
                                <div class="contact_for_ads_right">
                                    <a href="<?php echo site_url('/lien-he'); ?>"><img src="<?php echo get_template_directory_uri().'/images/ads/lien-he-quang-cao.jpg' ?>"  /></a>
                                </div>
                                <?php endif; ?>

                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    <?php
                    break;

                case 'sidebar_left':
                    ?>
                        <div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
		                <div class="td-pb-span4 td-main-sidebar" role="complementary">
			                <div class="td-ss-main-sidebar">
				                <?php get_sidebar(); ?>
			                </div>
		                </div>
                    <?php
                    break;

                case 'no_sidebar':
                    td_global::$load_featured_img_from_template = 'td_1068x0';
                    ?>
                        <div class="td-pb-span12 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                locate_template('loop-single.php', true);
                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                    <?php
                    break;

            }
            ?>
        </div> <!-- /.td-pb-row -->
    </div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php

get_footer();

?>

