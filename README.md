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
- 最低限の投稿プレビュー
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
4. WP Pusher で GitHub 上のプラグイン「wp-graphql/wp-graphql」のブランチ「develop」をインストール・有効化
5. WP Pusher で GitHub 上のプラグイン「wp-graphql/wp-graphiql」をインストール・有効化
6. WP Pusher で GitHub 上のプラグイン「pristas-peter/wp-graphql-gutenberg」のブランチ「develop」をインストール・有効化
7. WordPress 管理画面の「GraphQL Gutenberg」で「Update block registry」を Update
8. WordPress 管理画面の「Graphiql」で blocks のデータが取得できるか確認

- [WP Pusher](https://wppusher.com/)
- [WPGraphQL](https://www.wpgraphql.com/)
  - [GitHub | wp-graphql/wp-graphql](https://github.com/wp-graphql/wp-graphql)
  - [GitHub | wp-graphql/wp-graphiql](https://github.com/wp-graphql/wp-graphiql)
- [WpGraphQL Gutenberg](https://wp-graphql-gutenberg.netlify.app/)
  - [GitHub | pristas-peter/wp-graphql-gutenberg](https://github.com/pristas-peter/wp-graphql-gutenberg)

## License

- GNU General Public License v2.0 or late (100% GPL)

## Credit

- Author: [Qrac](https://qrac.jp)
- Organization: [QRANOKO](https://qranoko.jp)
