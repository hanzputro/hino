<?php get_header(); ?>

    <section class="container1200">
        <div class="grid" id="section-cover2">

            <div class="span9">
                <!-- news list -->
                <h2>Recent Posts</h2>
                <ul>
                    <?php
                        $args = array( 'numberposts' => '5', 'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_format',
                                    'field' => 'slug',
                                    'terms' => 'post-format-aside',
                                    'operator' => 'NOT IN'
                                ), 
                                array(
                                    'taxonomy' => 'post_format',
                                    'field' => 'slug',
                                    'terms' => 'post-format-image',
                                    'operator' => 'NOT IN'
                                )
                        ) );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
                        }
                        wp_reset_query();
                    ?>
                </ul>
            </div>

            <div class="span3">
                <div class="grid">
                    <div class="span4 box">
                        <div class="box__top"><span class="">&#9656; PROMO HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span4 box">
                        <div class="box__top"><span class="">&#9656; TIPS HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span4 box">
                        <div class="box__top"><span class="">&#9656; HARGA HINO</span></div>
                        <div class="box__middle">
                            <a href=""><img src="<?php bloginfo('template_url'); ?>/dist/images/sample-img2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="span4 box">
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
		