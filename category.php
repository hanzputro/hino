<?php get_header(); ?>
    
    <!-- <section class="center">
        <div class="banner">
            <div class="banner__list"><img src="<?php bloginfo('template_url'); ?>/dist/images/banner.jpg" alt=""></div>
        </div>
    </section> -->

    <section class="container1200">
        <div class="container__content grid" id="section-cover2">

            <div class="span8">
                <div class="grid">
                    <div class="span12 box">
                        <div class="box__middle content">
                            <div class="news">

                                <?php 
                                // get slug/hash from url
                                $anchor = explode('/', $_SERVER['REQUEST_URI']);
                                $anchor = $anchor[ count($anchor) - 2 ];
                                    // echo $anchor;
                                // the query to set the posts per page to 5
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array('paged' => $paged, 'category_name' => ''.$anchor.'' );
                                query_posts($args); ?>
                                <!-- the loop -->
                                <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                                        <!-- rest of the loop -->
                                        <!-- the title, the content etc.. -->
                                        <div class="news__list">
                                            <a href="<?php the_permalink(); ?>"><h5 class="title"><?php the_title(); ?></h5></a>
                                            <div class="desc">
                                                <!-- <style>
                                                    .news .news__list{ margin-right:1.5%; }
                                                    .news .news__list img{ width:110px; } 
                                                }
                                                </style> -->
                                                <?php
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( array( 190, 110) );
                                                    }
                                                ?>
                                                <?php my_excerpt(80); ?>
                                                <a href="<?php the_permalink(); ?>" class="link s12">Selengkapnya &raquo;</a>
                                            </div>
                                        </div>

                                <?php endwhile; ?>
                                <?php else : ?>
                                <!-- No posts found -->
                                <?php endif; ?>

                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="span3" style="float:right;">
                <div class="grid">
                    
                    <?php $my_query = new WP_Query('category_name=special-news');
                    while ($my_query->have_posts()) : $my_query->the_post();
                    $do_not_duplicate = $post->ID; //This is the magic line
                    ?>
                    <div class="span12 box">
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

                </div>
            </div>
        </div>
    </section>
		
<?php get_footer(); ?>
		