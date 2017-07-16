<?php get_header( 'home' ); ?>

    <article class="video clearfix">
      <div class="title-box">
        <h4>동영상 강좌</h4>
        <div class="main-title">
          <?php echo file_get_contents( "./wp-content/themes/my-theme/img/stick.svg" ); ?>
          <h2>워드프레스 강좌</h2>
        </div>
        <p>워드프레스에 대한 영상과 설명이 있습니다.</p>
      </div>
      <div class="video row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="left">
            <img src="./wp-content/themes/my-theme/img/laptop-com.svg" alt="">
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="right">
            <div class="title-box">
              <h4>워드프레스 강좌</h4>
              <div class="main-title">
                <h2>워드프레스 홈페이지 1시간안에 만들기</h2>
              </div>
                <p>
                  난이도   <span class="p-separator">|</span>   초급<br>
                  영상개수   <span class="p-separator">|</span>   1개<br>
                  영상시간   <span class="p-separator">|</span>   1:20<br>
                  워드프레스 초보자분들도 무리없이 따라하시며<br>
                  만들 수 있습니다.<br>
                  홈페이지를 같이 만들어가며 배우는 영상입니다.
                </p>
            </div>
              <a class="video-link" href="#">강좌 보기</a>
          </div>
        </div>

        <div class="selector col-sm-12 col-md-12 col-lg-12">
            <?php for( $i =0; $i < 3; $i++ ) :?>
                <div class="video-button"></div>
            <?php endfor; ?>
        </div>

      </div>
    </article>

    <article class="portfolio clearfix">

        <?php for( $i =0; $i < 6; $i++ ) :?>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="http://localhost/wordpress10/wp-content/uploads/2017/07/portfolio-on.jpg" alt="...">
            <div class="caption">
              <h3>노무법인 온</h3>
              <p>www.onthehr.com</p>
              <p><a href="#" class="btn btn-primary" role="button">사이트 보기</a> <a href="#" class="btn btn-default" role="button">프로젝트 설명</a></p>
            </div>
          </div>
        </div>

        <?php endfor; ?>

    </article>

    <article class="contact"></article>

<?php get_footer(); ?>
