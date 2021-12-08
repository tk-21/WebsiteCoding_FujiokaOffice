<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="fv-about">
      <div class="page-name"><?php the_title(); ?></div>
    </section>

    <section class="about-concept">
      <div class="about-concept-inner">
        <div class="concept-lead">
          <h2>Support your<br />web service</h2>
          <p>
            webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします。
          </p>
        </div>
        <h3>
          制作会社での経歴を活かした<br class="sp-br" />ご提案ができます
        </h3>
        <div class="concept-content">
          <div class="txt txt-left">
            <p>
              私はこれまでにIT系企業においてweb制作、新規webサービスの立ち上げ、ファンクラブビジネスを経験し「webが持つ可能性」を信じるようになりました。<br />
              「webが持つ可能性」とはwebを通して人々の心や生活がもっと豊かになっていくことです。
            </p>
            <p>
              当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
            </p>
          </div>
          <div class="txt">
            <p>
              書類作成など法律面からあなたのwebサービスのサポートをします。<br />
              新たなwebサービスが生まれ、そのサービスを利用することで多くの人々の心や生活が豊かになる。<br />
              そしていつか日本が世界のIT分野をリードする日がくることを願っています。
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="office-data">
      <div class="office-data-inner">
        <h2 class="sp-ttl">Office data</h2>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="" />
        </figure>
        <div class="office-data-body">
          <h2 class="pc-ttl">Office data</h2>
          <dl>
            <dt>名称：</dt>
            <dd>藤岡行政書士事務所</dd>
            <dt>代表：</dt>
            <dd>藤岡雅也</dd>
            <dt>行政書士番号:</dt>
            <dd>0000000000000</dd>
            <dt>取り扱い案件:</dt>
            <dd>労務、民泊、Visa</dd>
            <dt>電話番号:</dt>
            <dd>06-5555-5555</dd>
            <dt>FAX:</dt>
            <dd>06-5555-5555</dd>
            <dt>住所</dt>
          </dl>
        </div>
      </div>
    </section>

    <div id="about-map"></div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>