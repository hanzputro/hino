<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Hino Dealer se-Jabotabek</title>
    <!-- <title><?php wp_title( '|', true, 'right' ); ?></title> -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!-- <meta name="author" content="" />
    <meta name="keywords" content="" />  -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/dist/images/favicon.png">
    
    <?php wp_head(); ?>    
</head>

<body>
    
    <div class="container header">
        <div class="container1200">
            <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/dist/images/logo-dealerhinobekasi.jpg" alt=""></a></div>
            <div class="navbar">
                <ul class="info">
                    <li class="">More info: Telp. 082298666428</li>
                </ul>
                <ul class="">
                    <li class="has-submenu">
                        <a href="" class="menu-link"><b>PRODUK</b></a>
                        <div class="container1200 submenu">
                            <ul class="tab-link margin0">
                                <li class="active"><a href="#hino300-series"><h5 class="margin0">HINO300 Series</h5></a></li>
                                <li><a href="#hino500-series"><h5 class="margin0">HINO500 Series</h5></a></li>
                            </ul>
                            <ul class="tab-container margin0">
                                <li class="tab-content" id="hino300-series">
                                    <ul class="margin0">
                                        <?php 
                                        // the query to set the posts per page to 5
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array('paged' => $paged, 'category_name' => 'hino300-series' );
                                        query_posts($args); ?>
                                        <!-- the loop -->
                                        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                                            <!-- rest of the loop -->
                                            <!-- the title, the content etc.. -->
                                            <li>
                                                <p class="tittle margin0"><?php the_title(); ?></p>
                                                <?php
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail();
                                                    }
                                                ?>
                                                <a href="<?php the_permalink(); ?>" class="button--gray widthfull center">DETAIL</a>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php else : ?>
                                        <!-- No posts found -->
                                        <?php endif; ?>
                                    </ul>
                                <li class="tab-content" id="hino500-series">
                                    <ul class="margin0">
                                        <?php 
                                        // the query to set the posts per page to 5
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $args = array('paged' => $paged, 'category_name' => 'hino500-series' );
                                        query_posts($args); ?>
                                        <!-- the loop -->
                                        <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                                            <!-- rest of the loop -->
                                            <!-- the title, the content etc.. -->
                                            <li>
                                                <p class="tittle margin0"><?php the_title(); ?></p>
                                                <?php
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail();
                                                    }
                                                ?>
                                                <a href="<?php the_permalink(); ?>" class="button--gray widthfull center">DETAIL</a>
                                            </li>
                                        <?php endwhile; ?>
                                        <?php else : ?>
                                        <!-- No posts found -->
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php bloginfo('url'); ?>/news/tentang-kami" class="menu-link"><b>TENTANG KAMI</b></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/news/service-sparepart" class="menu-link"><b>SERVICE &amp; SPAREPART</b></a></li>
                </ul>
            </div>
        </div>
    </div>