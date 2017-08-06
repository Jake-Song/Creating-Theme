<?php get_header( 'home' ); ?>

    <article class="video clearfix">
      <div class="video-backface">
        <img src="./wp-content/themes/my-theme/img/video-text.svg" alt="">
      </div>
      <div class="title-box">
        <h4>동영상 강좌</h4>
        <div class="main-title">
          <?php echo file_get_contents( "./wp-content/themes/my-theme/img/stick.svg" ); ?>
          <h2>워드프레스 강좌</h2>
        </div>
        <p>워드프레스에 대한 영상과 설명이 있습니다.</p>
      </div>
      <div class="video-container">

          <div class="image-section">
            <img class="current" src="./wp-content/themes/my-theme/img/video-tutorial.svg" alt="">
            <img class="" src="./wp-content/themes/my-theme/img/video-tutorial-2.svg" alt="">
            <img class="" src="./wp-content/themes/my-theme/img/video-tutorial-3.svg" alt="">
            <img class="" src="./wp-content/themes/my-theme/img/video-tutorial-4.svg" alt="">
          </div>

          <div class="text-section">

              <div class="text current">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">워드프레스 홈페이지 1시간안에 만들기</span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도  <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   1개<br>
                      영상시간   <span class="p-separator">|</span>   1:20<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                      홈페이지를 같이 만들어가며 배우는 영상입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="./워드프레스-홈페이지-1시간-안에-만들기">강좌 보기</a>
                    </span>
                  </p>
              </div>

              <div class="text">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">
                        왕초보도 하루만에 가능한 워드프레스<br>
                        홈페이지 만들기
                      </span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도   <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   9개<br>
                      영상시간   <span class="p-separator">|</span>   1:35<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="./왕초보도-하루만에-가능한-워드프레스-홈페이지-만">강좌 보기</a>
                    </span>
                  </p>
              </div>

              <div class="text">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">한국형 워드프레스 쇼핑몰 만들기</span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도   <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   9개<br>
                      영상시간   <span class="p-separator">|</span>   1:35<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                      쇼핑몰을 만들어가며 배우는 과정입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="./한국형-쇼핑몰-만들기">강좌 보기</a>
                    </span>
                  </p>
              </div>

              <div class="text">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">워드프레스 자유자재로 다루기</span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도   <span class="p-separator">|</span>   중급<br>
                      영상개수   <span class="p-separator">|</span>   10개<br>
                      영상시간   <span class="p-separator">|</span>   1:35<br>
                      기본적인 html, css 지식이 필요합니다.<br>
                      테마를 만들어가며 배우는 과정입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="./워드프레스-자유자재로-다루기">강좌 보기</a>
                    </span>
                  </p>
              </div>

          </div>

      </div>

          <div class="selector col-sm-12 col-md-12 col-lg-12">
              <?php for( $i =0; $i < 4; $i++ ) :?>
                  <button type="button" class="video-button"></button>
              <?php endfor; ?>
          </div>

      </article>

      <article class="service clearfix">
        <div class="title-box">
          <h4>서비스 안내</h4>
          <div class="main-title">
            <img src="./wp-content/themes/my-theme/img/left-edge.svg" alt="">
            <h2>서비스 상품</h2>
            <img src="./wp-content/themes/my-theme/img/right-edge.svg" alt="">
          </div>
          <p>사이트 제작 의뢰시 참고하세요.</p>
        </div>

        <div class="price-container">

              <?php for($i = 0; $i < 3; $i++) : ?>

                      <?php get_template_part('/content/price', $i + 1); ?>

              <?php endfor; ?>
         </div>

      </article>

      <article class="portfolio clearfix">
          <div class="portfolio-edge">
              <img src="./wp-content/themes/my-theme/img/long-edge.svg" alt="">
          </div>
          <div class="portfolio-title-container">
              <div class="title-box">
                  <div class="portfolio-backface">
                      <img src="./wp-content/themes/my-theme/img/portfolio-text.svg" alt="">
                  </div>
                  <h4>사이트 제작 모음</h4>
                  <div class="main-title">
                      <h2>포트폴리오</h2>
                  </div>
                  <div class="bar">
                      <img src="./wp-content/themes/my-theme/img/bar.svg" alt="">
                  </div>
                  <h4 class="sub-title">테마 수정 및 테마 자체 개발</h4>
                  <p>웹에서 구현되는 기능 및 디자인은 워드프레스도 가능합니다.</p>
              </div>
              <div class="image-box">
                  <img src="./wp-content/themes/my-theme/img/portfolio-responsive.svg" alt="">
              </div>
          </div>
                <div class="portfolio-container">
                    <?php for($i = 0; $i < 5; $i++) : ?>
                        <div class="col-sm-6 col-md-4">
                            <?php get_template_part('/content/thumbnail', $i + 1); ?>
                        </div>
                    <?php endfor; ?>
                </div>
    </article>

    <article class="contact"></article>

<?php get_footer(); ?>
