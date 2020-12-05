
    
    <footer class="globalFooter">
        <div class="pageTop">
            <p><a href="javascript:void(0);" id="js-pagetop"><img src="<?php echo get_template_directory_uri(); ?>/images/common/pagetop01.png" height="41" width="41" alt=""></a></p>
        </div>
        
        <?php if(!is_home()): ?>
            <nav class="globalNavi">
                <?php
                $args = array(
                    'menu'=>'global-navigation1',
                    'container'=>false,
                );
                wp_nav_menu($args);
                ?>
            </nav><!-- /.globalNavi -->
            <nav class="globalNavi">
                <?php
                $args = array(
                    'menu'=>'global-navigation2',
                    'container'=>false,
                );
                wp_nav_menu($args);
                ?>
            </nav><!-- /.globalNavi -->
        <?php endif; ?>
        
        <div class="inner">


            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" height="50" width=auto alt="Yuki's"></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p> 
            
            <dl class="address">
                <dt>株式会社LisB</dt>
            </dl><!-- /.address -->

            <small>&copy; L is B Corp.</small>
        </div>
    </footer><!-- /.globalFooter -->

<?php wp_footer(); ?>
</body>
</html>