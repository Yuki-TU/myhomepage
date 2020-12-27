<?php get_header(); ?>
    <?php if (is_page('introduction')): ?>
        <div id="fixed-header-intro" class="dark-filter"></div>
    <?php endif; ?>
    <?php if (is_page('hobby')): ?>
        <div id="fixed-header-hobby"></div>
    <?php endif; ?>
    <?php if (is_page('country')): ?>
        <div id="fixed-header-country"></div>
    <?php endif; ?>
    <div class="contentsWrap contents-display">
        <?php if(!is_home()): ?>
            <div class="breadcrumbs">
                <?php
                if(function_exists('bcn_display')){
                    bcn_display();
                }
                ?>
            </div>
        <?php endif; ?>
        
        <div class="mainContents">
        <?php
        if(have_posts()):
            while(have_posts()):the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                <h1 class="title type-B"><span><?php the_title(); ?></span></h1>
                <section class="content">
                    <?php the_content(); ?>
                </section>
            </article><!-- /.page -->
        <?php
            endwhile;
        endif;
        ?>
        </div><!-- /.mainContents -->

    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>