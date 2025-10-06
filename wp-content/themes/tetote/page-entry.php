<?php get_header(); ?>

<main>
  <div class="contact__inner inner">
    <div class="contact__title-wrap">
      <h3 class="contact__title">
        <div class="contact__title-eng">ENTRY FORM</div>
        <div class="contact__title-ja">
          <span class="contact__title--red">新卒・中途採用</span><br class="md-none">エントリーフォーム
        </div>
      </h3>
      <p class="contact__txt">
        当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。<br>
        <span class="contact__txt--red">&#8251;</span>は必須項目になります。
      </p>
    </div>

    <div class="contact__body-wrap">
      <form class="contact" action="#" method="post" novalidate>

        <!-- 氏名 -->
        <div class="contact__group">
          <label class="contact__label" for="contact-name">
            お名前<span class="contact__txt--red">&#8251;</span>
          </label>
          <input
            class="contact__input input--appearence sp--md10"
            type="text"
            id="contact-name"
            name="name"
            placeholder="例:山田太郎"
            autocomplete="name"
            required
          />
        </div>

        <!-- 氏名カナ -->
        <div class="contact__group">
          <label class="contact__label" for="contact-kana">
            お名前カナ<span class="contact__txt--red">&#8251;</span>
          </label>
          <input
            class="contact__input input--appearence sp--md10"
            type="text"
            id="contact-kana"
            name="kana"
            inputmode="kana"
            placeholder="例:ヤマダタロウ"
            required
          />
        </div>

        <!-- メール -->
        <div class="contact__group">
          <label class="contact__label" for="contact-email">
            メールアドレス<span class="contact__txt--red">&#8251;</span>
          </label>
          <input
            class="contact__input input--appearence sp--md10"
            type="email"
            id="contact-email"
            name="email"
            placeholder="例:tetote@gmail.com"
            autocomplete="email"
            required
          />
        </div>

        <!-- 電話 -->
        <div class="contact__group">
          <label class="contact__label" for="contact-tel">
            電話番号<span class="contact__txt--red">&#8251;</span>
          </label>
          <input
            class="contact__input input--appearence sp--md10"
            type="tel"
            id="contact-tel"
            name="tel"
            autocomplete="tel"
            inputmode="tel"
            placeholder="000-0000-0000"
            required
          />
        </div>

        <!-- 生年月日 -->
        <fieldset class="contact__field-group">
          <label class="contact__label">
            生年月日<span class="contact__txt--red">&#8251;</span>
          </label>

          <div class="contact__birth-wrap">
            <!-- 年 -->
            <div class="contact__field contact__field--year sp--md10">
              <div class="contact__input-wrap">
                <input
                  class="contact__input contact__input--year input--appearence"
                  type="text"
                  id="contact-birth-year"
                  name="birth_year"
                  inputmode="numeric"
                  pattern="\d{4}"
                  placeholder="例：2000"
                  aria-label="生年(西暦4桁)"
                  required
                />
              </div>
              <span class="contact__suffix">年</span>
            </div>

            <div class="contact__field-wrap">
              <!-- 月 -->
              <div class="contact__field contact__field--month">
                <div class="contact__select-wrap">
                  <select
                    class="contact__select contact__select--month input--appearence"
                    id="contact-birth-month"
                    name="birth_month"
                    required
                  >
                    <option value="" hidden>選択してください</option>
                    <?php for ($i = 1; $i <= 12; $i++) : ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <span class="contact__suffix">月</span>
              </div>

              <!-- 日 -->
              <div class="contact__field contact__field--day">
                <div class="contact__select-wrap">
                  <select
                    class="contact__select contact__select--day input--appearence"
                    id="contact-birth-day"
                    name="birth_day"
                    required
                  >
                    <option value="" hidden>選択してください</option>
                    <?php for ($i = 1; $i <= 31; $i++) : ?>
                      <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
                <span class="contact__suffix">日</span>
              </div>
            </div>
          </div>
        </fieldset>

        <!-- 希望職種 -->
        <fieldset class="contact__group contact__group--job">
          <div class="contact__label">
            希望職種<span class="contact__txt--red">&#8251;</span>
          </div>

          <ul class="contact__choice-list sp--md10" role="list">
            <li class="contact__choice">
              <label class="contact__radio-label label--click-area _round">
                <input
                  class="contact__radio"
                  type="radio"
                  name="job"
                  value="consultant"
                  required
                />
                コンサルタント
              </label>
            </li>
            <li class="contact__choice">
              <label class="contact__radio-label label--click-area _round">
                <input
                  class="contact__radio"
                  type="radio"
                  name="job"
                  value="solution-sales"
                  required
                />
                ソリューション営業
              </label>
            </li>
            <li class="contact__choice">
              <label class="contact__radio-label label--click-area _round">
                <input
                  class="contact__radio"
                  type="radio"
                  name="job"
                  value="system-engineer"
                  required
                />
                システムエンジニア
              </label>
            </li>
          </ul>
        </fieldset>

        <!-- 自己PR -->
        <div class="contact__group contact__group--pr">
          <label class="contact__label" for="contact-pr">
            自己PR<span class="contact__txt--red">&#8251;</span>
          </label>
          <textarea
            class="contact__textarea contact__textarea--pr input--appearence sp--md10"
            id="contact-pr"
            name="pr"
            rows="8"
            placeholder="例：志望動機、自己PR"
            required
          ></textarea>
        </div>

        <!-- きっかけ -->
        <fieldset class="contact__group contact__group--known">
          <div class="contact__label">当社を知ったきっかけを教えて下さい。</div>

          <ul class="contact__choice-list sp--md10" role="list">
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="x" />
                X(旧Twitter)
              </label>
            </li>
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="facebook" />
                Facebook
              </label>
            </li>
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="instagram" />
                Instagram
              </label>
            </li>
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="search" />
                検索広告
              </label>
            </li>
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="friends" />
                知人友人・親戚
              </label>
            </li>
            <li class="contact__choice _square">
              <label class="contact__checkbox-label label--click-area">
                <input class="contact__checkbox" type="checkbox" name="known[]" value="other" />
                その他
              </label>
            </li>
          </ul>
        </fieldset>

        <!-- 同意 -->
        <div class="contact__group--agree">
          <label class="contact__agree-label label--click-area">
            <input
              class="contact__checkbox-input"
              type="checkbox"
              name="agree"
              value="1"
              required
            />
            個人情報保護方針に同意する
          </label>
        </div>

        <!-- 送信 -->
        <div class="contact__actions">
          <button class="contact__submit" type="submit">送信する</button>
        </div>
      </form>
    </div>
  </div>
</main>

<?php get_footer(); ?>
