<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="fv">
      <div class="page-name"><?php the_title(); ?></div>
      <ul class="price-nav">
        <li><a href="#01">法務</a></li>
        <li><a href="#02">ビザ申請業務</a></li>
        <li><a href="#03">民泊申請</a></li>
      </ul>
    </section>

    <section class="price">
      <div class="price-inner">
        <ol>
          <li id="01">
            <div class="list-ttl">
              <p class="num">#01</p>
              <h2>IT法務</h2>
            </div>
            <dl>
              <dt>IT法務顧問</dt>
              <dd>
                IT法務顧問など継続的にリーガルチェック、法務サポートを行います。
              </dd>
              <dd class="table-01">
                <table class="table-01-inner">
                  <thead>
                    <tr>
                      <th>業務内容</th>
                      <th>報酬額</th>
                      <th>備考</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="navy-line">
                      <td class="navy"></td>
                      <td class="navy"></td>
                      <td class="navy"></td>
                    </tr>
                    <tr>
                      <td>
                        IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                      </td>
                      <td>
                        IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                      </td>
                      <td>
                        IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </dd>
              <dt class="training">研修</dt>
              <dd class="training-desc">
                企業研修を実施いたします。教育内容などご相談に応じます。
              </dd>
            </dl>
          </li>
          <li id="02">
            <div class="list-ttl">
              <p class="num">#02</p>
              <h2>ビザ申請業務</h2>
            </div>
            <p class="desc-02">
              IT法務顧問継続的にリーガルチェック、法務サポートを行います。
            </p>
            <div class="table-02">
              <table class="table-02-inner">
                <thead>
                  <tr>
                    <th>業務内容</th>
                    <th>報酬額</th>
                    <th>備考</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="navy-line">
                    <td class="navy"></td>
                    <td class="navy"></td>
                    <td class="navy"></td>
                  </tr>
                  <tr>
                    <td>
                      IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                    </td>
                    <td>
                      IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                    </td>
                    <td>
                      IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。IT法務顧問継続的にリーガルチェック、法務サポートを行います。
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
          <li id="03">
            <div class="list-ttl">
              <p class="num">#03</p>
              <h2>民泊業務</h2>
            </div>
            <dl class="content-03">
              <dt>住宅宿泊事業届等の申請</dt>
              <dd class="desc-03">
                色々なご提案ができます。直接当社までお問い合わせください直接お問い合わせください
              </dd>
            </dl>
          </li>
        </ol>
      </div>
    </section>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>