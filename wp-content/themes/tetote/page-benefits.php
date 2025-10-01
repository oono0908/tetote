<?php get_header(); ?>
<main>
  <section class="benefits">
    <div class="benefits__inner inner">
      <h3 class="table-title">各種制度</h3>
      <table class="table" role="presentation">
        <tbody>
          <tr class="table__row">
            <td class="table__head">手当</td>
            <td class="table__data">
              <ul class="table__bullets">
                <li>&bull; 通勤手当（上限月5万円）</li>
                <li>&bull; 時間外割増手当</li>
                <li>&bull; 役職手当</li>
                <li>&bull; 退職金</li>
              </ul>
            </td>
          </tr>

          <tr class="table__row">
            <td class="table__head">制度</td>
            <td class="table__data">財形貯蓄</td>
          </tr>

          <tr class="table__row">
            <td class="table__head">保険</td>
            <td class="table__data">社会保険完備</td>
          </tr>

          <tr class="table__row">
            <td class="table__head">施設</td>
            <td class="table__data">
              <ul class="table__bullets">
                <li>&bull; 社員向けジム</li>
                <li>&bull; 社内託児所</li>
              </ul>
            </td>
          </tr>

          <tr class="table__row">
            <td class="table__head">休暇・休日</td>
            <td class="table__data">
              <ul class="table__bullets">
                <li>&bull; 完全週休2日制</li>
                <li>&bull; 年次有給休暇（初年度10日／年度途中入社は比例付与）</li>
                <li>&bull; 年末年始休暇（12月29日〜1月3日：6日間）</li>
                <li>&bull; 夏季休暇（6月〜9月中：5日間）</li>
                <li>&bull; 慶弔休暇</li>
                <li>&bull; 産前産後休暇</li>
                <li>&bull; リフレッシュ休暇（3年勤務で5日／以降5年勤務ごとに5日支給）</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
      <section class="benefits__container">
        <h2 class="benefits__title">制度利用者の声</h2>
          <ul class="benefits__items">
            <li class="benefits__item item">
              <div class="item__year">2013年入社</div>
              <div class="item__name">堀内 優</div>
              <div class="item__txt">資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。
              この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。
              会社が成長を支援してくれるので、安心して仕事に取り組むことができます。</div>
            </li>
             <li class="benefits__item item">
              <div class="item__year">2015年入社</div>
              <div class="item__name">神凪 理沙</div>
              <div class="item__txt">出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。
              特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。
              今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。</div>
            </li>
          </ul>
          <div class="benefits__img-wrap">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/benefits/benefits-page-img.jpg')); ?>" alt="" class="benefits__img">
          </div>
      </section>
    </div>
  </section>
</main>
<?php get_footer(); ?>
