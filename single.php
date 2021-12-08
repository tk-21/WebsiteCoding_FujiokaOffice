<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-detail">
      <div class="blog-detail-inner">
        <h1><?php the_title(); ?></h1>
        <figure class="img-wrapper">
          <?php the_post_thumbnail(); ?>
        </figure>
        <?php the_content(); ?>
      </div>
    </article>
<?php endwhile;
endif; ?>

<section class="sns">
  <div class="sns-inner">
    <figure>
      <img src="<?php echo get_template_directory_uri(); ?>/img/card-1.png" alt="" />
    </figure>
    <ul class="sns-list">
      <li>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" rel="nofollow" target="_blank">
          Facebookでシェアする</a>
      </li>
      <li>
        <a href="http://twitter.com/share?text=<?php echo   urlencode(the_title_attribute('echo=0')); ?>&
              url=<?php the_permalink(); ?>&
              hashtags=【ハッシュタグ（複数あるときはカンマ区切り）】" rel="nofollow" target="_blank">
          Twitterで<br class="sp-br" />この記事をつぶやく</a>
      </li>
    </ul>
  </div>
</section>

<article class="recent-articles">
  <div class="recent-articles-inner">
    <h2>最近の記事</h2>
    <ul class="blog-card-wrapper">
      <?php
      $args = array(
        'posts_per_page' => 3 // 表示件数の指定
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : // ループの開始
        setup_postdata($post); // 記事データの取得
      ?>
        <?php get_template_part('template-parts/loop', 'blogs'); ?>
      <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
      ?>
    </ul>
  </div>
</article>
<?php get_footer(); ?>