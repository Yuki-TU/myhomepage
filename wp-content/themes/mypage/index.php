<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <h1 class="type-A"><?php wp_title(''); ?></h1>
        <section class="newsBlock block">

            <article class="news">
                <div class="text">
                    <div class="entryInfo">
                        <div class="categories">
                            <ul>
                                <li><a href="#">コラム</a></li>
                            </ul>
                        </div>
                        <time datetime="2015-02-14">2015.02.14(sat)</time>
                    </div>
                    <h1><a href="single.html">バレンタイン企画を行います</a></h1>
                    <p>
                        本日はバレンタインデーですね。当ホテルでもバレンタイン企画を行います。
                        ディナーをご予約されたお客さま限定で特別コースをご提供させて頂きます。
                    </p>
                    <p>[<a href="single.html">続きを読む</a>]</p>
                </div>
                <figure><a href="single.html"><img src="images/dummy/180x180-2.png" height="180" width="180" alt=""></a>
                </figure>
            </article><!-- /.news -->

        </section><!-- /.newsBlock -->
    </div><!-- /.mainContents -->

    <aside class="subContents">
        <div class="wrapper">
            <section class="recentCategories">
                <h1 class="type-C">カテゴリー一覧</h1>
                <ul class="categories">
                    <li><a href="category.html">お知らせ</a>(10)</li>
                    <li><a href="category.html">コラム</a>(5)</li>
                </ul>
            </section><!-- /.recentCategories -->

            <section class="recentArchives">
                <h1 class="type-C">月別アーカイブ</h1>
                <ul class="archives">
                    <li><a href="date.html">2015年2月</a>(2)</li>
                    <li><a href="date.html">2015年1月</a>(1)</li>
                </ul><!-- /.archives -->
            </section><!-- /.recentArchives -->
        </div><!-- /.wrapper -->
    </aside><!-- /.subContents -->
</div><!-- /.contentsWrap -->

<?php get_footer(); ?>