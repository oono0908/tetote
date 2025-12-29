# tetote - WordPressテーマ

tetoteのコーポレートサイト用カスタムテーマ

## 📁 プロジェクト構成

```
tetote/
├── assets/          # ビルド後のファイル（本番用）
│   ├── css/        # コンパイル済みCSS
│   ├── images/     # 最適化済み画像
│   └── js/         # JavaScriptファイル
├── src/            # ソースファイル
│   ├── sass/       # Sassファイル（SCSS）
│   ├── images/     # 画像ファイル（最適化前）
│   └── js/         # JavaScriptファイル
├── parts/          # テンプレートパーツ
├── *.php           # WordPressテンプレートファイル
└── gulpfile.js     # Gulpビルド設定
```

## 🛠 技術スタック

- **CMS**: WordPress
- **タスクランナー**: Gulp 5.0
- **CSSプリプロセッサ**: Sass (SCSS)
- **JavaScript**: jQuery
- **スライダー**: Swiper.js v8
- **画像最適化**: mozjpeg, optipng
- **ベンダープレフィックス**: Autoprefixer

## 🚀 セットアップ

### 必要な環境

- Node.js
- npm

### インストール

```bash
# 依存パッケージのインストール
npm install
```

## 📝 開発コマンド

```bash
# 監視モード（Sass、JS、画像を自動コンパイル）
gulp

# 個別タスク実行
gulp sass    # Sassのコンパイル
gulp img     # 画像の最適化
gulp js      # JavaScriptのコピー
```

## 📄 主要ページテンプレート

- `front-page.php` - トップページ
- `home.php` - ブログ一覧
- `page-about.php` - 会社概要
- `page-benefits.php` - 福利厚生
- `page-career.php` - 採用情報
- `page-details.php` - 詳細ページ
- `page-entry.php` - エントリーフォーム
- `page-faq.php` - よくある質問
- `archive-staff.php` - スタッフ一覧
- `single-staff.php` - スタッフ詳細
- `single.php` - ブログ記事詳細

## 🎨 Sass構成

```
src/sass/
├── about/       # 会社概要ページ
├── base/        # ベーススタイル
├── benefits/    # 福利厚生ページ
├── blog/        # ブログページ
├── career/      # 採用情報ページ
├── common/      # 共通スタイル
├── details/     # 詳細ページ
├── entry/       # エントリーフォーム
├── faq/         # FAQページ
├── gloval/      # グローバルスタイル
├── layout/      # レイアウト
├── parts/       # パーツ
├── staff/       # スタッフページ
└── top/         # トップページ
```

## ⚙️ ビルド設定

### Sass
- **出力形式**: expanded
- **対応ブラウザ**:
  - シェア10%以上
  - 最新2バージョン

### 画像最適化
- **JPEG**: mozjpeg (品質85, プログレッシブ)
- **PNG**: optipng (最適化レベル5)

## 📦 カスタム投稿タイプ

- **staff** - スタッフ紹介

## 📌 バージョン

- **Version**: 1.0.1
- **Author**: shinichiro

## 📄 ライセンス

ISC
