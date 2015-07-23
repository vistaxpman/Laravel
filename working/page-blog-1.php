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
                    'theme_location'    => 'primary'
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
            <?php
            $argsPost = array(
                'post_type'         => 'post',
                'orderby'           => 'title',
                'order'             => 'ASC',
                'posts_per_page'    => 10,
            );
            $query = new WP_Query( $argsPost );
            ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="post">
                <div class="post-info">
                    <div class="date"><span class="month"><?php the_time( 'M' ); ?></span><span class="day"><?php the_time( 'd' ); ?></span><span class="month"><?php the_time( 'Y' ); ?></span></div>
                    <div class="comments">

                        <?php comments_number('<a href="javascript:void(0)"><span>0</span> comments</a>', '<a href="javascript:void(0)"><span>1</span> comment</a>', '<a href="javascript:void(0)"><span>%</span> comments</a>'); ?>
                    </div>
                </div><!--END POST-INFO-->

                <div class="post-content">

                    <div class="post-media">
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
            <!-- show paging
            <div class="wp-pagenavi">
                <span class="pages">Page 1 of 9</span>
                <span class="current">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&rarr;</a>
            </div>
            -->
            <?php if (function_exists("pagination")) {
                pagination($query->max_num_pages);
            } ?>
            <!--END WP-PAGENAVI-->

        </div><!--END INNER-CONTENT-->



        <div id="sidebar">

            <?php get_sidebar(); ?>

        </div><!--END SIDEBAR-->
        <?php get_footer(); ?>

    </div><!-- END CONTENT-WRAPPER -->

</div><!-- END WRAPPER -->

</body>
</html>
