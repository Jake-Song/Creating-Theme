<!DOCTYPE html>
<html <?php language_attributes(); ?> class="my-theme">
    <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <div class="container">
            <header class="site-header contact">

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
                <div class="header-title">
                    문의하기
                </div>
                <div class="separator"></div>
            </header>
