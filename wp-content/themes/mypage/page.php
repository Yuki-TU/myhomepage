<?php get_header(); ?>
    <div class="contentsWrap">
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