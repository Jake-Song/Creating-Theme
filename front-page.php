<?php get_header( 'home' ); ?>

      <div class="portfolio-outter-box">
        <div class="portfolio-box">
          <h2>포트폴리오</h2>
          <h5>사이트 모음</h5>
        </div>
      </div>
    <article class="portfolio">

        <?php for( $i =0; $i < 6; $i++ ) :?>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>
        </div>

        <?php endfor; ?>

    </article>

    <div class="video">
      <h2 class="text-center">동영상</h2>
      <div class="col-sm-12 col-md-12">
        <div class="video-content">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/1KV5kUkfdOM" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="contact"></div>

<?php get_footer(); ?>
