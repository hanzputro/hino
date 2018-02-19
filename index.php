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
            <div class="banner__list"><img src="<?php bloginfo('template_url'); ?>/dist/images/banner.jpg" alt=""></div>
        </div>
    </section>

    <section class="container1200">
        <div class="grid" id="section-cover2">

            <div class="span8">
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
                                $args = array( 'posts_per_page' => 3 );

                                $myposts = get_posts( $args );
                                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                    <div class="news__list">
                                        <a href="<?php the_permalink(); ?>"><h6 class="title"><?php the_title(); ?></h6></a>
                                        <div class="desc">
                                            <?php
                                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                    the_post_thumbnail( 'full' );
                                                }
                                            ?>
                                            <?php my_excerpt(20); ?>
                                            <a href="<?php the_permalink(); ?>" class="link s12">Selengkapnya &raquo;</a>
                                        </div>
                                    </div>
                                <?php endforeach; 
                                wp_reset_postdata();

                                ?>
                                <center><a href="" class="button--primary">MORE <span style="font-size:16px;">&raquo;</span></a></center>
                            </div>
                        </div>
                        <br><br>
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