![QROKO Image](https://i.gyazo.com/34e95d8b62c171cc7ed6ada24909ad66.png)

# Qroko

WordPress theme for headless CMS

## About

Qroko は WordPress を headless CMS として使いやすくするためのテーマです。Gutenberg・REST API・WPGraphQL プラグインに対応し、最低限の投稿プレビューができます。ACF や Custom Post Type UI などで API を拡張するのもオススメです。

尚、この WordPress テーマは「日本語環境で Gutenberg を使った場合に執筆が快適であること」「WordPress を headless CMS として運用し、Gatsby 等で GraphQL を用いた軽快なデータ取得ができること」を主眼として開発しています。

モチーフは歌舞伎の黒子です。Web サイト制作の舞台袖で活躍してくれることでしょう。

## Detail

- Gutenberg
- GraphQL（WPGraphQL プラグインが必要）
- REST API（遅いし負荷も大きいので GraphQL 推奨）
- 最低限のファイル構成
- 最低限の投稿プレビュー（[new.css](https://newcss.net/) を日本語用にアレンジ）
- 投稿プレビューの幅を変更する機能
- 日本語パーマリンクの生成を防ぐ機能
- ログインユーザー以外をリダイレクトする機能

## Basic Setting

1. Zip ファイルを[ダウンロード](https://github.com/qrac/qroko/archive/master.zip)
2. Zip ファイルを WordPress テーマとしてインストール＞
3. テーマ「Qroko」を有効化

## Advanced Setting

1. WP Pusher を[公式サイト](https://wppusher.com/) からダウンロード
2. WP Pusher をプラグインとしてインストール・有効化
3. WP Pusher で GitHub 上のテーマ「qrac/qroko」をインストール・有効化

## Recommended Plugins

### Official

- Admin Color Schemes ([site](https://ja.wordpress.org/plugins/admin-color-schemes/))
- Advanced Custom Fields ([site](https://ja.wordpress.org/plugins/advanced-custom-fields/))
- Custom Post Type UI ([site](https://ja.wordpress.org/plugins/custom-post-type-ui/))
- Enable Media Replace ([site](https://ja.wordpress.org/plugins/enable-media-replace/))
- FileBird Lite ([site](https://ja.wordpress.org/plugins/filebird/))
- Intuitive Custom Post Order ([site](https://ja.wordpress.org/plugins/intuitive-custom-post-order/))
- JAMstack Deployments ([site](https://ja.wordpress.org/plugins/wp-jamstack-deployments/)/[repo](https://github.com/crgeary/wp-jamstack-deployments))
- Snow Monkey Blocks ([site](https://ja.wordpress.org/plugins/snow-monkey-blocks/))
- Snow Monkey Editor ([site](https://ja.wordpress.org/plugins/snow-monkey-editor/))
- UpdraftPlus ([site](https://ja.wordpress.org/plugins/updraftplus/))
- WP Multibyte Patch ([site](https://ja.wordpress.org/plugins/wp-multibyte-patch/))

### Unfficial

- Advanced Custom Fields PRO ([site](https://www.advancedcustomfields.com/pro/))
- UpdraftPlus Premium ([site](https://updraftplus.com/shop/))
- yStandard Blocks ([site](https://wp-ystandard.com/plugins/ystandard-blocks/))
- WP Pusher ([site](https://wppusher.com/))

### GitHub Sync

- WPGraphQL ([site](https://www.wpgraphql.com/))
  - wp-graphql/wp-graphql - develop ([repo](https://github.com/wp-graphql/wp-graphql))
  - wp-graphql/wp-graphiql - master ([repo](https://github.com/wp-graphql/wp-graphiql))
  - wp-graphql/wp-graphql-custom-post-type-ui - master ([repo](https://github.com/wp-graphql/wp-graphql-custom-post-type-ui))
  - wp-graphql/wp-graphql-acf - develop ([repo](https://github.com/wp-graphql/wp-graphql-acf))
- WPGraphQL Gutenberg ([site](https://wp-graphql-gutenberg.netlify.app/))
  - pristas-peter/wp-graphql-gutenberg - develop ([repo](https://github.com/pristas-peter/wp-graphql-gutenberg))

### Customize

- Qroko My Functions ([repo](https://github.com/qrac/qroko-my-functions)/[download](https://github.com/qrac/qroko-my-functions/archive/master.zip))

## License

- Theme: Qroko - GNU General Public License v2.0 or late
- Base CSS: [new.css](https://github.com/xz/new.css) - MIT
- Image Fonts: [JetBrains Mono](https://www.jetbrains.com/lp/mono/) - Apache 2.0 license

## Credit

- Author: [Qrac](https://qrac.jp)
- Organization: [QRANOKO](https://qranoko.jp)
