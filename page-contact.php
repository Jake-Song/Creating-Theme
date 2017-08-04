<?php
/*
Template Name: 연락하기
*/
?>
<?php get_header( 'contact' ); ?>
    <?php
        if(have_posts()) :
            while(have_posts()) : the_post(); ?>
                <article class="post page contact">

                   <div class="content-box">

                        <?php qt_custom_breadcrumbs(); ?>

                        <div class="content-box-title">
                          <h4>연락하기</h4>
                          <?php echo file_get_contents( "./wp-content/themes/my-theme/img/stick.svg" ); ?>
                          <h2><?php echo get_the_title( get_top_parent_id() ); ?></h2>
                          <p>견적의뢰나 동영상에 대한 질문 해주세요.</p>
                        </div>

                        <?php the_content(); ?>

                          <div id="form-messages"></div>

                          <form id="ajax-contact">
                            <?php wp_nonce_field( basename( __FILE__ ), 'user-submitted-question' ); ?>
                            <div class="info-field">
                                <div class="field">
                                    <label for="name">이름</label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                <div class="field">
                                    <label for="email">이메일</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="sort">구분</label>
                                <select name="sort" id="sort" required>
                                    <option value=""></option>
                                    <option value="question">동영상강좌</option>
                                    <option value="order">견적의뢰</option>
                                </select>
                            </div>

                            <div class="field">
                                <label for="message">내용</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>

                            <input type="text" id="xyq" name="<?php echo apply_filters( 'honeypot_name', 'data-submitted' ) ?>" value="" style="display: none;">

                            <div class="submit-field">
                                <button type="submit"><span class="submit-button">보내기</span></button>
                            </div>

                        <?php
                            if ( comments_open() || get_comments_number() ) :
                              comments_template();
                            endif;
                        ?>
                  </div>

                </article>
      <?php

         endwhile;

          else :
              echo '포스트가 존재하지 않습니다.';
          endif;

     ?>
 <?php get_footer(); ?>
