<?php get_header(); ?>

<body id="top">

<div id="wrapper">

<div class="content-wrapper clear">

<!-- START HEADER -->

<div id="header-wrapper">

    <div class="header clear">

        <div id="logo">
            <a href="index.html"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="" /></a>
        </div><!--END LOGO-->

        <?php
        $args = array(
            'container_id'     => 'primary-menu',
            'container'        => 'div',
            'menu'             => 'Primary Menu',
            'menu_class'       => 'menu',
        );
        wp_nav_menu($args);
        ?>

    </div><!--END HEADER-->

</div><!--END HEADER-WRAPPER-->

<!-- END HEADER -->

<div class="section-title">

    <h1 class="title">Blog <span>you see kids, once upon a time</span></h1>

</div><!--END SECTION TITLE-->

<div id="inner-content" class="blog1">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
            <div class="post-info">
                <div class="date"><span class="month"><?php the_time( 'M' ); ?></span><span class="day"><?php the_time( 'd' ); ?></span><span class="month"><?php the_time( 'Y' ); ?></span></div>
                <div class="comments"><?php comments_popup_link( 'No comments »', '1 comment', '% comments' ); ?></div>
            </div><!--END POST-INFO-->

            <div class="post-content">

                <div class="post-media">

                <!-- Do it later -->
                <div class="flexslider" id="blog-slider">
                    <ul class="slides">
                        <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider4.jpg" alt="" />
                            <p class="flex-caption">This is a place for a brief description.</p>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider2.jpg" alt="" /></a>
                            <p class="flex-caption">Here we go again, history repeating!</p>
                        </li>
                        <li>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slider1.jpg" alt="" />
                        </li>
                    </ul><!--END UL SLIDES-->
                </div><!--END FLEXSLIDER-->

                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div><!--END POST-MEDIA-->

                <div class="post-title">
                    <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div><!--END POST-TITLE-->

                <div class="post-meta">
                    <ul>
                        <li><span>Posted by</span> <?php the_author_posts_link(); ?></li>
                        <li><span>in</span> <?php the_category(', '); ?></li>
                    </ul>
                </div><!--END POST-META-->

                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>" class="more-link">Continue reading &rarr;</a></p>

            </div><!--END POST-CONTENT -->
        </div><!--END POST-->
    <?php endwhile; else : ?>
        <p> <?php echo _e( 'Sorry, no posts matched your criteria.' ); ?> </p>
    <?php endif;?>
    <!-- show paging -->
    <div class="wp-pagenavi">
        <span class="pages">Page 1 of 9</span>
        <span class="current">1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&rarr;</a>
    </div><!--END WP-PAGENAVI-->

</div><!--END INNER-CONTENT-->



<div id="sidebar">

    <div class="widget">
        <h3 class="title">Popular posts</h3>

        <ul class="bra_recent_entries">
            <li>
                <span class="date">June 29, 2012</span>
                <a href="#">Erat nisl faucibus justo verit et quasi architecto beatae.</a>
            </li>

            <li>
                <span class="date">June 23, 2012</span>
                <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
            </li>

            <li>
                <span class="date">May 19, 2012</span>
                <a href="#">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a>
            </li>

            <li>
                <span class="date">April 12, 2012</span>
                <a href="#">Mattis purus sit amet fermentum.</a>
            </li>
        </ul><!--END UL-->
    </div><!--END WIDGET-->

    <div class="widget">
        <h3 class="title">Recent comments</h3>

        <ul id="recentcomments">
            <li>
                <a href="#" class="author">Jane Doe</a> on <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
            </li>

            <li>
                <a href="#" class="author">John Doe Junior</a> on <a href="#">Mattis purus sit amet fermentum.</a>
            </li>

            <li>
                <a href="#" class="author">Jane Doe</a> on <a href="#">Erat nisl faucibus justo verit et quasi architecto beatae.</a>
            </li>

            <li>
                <a href="#" class="author">John Doe Senior</a> on <a href="#">Erat nisl faucibus justo verit et quasi architecto beatae.</a>
            </li>
        </ul><!--END UL-->
    </div><!--END WIDGET-->

    <div class="widget">
        <h3 class="title">Archive</h3>
        <ul class="archive">
            <li><a href="#">February 2012</a>&nbsp;(2)</li>
            <li><a href="#">March 2012</a>&nbsp;(1)</li>
            <li><a href="#">April 2012</a>&nbsp;(5)</li>
            <li><a href="#">May 2012</a>&nbsp;(4)</li>
            <li><a href="#">June 2012</a>&nbsp;(3)</li>
        </ul><!--END UL-->
    </div><!--END WIDGET-->

</div><!--END SIDEBAR-->
<?php get_footer(); ?>

</div><!-- END CONTENT-WRAPPER -->

</div><!-- END WRAPPER -->

</body>
</html>
