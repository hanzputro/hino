<?php get_header(); ?>

<!-- specific page -->
<!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/home.css"> -->

<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<?php    
    $node = new SimpleXMLElement('<body/>');
    $node->addAttribute("data-hijacking", 'off');
    $node->addAttribute("data-animation", 'none');
    echo $node->asXML();
?>       
    <section class="center">
        <div class="banner">
            <div class="banner__list"><img src="<?php echo of_get_option('home-banner'); ?>" alt=""></div>
        </div>
    </section>

    <section class="container1200">
        <div class="grid" id="section-cover2">

            <div class="span8">
                <div class="grid">
                    <?php 
                    // the query to set the posts per page to 5
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('paged' => $paged, 'category_name' => 'special-news' );
                    query_posts($args); ?>
                    <!-- the loop -->
                    <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                        <!-- rest of the loop -->
                        <!-- the title, the content etc.. -->
                        <div class="span4 box">
                            <div class="box__top"><span class="">&#9656; <?php the_title(); ?></span></div>
                            <div class="box__middle">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'full' );
                                        }
                                    ?>
                                </a>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <!-- No posts found -->
                    <?php endif; ?>

                </div>
            </div>

            <div class="span4">
                <div class="grid">
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; ACARA &amp; BERITA</span></div>
                        <div class="box__middle content">
                            <div class="news">
                                <?php

                                global $post;
                                $args = array( 'posts_per_page' => 3, 'category_name' => 'news' );

                                $myposts = get_posts( $args );
                                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                    <div class="news__list">
                                        <a href="<?php the_permalink(); ?>"><h6 class="title"><?php the_title(); ?></h6></a>
                                        <div class="desc">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( array( 100, 80) );
                                                }
                                            ?>
                                            <?php my_excerpt(20); ?>
                                            <a href="<?php the_permalink(); ?>" class="link s12">Selengkapnya &raquo;</a>
                                        </div>
                                    </div>
                                <?php endforeach; 
                                wp_reset_postdata();

                                ?>
                                <center><a href="<?php bloginfo('url'); ?>/news" class="button--primary">MORE <span style="font-size:16px;">&raquo;</span></a></center>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; LOKASI</span></div>
                        <div class="box__middle">
                            <iframe src="<?php echo of_get_option('sidebar-map'); ?>" width="400" height="300" frameborder="0" style="border:0; max-width:100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>