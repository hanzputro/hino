

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
                                <br>
                                <br>
                                <br>
                                <center>
                                    <h1>Maaf, halaman tidak ditemukan!</h1>
                                    <br>
                                    <a href="<?php bloginfo('url'); ?>" class="button--primary">KEMBALI KE HOME</a>
                                </center>
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
		