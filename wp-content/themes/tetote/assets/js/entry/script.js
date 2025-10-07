
jQuery(function($) {
  const $form   = $('form').first();               // このフォーム全体
  const $submit = $('.contact__submit').first();   // 送信ボタン

  // 初期状態で送信ボタンは無効化
  disableSubmit(true);

  // ========== 汎用: エラー表示ユーティリティ ==========
  function setError($container, message) {
    // 既存のエラー消去
    $container.find('.form-error').remove();
    if (message) {
      $('<p class="form-error" role="alert" aria-live="polite"></p>')
        .text(message)
        .appendTo($container);
    }
  }
  function markInvalid($el, invalid) {
    const cls = ($el.is('select') ? 'select--invalid' : 'input--invalid');
    $el.toggleClass(cls, !!invalid);
  }

  // 各フィールドの“直下”にエラーを置くためのコンテナ取得
  function groupOf($input) {
    // 既存のマークアップに合わせて分岐
    if ($input.closest('.contact__group').length) return $input.closest('.contact__group');
    if ($input.closest('.contact__field-group').length) return $input.closest('.contact__field-group');
    if ($input.closest('.contact__group--job').length) return $input.closest('.contact__group--job');
    if ($input.closest('.contact__group--agree').length) return $input.closest('.contact__group--agree');
    return $input.parent(); // フォールバック
  }

  // ========== 各項目のバリデーション ==========
  function validateName() {
    const $el = $('#contact-name');
    const val = $.trim($el.val());
    const $g  = groupOf($el);

    if (!val) {
      markInvalid($el, true);
      setError($g, 'お名前を入力してください。');
      return false;
    }
    markInvalid($el, false);
    setError($g, '');
    return true;
  }

  function validateKana() {
    const $el = $('#contact-kana');
    const val = $.trim($el.val());
    const $g  = groupOf($el);
    // 全角カタカナ・スペース・長音（ー）を許容
    const katakanaRe = /^[\u30A0-\u30FF\u3000\sー]+$/;

    if (!val) {
      markInvalid($el, true);
      setError($g, 'お名前カナを入力してください。');
      return false;
    }
    if (!katakanaRe.test(val)) {
      markInvalid($el, true);
      setError($g, '全角カタカナで入力してください。');
      return false;
    }
    markInvalid($el, false);
    setError($g, '');
    return true;
  }

  function validateEmail() {
    const $el = $('#contact-email')[0]; // DOM要素（HTML5のvalidityを活用）
    const $jq = $('#contact-email');
    const $g  = groupOf($jq);

    if (!$el.value) {
      markInvalid($jq, true);
      setError($g, 'メールアドレスを入力してください。');
      return false;
    }
    if (!$el.checkValidity()) {
      markInvalid($jq, true);
      setError($g, 'メールアドレスの形式が正しくありません。');
      return false;
    }
    markInvalid($jq, false);
    setError($g, '');
    return true;
  }

  function validateTel() {
    const $el = $('#contact-tel');
    const val = $el.val();
    const $g  = groupOf($el);

    const digits = (val || '').replace(/\D/g, ''); // 数字だけ
    if (!digits) {
      markInvalid($el, true);
      setError($g, '電話番号を入力してください。');
      return false;
    }
    // 固定/携帯いずれも10〜11桁を想定
    if (!(digits.length === 10 || digits.length === 11)) {
      markInvalid($el, true);
      setError($g, '電話番号はハイフン有無に関わらず10〜11桁で入力してください。');
      return false;
    }
    markInvalid($el, false);
    setError($g, '');
    return true;
  }

  function validateBirth() {
    const $y = $('#contact-birth-year');
    const $m = $('#contact-birth-month');
    const $d = $('#contact-birth-day');
    const $g = $y.closest('.contact__field-group'); // 生年月日フィールドセット

    const y = parseInt($y.val(), 10);
    const m = parseInt($m.val(), 10);
    const d = parseInt($d.val(), 10);

    // 年の基本チェック
    const limitedYear = 2050
    if (!y || String(y).length !== 4 || y < 1900 || y > limitedYear) {
      markInvalid($y, true); markInvalid($m, false); markInvalid($d, false);
      setError($g, '生年は西暦4桁（1900〜' + limitedYear + '）で入力してください。');
      return false;
    }
    if (!m) {
      markInvalid($y, false); markInvalid($m, true); markInvalid($d, false);
      setError($g, '月を選択してください。');
      return false;
    }
    if (!d) {
      markInvalid($y, false); markInvalid($m, false); markInvalid($d, true);
      setError($g, '日を選択してください。');
      return false;
    }
    // 実在日付チェック
    const date = new Date(y, m - 1, d);
    const isValid =
      date.getFullYear() === y &&
      date.getMonth() === (m - 1) &&
      date.getDate() === d;

    if (!isValid) {
      markInvalid($y, true); markInvalid($m, true); markInvalid($d, true);
      setError($g, '存在する日付を入力/選択してください。');
      return false;
    }
    markInvalid($y, false); markInvalid($m, false); markInvalid($d, false);
    setError($g, '');
    return true;
  }

  function validateJob() {
    const $radios = $('input[name="job"]');
    const $g = $radios.first().closest('.contact__group--job');

    if ($('input[name="job"]:checked').length === 0) {
      setError($g, '希望職種を選択してください。');
      return false;
    }
    setError($g, '');
    return true;
  }

  function validatePR() {
    const $el = $('#contact-pr');
    const val = $.trim($el.val());
    const $g  = groupOf($el);

    if (!val) {
      markInvalid($el, true);
      setError($g, '自己PRを入力してください。');
      return false;
    }
    // 使いやすさのため、最低文字数の軽いガイド（任意調整可）
    if (val.length < 10) {
      markInvalid($el, true);
      setError($g, 'もう少し詳しく（10文字以上）入力してください。');
      return false;
    }
    markInvalid($el, false);
    setError($g, '');
    return true;
  }

  function validateAgree() {
    const $el = $('input[name="agree"]');
    const $g  = $el.closest('.contact__group--agree');

    if (!$el.is(':checked')) {
      setError($g, '個人情報保護方針への同意が必要です。');
      return false;
    }
    setError($g, '');
    return true;
  }

  // ========== フォーム全体の判定 ==========
  function validateAll() {
    const results = [
      validateName(),
      validateKana(),
      validateEmail(),
      validateTel(),
      validateBirth(),
      validateJob(),
      validatePR(),
      validateAgree()
    ];
    const ok = results.every(Boolean);
    disableSubmit(!ok);
    return ok;
  }

  function disableSubmit(disabled) {
    $submit.prop('disabled', !!disabled).attr('aria-disabled', !!disabled);
  }

  // ========== イベント束ね ==========
  // 入力のたび即時フィードバック（blur時にも発火）
  $('#contact-name').on('input blur', validateName);
  $('#contact-kana').on('input blur', validateKana);
  $('#contact-email').on('input blur change', validateEmail);
  $('#contact-tel').on('input blur', validateTel);

  $('#contact-birth-year').on('input blur', validateBirth);
  $('#contact-birth-month, #contact-birth-day').on('change blur', validateBirth);

  $('input[name="job"]').on('change', validateJob);
  $('#contact-pr').on('input blur', validatePR);
  $('input[name="agree"]').on('change', validateAgree);

  // 何かが変わるたび、送信ボタンの有効/無効を更新
  $form.on('input change blur', function () {
    validateAll();
  });

  // 送信時の最終ガード
  $form.on('submit', function (e) {
    if (!validateAll()) {
      e.preventDefault();
      // 最初のエラーへフォーカス
      const $firstErr = $('.input--invalid, .select--invalid').first();
      if ($firstErr.length) $firstErr.focus();
    }
  });

  // 初回評価
  validateAll();
});