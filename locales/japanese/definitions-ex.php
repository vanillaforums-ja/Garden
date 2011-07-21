<?php if (!defined('APPLICATION')) exit();
/*
これは Vanilla 日本語版の独自拡張用の日本語言語ファイルです。
本家のコア パッケージをお使いの場合、このファイルは必要ありません。
以下のパスに配置してください。

    /locales/japanese/definitions-ex.php

最終対応バージョン: 2.0.18b2
*/


/** Vanilla 日本語版の独自拡張に対応する翻訳定義です。本家のコア パッケージをお使いの場合、このファイルは必要ありません。 **/

// For overwritten validate function
$Definition['ValidateUsername'] = 'ユーザー名には 1～20 文字の英数字と日本語を使用できます。<br />記号はナカグロ・長音・イコール（全角のみ）、アンダースコア・ハイフン（全半角）のみ使用できます。';
$Definition['UsernameError'] = 'ユーザー名には 1～20 文字の英数字と日本語を使用できます。<br />記号はナカグロ・長音・イコール（全角のみ）、アンダースコア・ハイフン（全半角）を使用できます。';

// Installer
$Definition['Version 2 Installer'] = 'バージョン 2 インストーラ';
$Definition['Database Host'] = 'データベースのホスト名';
$Definition['Database Name'] = 'データベース名 <span style="font-size:13px;">※ あらかじめ作成しておく必要があります。</span>';
$Definition['Database User'] = 'データベースのユーザー名';
$Definition['Database Password'] = 'データベースユーザのパスワード';
$Definition['You are missing Vanilla\'s .htaccess file.'] = 'Vanilla の <b>.htaccess</b> ファイルが見つかりません。ファイルのアップロードに FTP を使用している場合、このファイルは非表示になっていてサーバに転送されなかったかもしれません。インストールをする前に、<b>.htaccess</b> ファイルが転送済みであることを確認してください。';
$Definition['The database user you specified does not have permission to access the database. Have you created the database yet? The database reported: <code>%s</code>'] = '指定されたデータベースユーザーには、このデータベースへのアクセス権がありません。データベースは作成済みですか？データベースの報告は次の通りです: <code>%s</code>';
$Definition['Install Vanilla without a .htaccess file.'] = '.htaccess ファイル無しで Vanilla をインストールします。';
$Definition['Yes, the following information can be changed later.'] = 'ここから下の情報は、後で変更できます。';
$Definition['Application Title'] = 'サイトのタイトル';
$Definition['Admin Email'] = '管理者のメールアドレス';
$Definition['Admin Username'] = '管理者のログインユーザー名(※半角英数)';
$Definition['Admin Password'] = '管理者のパスワード';
$Definition['Confirm Password'] = '確認用パスワード(再入力)';
$Definition['Continue &rarr;'] = 'インストール実行 &rarr;';
$Definition['Failed to connect to the database with the username and password you entered. Did you mistype them? The database reported: <code>%s</code>'] = '入力されたユーザー名とパスワードでは、データベースに接続できません。入力ミスの可能性はありませんか？データベースの報告は次の通りです: <code>%s</code>';
$Definition['It appears as though the database you specified does not exist yet. Have you created it yet? Did you mistype the name? The database reported: <code>%s</code>'] = '指定されたデータベースが まだ作成されていないようです。データベースは作成済みですか？あるいはデータベース名が間違っている可能性はありませんか？ データベースの報告は次の通りです: <code>%s</code>';
$Definition["Are you sure you've entered the correct database host name? Maybe you mistyped it? The database reported: <code>%s</code>"] = 'データベース ホスト名は正しく入力されましたか？ 入力ミスの可能性はありませんか？データベースの報告は次の通りです: <code>%s</code>';
$Definition['You must specify an admin username.'] = '管理者のユーザー名は省略できません。';
$Definition['You must specify an admin password.'] = '管理者のパスワードは省略できません。';
$Definition['You are running PHP version %1$s. Vanilla requires PHP %2$s or greater. You must upgrade PHP before you can continue.'] = 'PHP のバージョン %1$s 上で実行中ですが、Vanilla には PHP %2$s 以上が必要です。続行する前に PHP をアップグレードしてください。';
$Definition['You must have the PDO module enabled in PHP in order for Vanilla to connect to your database.'] = 'PHP の PDO モジュールを有効にする必要があります。';
$Definition['You must have the MySQL driver for PDO enabled in order for Vanilla to connect to your database.'] = 'MySQL ドライバ for PDO を有効にする必要があります。';
$Definition['Some folders don\'t have correct permissions.'] = '<p>適切なパーミッションが設定されていないフォルダがあります。</p><p>FTPクライアントかコマンドラインを使って、下記のフォルダに適切なパーミッションを設定してください:</p>';
$Definition['Your configuration file does not have the correct permissions. PHP needs to be able to read and write to this file: <code>%s</code>'] = '設定ファイルに適切なパーミッションが設定されていません。PHP はこのファイルを読み書きする必要があります: <code>%s</code>';

