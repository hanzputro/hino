<?php get_header(); ?>

    <section class="container1200">
        <div class="container__content grid">

            <div class="span9">
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

            <div class="span3">
                <div class="grid">
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; PROMO HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; TIPS HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; HARGA HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; HUBUNGI KAMI</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span12 box">
                        <div class="box__top"><span class="">&#9656; LOKASI</span></div>
                        <div class="box__middle">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.946090793215!2d107.08665361431369!3d-6.2708200954611835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698fed5b83298b%3A0x3f8afd0a290aec81!2sPT.HUDAYA+MAJU+MANDIRI!5e0!3m2!1sen!2sid!4v1518844088232" width="400" height="300" frameborder="0" style="border:0; max-width:100%;" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		
<?php get_footer(); ?>
		