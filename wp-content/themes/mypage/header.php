<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/myStyles.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <[endif]-->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <title>
        <?php if(!is_home()){
        wp_title(' - ', true, 'right');
        }
        bloginfo('name'); 
         ?>
    </title>

    <?php 
    wp_enqueue_script('jquery');
    wp_enqueue_script('hotel-common', get_template_directory_uri() . '/js/common.js');
    wp_head(); 
    ?>

    <style>
    [v-cloak] {
        display: none;
    }
    </style>
</head>


<body class="home">
    <header class="globalHeader">
        <div class="inner">
            <h1><a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" height="50" width=auto alt="Yuki's">
                </a>
            </h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <?php get_search_form(); ?>
        </div>
    </header><!-- /.globalHeader -->

    <nav class="globalNaviTop">
        <?php
        $args = array(
            'menu'=>'global-navigationTop',
            'container'=>false,
        );
        wp_nav_menu($args);
        ?>
    </nav><!-- /.globalNaviTop -->

