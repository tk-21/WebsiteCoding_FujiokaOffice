<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="fv-service">
      <div class="page-name"><?php the_title(); ?></div>
    </section>

    <section class="service-content">
      <div class="service-content-inner">
        <ol class="content-list">
          <li class="content-list-item">
            <div class="service-desc">
              <div class="list-ttl">
                <p class="num">#01</p>
                <h2>IT法務</h2>
              </div>
              <div class="body">
                <p class="first-child">
                  IT関連の契約書には紛争を予防するための「予防法務」としてとても大きな役割があり、サービスの内容をよく理解した上で作成をする必要があります。<br />
                  また知的財産権の管理など一般的な契約書とは違った内容を盛り込むことも必要です。
                </p>
                <p>
                  当事務所ではweb業界に8年間身を置き、webサイトの制作·会員管理システムの運用·新規webサービスの立ち上げに従事した経験を持つ行政書士が契約書のチェック·作成をお手伝いいたします。
                </p>
              </div>
            </div>
            <div class="service-menu">
              <p class="service-menu-ttl">ご用意するサービス</p>
              <ul>
                <li>IT法務顧問サービス<br class="sp-br" />（月5,000円～）</li>
                <li>契約書リスク診断</li>
                <li>契約書ドラフト作成</li>
                <li>IT法務研修など</li>
              </ul>
              <a href="<?php bloginfo('url'); ?>/price" class="detail-btn">料金ページへ</a>
            </div>
          </li>
          <li class="content-list-item">
            <div class="service-desc">
              <div class="list-ttl">
                <p class="num">#02</p>
                <h2>ビザ申請業務</h2>
              </div>
              <div class="body">
                <p>
                  数多くの外国人IT技術者の在留資格申請業務に従事した経験を元に、<br />
                  当事務所では在留資格、永住申請・定住申請・帰化申請などの手続きを行ってまいります。<br />
                  優秀な外国人IT技術者を受け入れ、業界のサービス向上の一助ができるようサポートいたします。
                </p>
              </div>
            </div>
            <div class="service-menu">
              <p class="service-menu-ttl">ご用意するサービス</p>
              <ul>
                <li>ビザ取得・更新</li>
                <li>永住許可</li>
                <li>帰化申請</li>
                <li>国籍取得など</li>
              </ul>
              <a href="<?php bloginfo('url'); ?>/price" class="detail-btn">料金ページへ</a>
            </div>
          </li>
          <li class="content-list-item">
            <div class="service-desc">
              <div class="list-ttl">
                <p class="num">#03</p>
                <h2>民泊申請</h2>
              </div>
              <div class="body">
                <p>
                  住宅宿泊事業法（いわゆる民泊新法）が2018年6月15日に施行されます。<br />
                  年々増加する訪日外国人旅行者の宿泊の受け皿として、今後民泊は全国で解禁され、各地で営業が行われます。<br />
                  2020年の東京オリンピック開催に向けてますます広がっていく民泊。<br />
                  当事務所では最新のwebサービスでもある民泊の普及に注力します。<br />
                  民泊登録の申請（住宅宿泊事業届等）をサポートし、民泊仲介サイトへの登録や情報提供などでお手伝いをいたします。
                </p>
              </div>
            </div>
            <div class="service-menu-03">
              <p class="service-menu-txt">
                色々なご提案ができます。<br />
                直接当社までお問い合わせください
              </p>
              <a href="<?php bloginfo('url'); ?>/contact" class="detail-btn">お問い合わせ</a>
            </div>
          </li>
        </ol>
      </div>
    </section>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>