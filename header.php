<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <!--    <script type="applijewelleryion/x-javascript">
             addEventListener("load", function() {
              setTimeout(hideURLbar, 0);
              }, false);
              function hideURLbar(){
              window.scrollTo(0,1);
              }
        </script>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div class="header" id="ban">
    <div class="container">
        <div class="head-left">
            <div class="header-search">
                <div class="search">
                    <input class="search_box" type="checkbox" id="search_box">
                    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
                                                                      aria-hidden="true"></span></label>
                    <div class="search_form">
                        <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                            <input type="text" name="s" placeholder="Search...">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_right">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu([
                        'menu' => 'primary',
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav',
                        'container' => 'nav',
                        'container_class' => 'link-effect-7',
                        'container_id' => 'link-effect-7',
                        'depth' => 1
                    ]);
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s"
             style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
            <ul>
                <li><a href="#"> </a></li>
                <li><a href="#" class="pin"> </a></li>
                <li><a href="#" class="in"> </a></li>
                <li><a href="#" class="be"> </a></li>

                <li><a href="#" class="vimeo"> </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--start-main-->
<div class="header-bottom">
    <div class="container">
        <div class="logo">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo() ?></a></h1>
            <p><label class="of"></label><?php echo get_bloginfo('description'); ?><label class="on"></label></p>
        </div>
    </div>
</div>
<!-- banner -->

<div class="banner-1"></div>
