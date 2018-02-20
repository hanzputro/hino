<?php
/*
Template Name: Blog Template
*/
?>

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
                        <div class="box__top"><span class="">&#9656; ACARA &amp; BERITA</span></div>
                        <div class="box__middle content">
                            <div class="news">
                                <?php 
                                // the query to set the posts per page to 5
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array('posts_per_page' => 5, 'paged' => $paged, 'category_name' => 'news' );
                                query_posts($args); ?>
                                <!-- the loop -->
                                <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                                        <!-- rest of the loop -->
                                        <!-- the title, the content etc.. -->
                                        <div class="news__list">
                                            <a href="<?php the_permalink(); ?>"><h6 class="title"><?php the_title(); ?></h6></a>
                                            <div class="desc">
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
                                <!-- pagination -->
                                <?php the_posts_pagination(); ?>
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
                    <?php 
                    // the query to set the posts per page to 5
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array('paged' => $paged, 'category_name' => 'special-news' );
                    query_posts($args); ?>
                    <!-- the loop -->
                    <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
                        <!-- rest of the loop -->
                        <!-- the title, the content etc.. -->
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
                    <?php else : ?>
                    <!-- No posts found -->
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
		
<?php get_footer(); ?>
		