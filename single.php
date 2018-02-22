<?php get_header(); ?>

    <section class="container1200">
        <div class="container__content grid">

            <div class="span8">
                <!-- news detail -->
                <?php while ( have_posts() ) : the_post(); ?>
                    <!-- title -->
                    <h1 class="lt"><font><?php the_title(); ?></font></h1>
                    <!-- date -->
                    <small class="post__date"><?php the_date(); ?></small>
                    <!-- gallery & content -->
                    <p><?php the_content(); ?></p>
                <?php endwhile; // end of the loop. ?>
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
		