jQuery(function($) {
  const $form   = $('form').first();               // このフォーム全体
  const $submit = $('.contact__submit').first();   // 送信ボタン

  // --- フラグ管理 ---
  let submitTried = false;      // 送信を試みたか
  let suppressOnce = true;      // 初回だけエラー表示を抑制

  // 初期状態で送信ボタンは無効化
  disableSubmit(true);

  // ========== 汎用: エラー表示ユーティリティ ==========
  function setError($container, message) {
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
  function groupOf($input) {
    if ($input.closest('.contact__group').length) return $input.closest('.contact__group');
    if ($input.closest('.contact__field-group').length) return $input.closest('.contact__field-group');
    if ($input.closest('.contact__group--job').length) return $input.closest('.contact__group--job');
    if ($input.closest('.contact__group--agree').length) return $input.closest('.contact__group--agree');
    return $input.parent(); // フォールバック
  }

  // 「今、この項目にエラーを表示すべきか？」を判定
  function shouldShowError($el) {
    return submitTried || $el.data('touched') === true;
  }
  // エラーメッセージとクラスの適用（表示条件を内部で管理）
  function applyFeedback($el, isValid, message, $groupOverride) {
    const $g = $groupOverride || groupOf($el);
    const show = shouldShowError($el) && !suppressOnce;
    markInvalid($el, !isValid && show);
    if (show) {
      setError($g, isValid ? '' : message);
    } else {
      // 非表示時は一旦消しておく（視覚ノイズ防止）
      setError($g, '');
      markInvalid($el, false);
    }
  }

  // ========== 各項目のバリデーション ==========
  function validateName() {
    const $el = $('#contact-name');
    const val = $.trim($el.val());
    const ok  = !!val;
    applyFeedback($el, ok, 'お名前を入力してください。');
    return ok;
  }

  function validateKana() {
    const $el = $('#contact-kana');
    const val = $.trim($el.val());
    const katakanaRe = /^[\u30A0-\u30FF\u3000\sー]+$/;
    const ok = !!val && katakanaRe.test(val);
    applyFeedback(
      $el,
      ok,
      !val ? 'お名前カナを入力してください。' : '全角カタカナで入力してください。'
    );
    return ok;
  }

  function validateEmail() {
    const $dom = $('#contact-email')[0];
    const $el  = $('#contact-email');
    const ok   = !!$dom.value && $dom.checkValidity();
    applyFeedback(
      $el,
      ok,
      !$dom.value ? 'メールアドレスを入力してください。' : 'メールアドレスの形式が正しくありません。'
    );
    return ok;
  }

  function validateTel() {
    const $el = $('#contact-tel');
    const digits = ($el.val() || '').replace(/\D/g, '');
    const ok = !!digits && (digits.length === 10 || digits.length === 11);
    applyFeedback(
      $el,
      ok,
      !digits
        ? '電話番号を入力してください。'
        : '電話番号はハイフン有無に関わらず10〜11桁で入力してください。'
    );
    return ok;
  }

  function validateBirth() {
    const $y = $('#contact-birth-year');
    const $m = $('#contact-birth-month');
    const $d = $('#contact-birth-day');
    const $fieldset = $y.closest('.contact__field-group');

    const y = parseInt($y.val(), 10);
    const m = parseInt($m.val(), 10);
    const d = parseInt($d.val(), 10);

    const thisYear = new Date().getFullYear();
    let ok = true, msg = '';

    if (!y || String(y).length !== 4 || y < 1900 || y > thisYear) {
      ok = false; msg = '生年は西暦4桁（1900〜' + thisYear + '）で入力してください。';
    } else if (!m) {
      ok = false; msg = '月を選択してください。';
    } else if (!d) {
      ok = false; msg = '日を選択してください。';
    } else {
      const date = new Date(y, m - 1, d);
      const isValid =
        date.getFullYear() === y &&
        date.getMonth() === (m - 1) &&
        date.getDate() === d;
      if (!isValid) {
        ok = false; msg = '存在する日付を入力/選択してください。';
      }
    }

    // 代表要素を year とする（touched 判定は year に付ける）
    const $rep = $y;
    const show = shouldShowError($rep) && !suppressOnce;

    // 3つの入力のクラス付けはまとめて
    [$y, $m, $d].forEach(($el) => {
      markInvalid($el, !ok && show);
    });
    if (show) {
      setError($fieldset, ok ? '' : msg);
    } else {
      setError($fieldset, '');
      [$y, $m, $d].forEach(($el) => markInvalid($el, false));
    }

    return ok;
  }

  function validateJob() {
    const $radios = $('input[name="job"]');
    const $g = $radios.first().closest('.contact__group--job');
    const any = $('input[name="job"]:checked').length > 0;

    const $rep = $radios.first(); // 代表要素
    const show = shouldShowError($rep) && !suppressOnce;
    if (show) setError($g, any ? '' : '希望職種を選択してください。');
    else setError($g, '');
    return any;
  }

  function validatePR() {
    const $el = $('#contact-pr');
    const val = $.trim($el.val());
    const ok = !!val && val.length >= 10;
    applyFeedback(
      $el,
      ok,
      !val ? '自己PRを入力してください。' : 'もう少し詳しく（10文字以上）入力してください。'
    );
    return ok;
  }

  function validateAgree() {
    const $el = $('input[name="agree"]');
    const $g  = $el.closest('.contact__group--agree');
    const checked = $el.is(':checked');

    const show = (submitTried || $el.data('touched') === true) && !suppressOnce;
    if (show) setError($g, checked ? '' : '個人情報保護方針への同意が必要です。');
    else setError($g, '');
    return checked;
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

  // ========== touched 管理 ==========
  function markTouched($el) { $el.data('touched', true); }

  // 入力のたび即時フィードバック（blur時にも発火）＋ touched 付与
  $('#contact-name').on('input blur', function(){ markTouched($(this)); validateName(); });
  $('#contact-kana').on('input blur', function(){ markTouched($(this)); validateKana(); });
  $('#contact-email').on('input blur change', function(){ markTouched($(this)); validateEmail(); });
  $('#contact-tel').on('input blur', function(){ markTouched($(this)); validateTel(); });

  // 生年月日：いずれか触れたら代表の year に touched を付与
  $('#contact-birth-year, #contact-birth-month, #contact-birth-day').on('input change blur', function(){
    $('#contact-birth-year').data('touched', true);
    validateBirth();
  });

  $('input[name="job"]').on('change', function(){
    $('input[name="job"]').first().data('touched', true);
    validateJob();
  });

  $('#contact-pr').on('input blur', function(){ markTouched($(this)); validatePR(); });

  $('input[name="agree"]').on('change', function(){
    $(this).data('touched', true);
    validateAgree();
  });

  // 何かが変わるたび、送信ボタンの有効/無効を更新（表示抑制フラグはここでは触らない）
  $form.on('input change blur', function () {
    validateAll();
  });

  // 送信時の最終ガード（ここで以後は常にエラー表示）
  $form.on('submit', function (e) {
    submitTried = true;
    suppressOnce = false;
    if (!validateAll()) {
      e.preventDefault();
      const $firstErr = $('.input--invalid, .select--invalid').first();
      if ($firstErr.length) $firstErr.focus();
    }
  });

  // 初回評価：ボタン状態だけ更新（エラーは出さない）
  suppressOnce = true;
  validateAll();
  // 初回評価後は通常モードへ
  suppressOnce = false;
});
