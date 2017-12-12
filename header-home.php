<!DOCTYPE html>
<html <?php language_attributes(); ?> class="my-theme">
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110377552-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110377552-1');
        </script>

        <meta name="viewport" content="width=device-width">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="container">
            <header class="site-header">

                <nav class="navbar navbar-default">

                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <div class="hamburger-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </div>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
                      </div>

                            <?php
                              $args = array(
                                'theme_location' => 'primary',
                                'depth' => 0,
                                'container' => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'primary-menu',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                              );
                             ?>

                            <?php wp_nav_menu( $args ); ?>

                </nav>
                <div class="main-image">
                    <img src="./wp-content/themes/my-theme/img/main-image-4-adjust.jpg" alt="">
                        <div class="left-bracket">
                            <img src="./wp-content/themes/my-theme/img/left-bracket.svg" alt="">
                        </div>
                        <div class="typewrite title" data-period="2000" data-type='[ "Design.", "Development.", "Wordpress." ]'>
                            <div class="bracket-left"></div>
                            <span class="wrap"></span>
                            <div class="bracket-right"></div>
                        </div>
                        <div class="right-bracket">
                            <img src="./wp-content/themes/my-theme/img/right-bracket.svg" alt="">
                        </div>
                        <div class="control">
                            <div class="play-button"><div class="arrow-right"></div></div>
                            <div class="pause-button"></div>
                        </div>
                        <div class="responsive-title">
                          <h2>CrackIt.</h2>
                        </div>
                </div>
                <div class="separator"></div>
          </header>
