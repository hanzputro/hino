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
    <meta name="msvalidate.01" content="888C8C1E050B6616C95B955E5CB227D4" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="author" content="<?php bloginfo( 'wpurl' ); ?>" />
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- <title><?php wp_title( '|', true, 'right' ); ?></title> -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/dist/images/favicon.png">
    
    <?php wp_head(); ?>    
</head>

<body>
    
    <div class="container header">
        <div class="container1200">
            <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo of_get_option('header-logo'); ?>" alt=""></a></div>
            <div class="navbar">
                <ul class="info">
                    <li class=""><?php echo of_get_option('header-mi'); ?></li>
                </ul>
                <ul class="">
                    <li class="has-submenu">
                        <a href="" class="menu-link"><b>PRODUK</b></a>
                        <div class="container1200 submenu">
                            <ul class="tab-container margin0 center">
                                <!-- <li>
                                    <p class="tittle margin0">aaaa</p>
                                    
                                    <a href="#aaa" class="button--gray widthfull center">DETAIL</a>
                                </li>
                                 <li>
                                    <p class="tittle margin0">bbbb</p>
                                    
                                    <a href="#bbbb" class="button--gray widthfull center">DETAIL</a>
                                </li> -->

                                <?php
                                    $args = array(
                                      'orderby' => 'name',
                                      'child_of' => 4, //parent id
                                      'taxonomy' => 'category'
                                    );

                                    $categories = get_categories( $args );
                                    foreach ($categories as $cat) {
                                        $category_link = get_category_link($cat->cat_ID);
                                        $category_thumbnail = get_the_category_thumbnail($cat->cat_ID);
                                        ?>
                                        <li>
                                            <p class="tittle margin0"><?php echo $cat->cat_name ?></p>
                                            <?php echo $category_thumbnail ?>
                                            <a class="button--gray widthfull center" href="<?php echo esc_url( $category_link ); ?>">DETAIL</a>
                                        </li>
                                        <?php
                                    }
                                ?>

                            </ul>
                        </div>
                    </li>
                    <?php

                    global $post;
                    $args = array( 'category_name' => 'navbar' );

                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li><a href="<?php the_permalink(); ?>" class="menu-link"><b><?php the_title(); ?></b></a></li>
                    <?php endforeach; 
                    wp_reset_postdata();

                    ?>
                </ul>
            </div>
        </div>
    </div>