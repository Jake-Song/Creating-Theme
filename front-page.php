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
      <div class="col-sm-12 col-md-6">
        <div class="left">
          <?php echo file_get_contents( "./wp-content/themes/my-theme/img/laptop-icon.svg" ); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">

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