// Addons descriptions
$Definition['An improvement upon existing private messaging tools, Conversations allows multiple users to take part in private conversations.'] = '既存のプライベートメッセージツールの改良版です。Conversations は複数のユーザー間で非公開の会話を楽しむことができます。'; // Conversations
$Definition['Vanilla is the sweetest discussion forum on the web.'] = 'Vanilla は Web 上における最高のディスカッション フォーラムです。'; // Vanilla
$Definition['Embed Vanilla allows you to embed your Vanilla forum within another application like WordPress, Drupal, or some custom website you\'ve created.'] = 'Embed Vanilla を使って、あなたの Vanilla フォーラムを他のアプリケーションに埋め込むことができます。WordPress や Drupal、そして あなたが作った専用のウェブサイトにも！'; // <Embed> Vanilla
$Definition['This is a plugin to add a tab to the profile page, with various fields for a more detailed user profile.'] = 'プロフィール ページにタブを追加して、より詳細なプロフィール用のさまざまなフィールドを利用できます。'; // AboutMe 1.0
$Definition['This Plugin automaticly downloads and unzipps new Addons and puts them into the right folder. Administrators only have to copy the URL of the specific Addon.'] = '新しいアドオンを自動的にダウンロードして、適切なフォルダに解凍します。管理者は、目的のアドオンの URL をコピーするだけです。'; // Addon Manager 0.2.0
$Definition['<a href="http://premiumsoftware.net/cleditor/" target="_blank">CLEditor</a> jQuery WYSIWYG plugin for Vanilla 2.'] = 'Vanilla 2 用の <a href="http://premiumsoftware.net/cleditor/" target="_blank">CLEditor</a> jQuery WYSIWYG プラグインです。'; // CLEditor jQuery WYSIWYG
$Definition['The debugger plugin displays database queries, their benchmarks, and page processing benchmarks at the bottom of each screen of the application.'] = 'Debugger プラグインはデータベース クエリ、そのベンチマーク、ページ処理ベンチマークをアプリケーションの各画面下部に表示します。'; // Debugger
$Definition['Replaces emoticons in forum comments with images.'] = 'フォーラムのコメント中の絵文字を画像に置き換えて表示します。'; // Emotify :)
$Definition['This plugin integrates Vanilla with Facebook. <b>You must register your application with Facebook for this plugin to work.</b>'] = 'このプラグインは、Vanilla を Facebook に統合します。<b>このプラグインを使うには、Facebook にアプリケーションを登録する必要があります。</b>'; // Facebook 0.1a
$Definition['This plugin allows users to report content that violates forum rules.'] = 'このプラグインは、フォーラムの規則に違反している投稿を、ユーザーが報告できるようにします。'; // Flagging 1.0.1
$Definition['Implements Gravatar avatars for all users who have not uploaded their own custom profile picture & icon.'] = '独自のプロフィール画像とアイコンをアップロードしていないすべてのユーザーに、Gravatar アバターを代替表示します。'; // Gravatar 1.1
$Definition['Adds a list of users taking part in the discussion to the side panel of the discussion page in Vanilla.'] = 'Vanilla のディスカッション ページのサイドパネルに、そのディスカッションの参加者リストを表示します。'; // In This Discussion 1
$Definition['Contains useful functions for locale developers. When you enable this plugin go to its settings page to change your options. This plugin is maintained at http://github.com/vanillaforums/Addons'] = 'ロケール開発者向けのプラグインです。有効にした後は、設定ページへ移動してオプションを設定してください。このプラグインは http://github.com/vanillaforums/Addons でメンテナンスされています。'; // Locale Developer 1.1
$Definition['Allows users to mark all discussions as viewed.'] = '全ディスカッションを既読扱いにできます。'; // Mark All Viewed 1.1
$Definition['Analyzes each page request for js & css files, merging and minifying them where applicable.'] = 'ページごとに js と css ファイルのリクエストを分析して、送信時にそれらを結合・最適化します。'; // Minify 1.0.1b
$Definition['Allows a reply to be made to a specific comment, supporting nested comments.'] = '特定のコメントに対して返信できるようになります。ツリー構造もサポートします。'; // ReplyTo 0.1.8
$Definition['Allow tagging of discussions.'] = 'ディスカッションにタグ付けを可能にします。'; // Tagging 1.0.1
$Definition['Adds TinyMCE visual (WYSIWYG) editor to comment forms on discussion pages.'] = 'TinyMCE ビジュアル (WYSIWYG) エディタをディスカッション ページの投稿フォームに追加します。'; // TinyMCE Visual Editor 0.1
$Definition['Collects undefined translation codes and save it for translating.'] = '翻訳作業のために、未定義の翻訳コードを収集・保存します。'; // Translation collector 1.5.8
$Definition['This plugin integrates Twitter with Vanilla. <b>You must register your application with Twitter for this plugin to work.</b>'] = 'このプラグインは、Vanilla を Twitter に統合します。<b>このプラグインを使うには、Twitter にアプリケーションを登録する必要があります。</b>'; // Twitter 0.1a
$Definition['Adds helpful graphs and information about activity on your forum over time (new users, discussions, comments, and pageviews).'] = 'あなたのフォーラムのアクティビティ (新規ユーザー、ディスカッション、コメント、ページビュー) に関する情報を時系列でグラフ化します。'; // Vanilla Statistics 2.0.17
$Definition['Allows users to vote on comments and discussions.'] = 'ディスカッションとコメントをユーザーが評価できます。'; // Voting 1.0.4.1b
$Definition['This is a skeleton of a locale pack. If you want to create your own locale pack copy and rename this folder into your locales folder.'] = 'これはロケールパックのスケルトンです。独自のロケールパックを作成したい場合は、このフォルダをコピーしてロケールフォルダにリネームしてください。'; // Skeleton Locale 2.0.1

// Theme's descriptions
$Definition['The default theme for Vanilla.'] = 'Vanilla の既定のテーマです。'; // default
$Definition['A fluid theme that fits into any width. Use it for embedding Vanilla into other applications with the &lt;Embed&gt; Vanilla plugin.'] = 'どんな幅にもフィットする可変幅デザインのテーマです。&lt;Embed&gt; Vanilla プラグインと併用して、他のアプリケーションに Vanilla を埋め込むのに最適です。'; // EmbedFriendly 1.0
$Definition['A refined design for mobile browsers'] = 'モバイル ブラウザ向けに特化したデザインです。'; // mobile 1.1
$Definition['Based on timely by flowtown.'] = 'Flowtown による timely を元にしています。'; // timely 1.0
$Definition['A Vanilla/WordPress bundle'] = 'WordPress TwentyTen テーマ風の Vanilla テーマです。'; // VanillaPress2010 1.0
