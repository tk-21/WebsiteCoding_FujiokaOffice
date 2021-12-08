<?php get_header(); ?>
<section class="fv-top">
  <ul class="slider">
    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv-1.png" alt="" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv-2.png" alt="" /></li>
    <li><img src="<?php echo get_template_directory_uri(); ?>/img/fv-3.png" alt="" /></li>
  </ul>
  <div class="main-copy">
    <figure class="en-copy"><img src="<?php echo get_template_directory_uri(); ?>/img/en-copy.svg" alt="" /></figure>
    <p class="jp-copy">
      IT専門の行政書士たちが、<br class="sp-br" />あなたのビジネスを守ります。
    </p>
  </div>
</section>

<div class="news-concept">
  <section class="news-pc">
    <h2>Latest news</h2>
    <?php
    $arg = array(
      'posts_per_page' => 3, // 表示する件数
      'orderby' => 'date', // 日付でソート
      'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
      'category_name' => 'お知らせ' // 表示したいカテゴリーのスラッグを指定
    );
    $my_posts = get_posts($arg);
    if ($my_posts) : ?>
      <ul>
        <?php
        foreach ($my_posts as $post) :
          setup_postdata($post); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <time class="news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              <p class="ttl">
                <?php the_title(); ?>
              </p>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php
    endif;
    wp_reset_postdata();
    ?>
  </section>

  <section class="news-sp">
    <div class="news-sp-inner">
      <h2>NEWS</h2>
      <?php
      $arg = array(
        'posts_per_page' => 3, // 表示する件数
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'category_name' => 'お知らせ' // 表示したいカテゴリーのスラッグを指定
      );
      $my_posts = get_posts($arg);
      if ($my_posts) : ?>
        <ul>
          <?php
          foreach ($my_posts as $post) :
            setup_postdata($post); ?>
            <li>
              <a href="<?php the_permalink(); ?>">
                <time class="news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <p class="ttl">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <div class="news-sp-line"></div>
  </section>

  <section class="concept">
    <h2>
      webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。
    </h2>
    <p>
      当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
    </p>
  </section>
</div>

<section class="service">
  <div class="inner">
    <h2 class="section-ttl">SERVICE</h2>
    <ol class="service-card-wrapper">
      <li>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/card-1.png" alt="" />
        </figure>
        <div class="card-body">
          <div class="card-ttl">
            <p class="number">#01</p>
            <h3>IT法務</h3>
          </div>
          <p class="card-txt">
            簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な
          </p>
        </div>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/card-2.png" alt="" />
        </figure>
        <div class="card-body">
          <div class="card-ttl">
            <p class="number">#02</p>
            <h3>入管業務</h3>
          </div>
          <p class="card-txt">
            簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な
          </p>
        </div>
      </li>
      <li>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/card-3.png" alt="" />
        </figure>
        <div class="card-body">
          <div class="card-ttl">
            <p class="number">#03</p>
            <h3>民泊申請</h3>
          </div>
          <p class="card-txt">
            簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な説明簡単な
          </p>
        </div>
      </li>
    </ol>
    <a href="<?php bloginfo('url'); ?>/service" class="detail-btn">詳しく見る</a>
  </div>
</section>

<div class="line"></div>

<article class="top-blog">
  <div class="inner">
    <h2 class="section-ttl">BLOG</h2>
    <ul class="blog-card-wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part('template-parts/loop', 'blogs'); ?>
      <?php endwhile;
      endif; ?>
    </ul>
    <a href="<?php bloginfo('url'); ?>/blogs" class="detail-btn">一覧を見る</a>
  </div>
</article>

<div id="map"></div>
<?php get_footer(); ?>