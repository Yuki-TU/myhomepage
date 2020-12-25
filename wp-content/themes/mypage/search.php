<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <h1 class="type-A">「<?php the_search_query(); ?>」の検索結果</h1>
            <section class="newsBlock block">
            <?php get_template_part( 'loop', 'main' ); ?>
            </section><!-- /.newsBlock -->
        </div><!-- /.mainContents -->
    </div><!-- /.contentsWrap -->

<?php get_footer(); ?>