<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">
<p style="position:absolute;top:-2000px;">top10 tphcm gioi thieu các dich vụ uy tín <a href="https://top10tphcm.com/top-10-cong-ty-thiet-ke-logo-chuyen-nghiep-uy-tin-tai-tphcm">Công ty thiết kế logo</a> tại TPHCM uy tí, chuyên nghiệp	<a href="https://top10tphcm.com/top-10-cong-ty-thiet-ke-website-uy-tin-tai-tphcm">thiết kế web</a> và cung câp các dịch vụ khác	<a href="https://top10tphcm.com/top-10-cong-ty-dich-vu-diet-con-trung-uy-tin-tai-tphcm">diệt côn trùng</a> hiệu quả nhất Phong cách <a href="https://top10tphcm.com/top-can-ho-chung-cu-cao-cap-o-quan-7">căn hộ quận 7</a> vừa thể hiện nét trẻ trung top 10 <a href="https://top10tphcm.com/top-chung-cu-cao-cap-nhat-tphcm">căn hộ cao cấp tphcm	</a> tốt nhất  <a href="https://top10tphcm.com/top-can-ho-chung-cu-cao-cap-nhat-quan-thu-duc">căn hộ thủ đức</a> cao cấp và <a href="https://top10tphcm.com/cac-du-an-can-ho-chung-cu-cao-cap-tai-quan-tan-binh">căn hộ tân bình</a> đẹp nhất</p>	
    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>
    
    <?php locate_template('parts/menu-mobile.php', true);?>
    <?php locate_template('parts/search.php', true);?>
    
    
    <div id="td-outer-wrap">
    <?php //this is closing in the footer.php file ?>

        <?php
        /*
         * loads the header template set in Theme Panel -> Header area
         * the template files are located in ../parts/header
         */
        td_api_header_style::_helper_show_header();

        do_action('td_wp_booster_after_header'); //used by unique articles