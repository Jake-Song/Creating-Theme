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
            <img class="current" src="./wp-content/themes/my-theme/img/laptop-com.svg" alt="">
            <img class="" src="./wp-content/themes/my-theme/img/laptop-com.svg" alt="">
            <img class="" src="./wp-content/themes/my-theme/img/laptop-com.svg" alt="">
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
                      난이도   <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   1개<br>
                      영상시간   <span class="p-separator">|</span>   1:20<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                      홈페이지를 같이 만들어가며 배우는 영상입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="#">강좌 보기</a>
                    </span>
                  </p>
              </div>

              <div class="text">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">워드프레스 홈페이지 1시간안에 만들기</span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도   <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   1개<br>
                      영상시간   <span class="p-separator">|</span>   1:20<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                      홈페이지를 같이 만들어가며 배우는 영상입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="#">강좌 보기</a>
                    </span>
                  </p>
              </div>

              <div class="text">
                  <h4 class="a sub-title">
                      <span class="a wrap">워드프레스 강좌</span>
                  </h4>
                  <h2 class="a main-title">
                      <span class="a wrap">워드프레스 홈페이지 1시간안에 만들기</span>
                  </h2>
                  <p class="a description">
                    <span class="a wrap">
                      난이도   <span class="p-separator">|</span>   초급<br>
                      영상개수   <span class="p-separator">|</span>   1개<br>
                      영상시간   <span class="p-separator">|</span>   1:20<br>
                      워드프레스 초보자분들도 무리없이 따라하시며<br>
                      만들 수 있습니다.<br>
                      홈페이지를 같이 만들어가며 배우는 영상입니다.
                    </span>
                  </p>
                  <p class="a video-link-button">
                    <span class="a wrap">
                      <a class="video-link" href="#">강좌 보기</a>
                    </span>
                  </p>
              </div>

          </div>

      </div>

          <div class="selector col-sm-12 col-md-12 col-lg-12">
              <?php for( $i =0; $i < 3; $i++ ) :?>
                  <button type="button" class="video-button"></button>
              <?php endfor; ?>
          </div>

      </article>

      <article class="price clearfix">
        <div class="title-box">
          <h4>가격 정책</h4>
          <div class="main-title">
            <img src="./wp-content/themes/my-theme/img/left-edge.svg" alt="">
            <h2>사이트 제작 비용</h2>
            <img src="./wp-content/themes/my-theme/img/right-edge.svg" alt="">
          </div>
          <p>사이트 제작 의뢰시 비용 안내입니다.</p>
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

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="./wp-content/uploads/2017/07/portfolio-on.jpg" alt="...">
                <div class="caption">
                  <h3>노무법인 온</h3>
                  <p>www.onthehr.com</p>
                  <p>
                      <a href="#" class="btn btn-primary" role="button">사이트 보기</a>
                      <button type="button" class="modal-button">프로젝트 보기</button>
                  </p>
                </div>
                <div class="dialog dialog-close">
                    <div class="dialog-overay"></div>
                    <div class="modal-content">
                        <div class="modal-header">
                              <span class="close">&times;</span>
                              <img src="./wp-content/themes/my-theme/img/modal-bar.svg" alt="">
                        </div>
                        <div class="modal-body">
                            <div class="modal-slide">
                                <img src="./wp-content/uploads/2017/07/portfolio-on.jpg" alt="">
                            </div>
                            <div class="modal-text">
                                <div class="modal-title">
                                    <h2>노무법인 온</h2>
                                    <h4>프로젝트 노무법인 온</h4>
                                    <h4>URL onthehr.com</h4>
                                </div>
                                <div class="modal-description">
                                    <h4>주요기능</h4>
                                    <p>
                                      - 메인, 서브영역 디자인 설계<br>
                                      - 원페이지 화면전환 효과 설계<br>
                                      - 반응형 디자인
                                    </p>
                                </div>
                            </div>
                            <div class="modal-link-container">

                                  <span class="modal-left-arrow">
                                      <img src="./wp-content/themes/my-theme/img/left-arrow.svg" alt="">
                                  </span>
                                  <span class="modal-center-text">vimeo 연결을 이용한 포트폴리오 사이트</span>
                                  <span class="modal-right-arrow">
                                        <img src="./wp-content/themes/my-theme/img/right-arrow.svg" alt="">
                                  </span>
                                  <div class="modal-link">
                                      <a href="#" target="_blank">사이트 보기</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="./wp-content/uploads/2017/07/vegabond.jpg" alt="...">
                <div class="caption">
                  <h3>노무법인 온</h3>
                  <p>www.onthehr.com</p>
                  <p><a href="#" class="btn btn-primary" role="button">사이트 보기</a> <a href="#" class="btn btn-default" role="button">프로젝트 설명</a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="./wp-content/uploads/2017/07/stepizin.jpg" alt="...">
                <div class="caption">
                  <h3>노무법인 온</h3>
                  <p>www.onthehr.com</p>
                  <p><a href="#" class="btn btn-primary" role="button">사이트 보기</a> <a href="#" class="btn btn-default" role="button">프로젝트 설명</a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="./wp-content/uploads/2017/07/secondwind.jpg" alt="...">
                <div class="caption">
                  <h3>노무법인 온</h3>
                  <p>www.onthehr.com</p>
                  <p><a href="#" class="btn btn-primary" role="button">사이트 보기</a> <a href="#" class="btn btn-default" role="button">프로젝트 설명</a></p>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src="./wp-content/uploads/2017/07/wpjakedemo.com_.jpg" alt="...">
                <div class="caption">
                  <h3>노무법인 온</h3>
                  <p>www.onthehr.com</p>
                  <p><a href="#" class="btn btn-primary" role="button">사이트 보기</a> <a href="#" class="btn btn-default" role="button">프로젝트 설명</a></p>
                </div>
              </div>
            </div>

    </article>

    <article class="contact"></article>

<?php get_footer(); ?>
