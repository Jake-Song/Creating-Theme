<?php get_header(); ?>
    <?php
        if(have_posts()) :
            while(have_posts()) : the_post(); ?>
                <article class="post page">
                    <div class="page-wrapper">
                    <aside class="sidebox">
                        <div class="side-menu">
                            <nav class="site-nav sub-nav">
                                <?php if( has_children() || $post->post_parent ) : ?>
                                  <span class="side-menu-title">
                                    <h2>목록</h2>
                                    <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                                  </span>
                                  <div class="sub-index-child">
                                      <ol>
                                          <?php
                                              $args = array(
                                                  'child_of' => get_top_parent_id(),
                                                  'title_li' => '',
                                                  'link_after' => '<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>',
                                                  'sort_column' => 'menu_order',
                                              );
                                           ?>
                                          <?php wp_list_pages( $args ); ?>
                                      </ol>
                                  </div>
                                  <?php else : ?>
                                    <span class="side-menu-title"><h2>순서</h2></span>
                                    <div class="sub-index">
                                        <ol>
                                            <li>
                                              <a href="./#install">가. 워드프레스 설치
                                                <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                              </a>
                                              </li>
                                            <li>
                                              <a href="./#config">나. 페이지 및 메뉴 구성하기
                                                <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="./#front">다. 전면 페이지 만들기
                                                <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="./#misc">라. 기타 페이지 만들기
                                                <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                                              </a>
                                            </li>
                                        </ol>
                                    </div>
                                <?php endif; ?>
                            </nav>
                        </div>
                    </aside>
                    </div>

                    <div class="ajax-container">

                   <div class="content-box">

                        <?php qt_custom_breadcrumbs(); ?>

                        <div class="content-box-title">
                          <h4>워드프레스 초급강좌</h4>
                          <h2><?php echo get_the_title( get_top_parent_id() ); ?></h2>
                        </div>

                        <?php
                            the_content();
                            if ( comments_open() || get_comments_number() ) :
                              comments_template();
                            endif;
                        ?>
                        <div class="cover-layer"></div>
                        <div class="loading-bar-container">
                            <div class="loading-bar"></div>
                        </div>
                    </div>
                </div>
                </article>
      <?php

         endwhile;

          else :
              echo '포스트가 존재하지 않습니다.';
          endif;

     ?>
 <?php get_footer(); ?>
