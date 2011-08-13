<?php if (!defined('APPLICATION')) exit();
/*
これは dashboard アプリケーション用の日本語言語ファイルです。
以下のパスに配置してください。

    /applications/dashboard/locale/ja-JP/definitions.php

ja-JP ディレクトリは、無ければ作成してください。

最終対応バージョン: 2.0.18b2
*/

if (!function_exists('FormatPossessive')) {
   function FormatPossessive($Word) {
      //return substr($Word, -1) == 's' ? $Word."'" : $Word."'s";
      // 日本語の所有格は単純に "の" を付けるだけでよく、英語のような変化が発生しないので、
      // 引数 $Word をそのまま返し、翻訳定義の方で "の" を付けることにします。
      // ここで "の" を付けないのは、"の" の部分にリンクが張られるのを防ぐためです。
      // この関数を使用しているのは ActivityHeadline() 内の T('Activity...') のみです。
      // "%2$s" と "%4$s" が所有格のプレースホルダになっています。
      // 具体例については、
      // /application/vanilla/locale/ja-JP/definitiion.php
      // を参照してください。
      // たとえば次のような定義が該当します。
      // $Definition['Activity.ActivityComment.FullHeadline'] = '%1$s が%4$sの%8$sにコメントしました。';
      return $Word;
   }
}

$Definition['[%s] Confirm Your Email Address'] = '[%s] メールアドレスの確認';
$Definition['[%s] Password Reset'] = '[%s] パスワード リセット';
$Definition['[%s] Password Reset Request'] = '[%s] パスワード リセット依頼';
$Definition['[%s] Welcome Aboard!'] = '[%s] ようこそ！';
$Definition['%1$s on %2$s'] = '%1$s on %2$s';
$Definition['%1$s Version %2$s'] = '%1$s Version %2$s';
$Definition['%s user(s) found.'] = '%s 人のユーザーが見つかりました。';

$Definition['(YYYY-mm-dd)'] = '(YYYY-mm-dd)';

$Definition['1 month after being sent'] = '送信一ヶ月後';
$Definition['1 week after being sent'] = '送信一週間後';

$Definition['2 weeks after being sent'] = '送信二週間後';

$Definition['<General Error>'] = '<General Error>';
$Definition['<strong>%1$s</strong> (%2$s) %3$s'] = '<strong>%1$s</strong> (%2$s) %3$s';
$Definition['<strong>The basic registration form requires</strong> that new users copy text from a "Captcha" image to keep spammers out of the site. You need an account at <a href="http://recaptcha.net/">recaptcha.net</a>. Signing up is FREE and easy. Once you have signed up, come back here and enter the following settings:'] = 'スパマー対策として、<strong>基本登録用のフォームでは</strong>新規ユーザーが "Captcha" 画像からテキストをコピーすることが<strong>必須です</strong>。それには <a href="http://recaptcha.net/">recaptcha.net</a> のアカウントが必要になります。サインアップは無料で簡単に行えます。サインアップしたら、この画面に戻って下記事項を入力してください:';

$Definition['[%1$s] Membership Approved'] = '[%1$s] 承認済みメンバー';

$Definition['_Locale'] = 'ロケール';

$Definition['A url-friendly version of the category name for better SEO.'] = 'SEO に適したカテゴリ名の URL フレンドリー バージョン';
$Definition['About Vanilla Statistics'] = 'Vanilla 統計画面について';
$Definition['About.VanillaStatistics'] = 'Vanilla の利用範囲と有効性について正確に知ることは、このフリーでオープンソースのソフトウェアを維持する上で、とても重要です。どうか、このデータのレポートを無効にすることなく、ご利用ください。';
$Definition['About.DisableStatistics'] = "何かビジネス上の理由で、このデータのレポートを無効にする必要がある場合は、設定ファイル (conf/config.php) に次の行を追加してください: <code>\$Configuration['Garden']['Analytics']['Enabled'] = FALSE;</code>";
$Definition['Action'] = 'アクション';
$Definition['Activate'] = 'アクティベート';  // 認証 画面で使用
$Definition['Activity'] = 'アクティビティ'; // translation follows facebook. See http://www.facebook.com/help/?faq=15699&hloc=ja_JP
$Definition['Add'] = '追加';
$Definition['Add Message'] = 'メッセージを追加';
$Definition['Add Route'] = 'ルートを追加';
$Definition['Add User'] = 'ユーザーを追加';
$Definition['Add Item'] = '項目を追加';
$Definition['Added By'] = '設定者';
$Definition['Addons'] = 'アドオン';
$Definition['Administrator'] = '管理者';
$Definition['Advanced'] = '高度な設定';
$Definition['Advanced Forum Settings'] = '高度なフォーラム設定';
$Definition['Advanced Options'] = '詳細設定';
$Definition['All'] = 'すべて';
$Definition['All %1$s'] = 'すべて %1$s';
$Definition['All Discussions'] = 'すべてのディスカッション';
$Definition['Announce'] = 'お知らせ';  // vanilla 側の翻訳と統一
$Definition['Unannounce'] = 'お知らせ解除';
$Definition['Appearance'] = '外観';
$Definition['Applicant'] = '申請者';
$Definition['Applicants'] = '申請者';
$Definition['Application'] = 'アプリケーション';
$Definition['Application ID'] = 'Application ID';  // Facebook の設定なので、日本語化しないでおく
$Definition['Application Secret'] = 'Application Secret';  // Facebook の設定なので、日本語化しないでおく
$Definition['ApplicationHelp'] = '「アプリケーション」は、このサイトに規模が大きめの拡張機能を追加します。<br />%s フォルダに追加されたアプリケーションを、ここで有効化または無効化できます。';
$Definition['Applications'] = 'アプリケーション';
$Definition['Applied On'] = '日付';
$Definition['Approve'] = '承認';
$Definition['Approval'] = '承認制';
$Definition['Archive Discussions'] = '過去のディスカッション';
$Definition['Are you sure you want to do that?'] = '本当に実行してよいですか？';
// $Definition['at'] = 'アット';  // JavaScript でメールアドレス変換する都合上、翻訳しません。
$Definition['Authentication'] = '認証';

$Definition['Ban Item'] = '項目';
$Definition['Ban List'] = '利用禁止ユーザー';
$Definition['Ban Type'] = '種別';
$Definition['Ban Value'] = '設定値';
$Definition['Banned'] = '利用禁止';
$Definition['Banner'] = 'サイトのタイトル';
$Definition['Banner Logo'] = 'タイトルロゴ';
$Definition['Banner Title'] = 'タイトル';
$Definition['BanType'] = '利用禁止種別';
$Definition['Basic'] = '基本';
$Definition['Blocked'] = 'ブロック数';

$Definition['Cancel'] = 'キャンセル';

$Definition['Categories'] = 'カテゴリ';
$Definition['Categories are used to help organize discussions.'] = 'カテゴリはディスカッションをまとめるのに役立ちます。ドラッグ &amp; ドロップで、並べ替えやネストもできます。';
$Definition['Category'] = 'カテゴリ';
$Definition['Category Url:'] = 'カテゴリ URL:';
$Definition['Welcome to Vanilla!'] = 'ようこそ Vanilla へ！';
$Definition['About'] = 'ユーザー情報';
$Definition['Change My Picture'] = 'プロフィール画像を変更';
$Definition['Change My Password'] = 'パスワードを変更';
$Definition['My Preferences'] = '個人設定';
$Definition['My Bookmarks'] = 'フォロー中のディスカッション';
$Definition['My Discussions'] = '自分のディスカッション';
$Definition['Announcement'] = 'お知らせ';
$Definition['Started by %1$s'] = '開始 by %1$s';
$Definition['Roles'] = 'ロール';
$Definition['Joined'] = '登録日';
$Definition['Gender'] = '性別';
$Definition['Male'] = '男性';
$Definition['Female'] = '女性';
$Definition['Old Password'] = '古いパスワード';
$Definition['Change Password'] = 'パスワードを変更';
$Definition['Forgot?'] = '<br />パスワードを忘れた';
$Definition['Keep me signed in'] = 'ログイン状態を記憶する';
$Definition['Don\'t have an account? %s'] = 'アカウントをお持ちですか？ %s';
$Definition['Create One.'] = '今すぐ作成';
$Definition['Enter your Email address'] = 'メールアドレスを入力';
$Definition['Request a new password'] = '新しいパスワードを再発行';
$Definition['I remember now!'] = '思い出した！戻る。';
$Definition['Visits'] = 'ログイン回数';
$Definition['Email Notifications'] = 'メール通知設定';
$Definition['Notifications'] = '通知';
$Definition['Notify me of private messages.'] = '会話(PM)の更新を通知する。';
$Definition['Recipients'] = '宛先';
$Definition['Notify me when I am added to private conversations.'] = '会話に自分が追加されたら通知する。';
$Definition['Notify me when people comment on my bookmarked discussions.'] = 'フォロー中のディスカッションにコメントが付いたら通知する。';
$Definition['Notify me when people comment on my discussions.'] = '自分のディスカッションにコメントが付いたら通知する。';
$Definition['Notify me when people mention me in comments.'] = 'コメントで自分に@リプライされたら通知する。';
$Definition['Notify me when people mention me in discussion titles.'] = 'ディスカッション タイトルで自分に@リプライされたら通知する。';
$Definition['Notify me when people reply to my wall comments.'] = 'ウォールに付けたコメントに返信されたら通知する。';
$Definition['Notify me when people write on my wall.'] = '自分のウォールにコメントが付いたら通知する。';
$Definition['You do not have any notifications yet.'] = '通知はありません。';
$Definition['Save Preferences'] = '個人設定を保存';
$Definition['Select an image on your computer (2mb max)'] = 'コンピュータ内から画像を選んでください (2MBまで)';
$Definition['By uploading a file you certify that you have the right to distribute this picture and that it does not violate the Terms of Service.'] = 'ファイルのアップロードによって、あなたが画像の配布権利者であり、利用規約に違反しないことを保証するものとします。';
$Definition['Allow other members to see your email?'] = '他のメンバーにメールアドレスを公開する';
$Definition['Change the way that new users register with the site.'] = '新規ユーザーがサイトに登録する方法を変更してください。';
$Definition['Check all permissions that apply for each role'] = '以下のロールに適用する権限すべてにチェックを入れてください';
$Definition['Check all roles that apply to this user:'] = 'このユーザーに適用するロールにすべてチェックを入れてください:';
$Definition['Choose and configure your forum\'s authentication scheme.'] = 'フォーラムの認証スキームを選んで設定してください。';
$Definition['Choose who can send out invitations to new members:'] = '誰が新しいメンバーに招待状を送信できるか、設定してください:';
$Definition['Close'] = '終了';

$Definition['comment(s)'] = '件のコメント';
$Definition['Comments'] = 'コメント';
$Definition['Comments per Page'] = '1 ページに表示する最大コメント数';
$Definition['Comment'] = 'コメントを投稿';
$Definition['Configure an Authenticator'] = '設定する認証方式';
$Definition['Confirm'] = '確認';
$Definition['Confirm Email'] = 'メール確認待ち';
$Definition['Confirm email addresses'] = 'メールアドレスの確認をユーザーに要求する (推奨)';
$Definition['Consumer Key'] = 'Consumer Key';  // Twitter アプリ登録申請で使用するので、英語のままにしておく
$Definition['Consumer Secret'] = 'Consumer Secret';  // Twitter アプリ登録申請で使用するので、英語のままにしておく
$Definition['Conversation Messages'] = '会話のメッセージ数';
$Definition['Current Authenticator'] = '現在の認証方式';
$Definition['Current Theme'] = '現在のテーマ';
$Definition['Customize your Public Profile'] = '公開プロフィールをカスタマイズ';

$Definition['Dashboard'] = 'ダッシュボード';
$Definition['Date.DefaultDayFormat'] = '%m/%d';
$Definition['Date.DefaultFormat'] = '%Y/%m/%d';
$Definition['Date.DefaultTimeFormat'] = '%H:%M';
$Definition['Date.DefaultYearFormat'] = '%Y/%m';
$Definition['Decline'] = '却下';
$Definition['Delete Forever'] = '完全に削除する';
$Definition['Description'] = '説明';
$Definition['Disable'] = '無効化';
$Definition['Disable Google Sign In'] = 'Google アカウントでのログインを無効化';
$Definition['Disable OpenID'] = 'OpenID を無効化';
$Definition['Disabled'] = '無効';
$Definition['Disabled %1$s'] = '無効 %1$s';
$Definition['Discussion & Comment Editing'] = 'ディスカッション & コメント編集';
$Definition['discussion(s)'] = '件のディスカッション';
$Definition['Discussions'] = 'ディスカッション';
$Definition['Discussion Title'] = 'ディスカッション タイトル';
$Definition['Discussions per Page'] = '1 ページに表示する最大ディスカッション数';
$Definition['Post Discussion'] = 'ディスカッションを投稿';
$Definition['Save Draft'] = '下書きとして保存';
$Definition['Preview'] = 'プレビュー';
$Definition['My Drafts'] = '下書き';
$Definition['Write Comment'] = 'コメント内容';
$Definition['Back to Discussions'] = 'ディスカッション一覧に戻る';
$Definition['Permalink'] = '固定リンク';
$Definition['permalink'] = '固定リンク';
$Definition['Bookmarked Discussions'] = 'フォロー中のディスカッション';
$Definition['Post Comment'] = 'コメントを投稿';
$Definition['Delete Discussion'] = 'ディスカッションを削除';
$Definition['Delete'] = '削除する';
// $Definition['dot'] = 'ドット';  // JavaScript でメールアドレス変換する都合上、翻訳しません。

$Definition['Edit Discussion'] = 'ディスカッションを編集';
$Definition['Edit'] = '編集';
$Definition['edit'] = '編集';
$Definition['Edit/Delete Log'] = '編集/削除ログ';
$Definition['Edit Category'] = 'カテゴリを編集';
$Definition['Edit My Account'] = 'アカウントを編集';
$Definition['Edit User'] = 'ユーザーを編集';
$Definition['EditContentTimeout.Notes'] = '註: ユーザーが内容を編集できるロールに属している場合は、ここで選択する値よりもロールの設定の方が優先されます。';
$Definition['Email'] = 'メールアドレス';
$Definition['Email Confirmation Role'] = 'メールアドレス確認待ちのロール';
$Definition['Email sent from the application will be addressed from the following name and address'] = 'アプリケーションから送信されるメールの送信元には、以下の名前とメールアドレスが使用されます';
$Definition['Email visible to other users'] = '他のメンバーにメールアドレスを公開する';
$Definition['EmailHeader'] = '{User.Name}さん、こんにちは。
';
$Definition['EmailFooter'] = '
では、よい一日をお過ごしください！';
$Definition['EmailConfirmEmail'] = 'アカウントを有効にする前に、メールアドレスを確認する必要があります。次のリンクをクリックして、メールアドレスを確認してください: {/entry/emailconfirm,url,domain}/{User.UserID,rawurlencode}/{EmailKey,rawurlencode}';
$Definition['EmailInvitation'] = 'こんにちは！

%1$s さんから %2$s に招待されています。参加する場合は、以下のリンクをクリックしてください:

  %3$s';
$Definition['EmailMembershipApproved'] = '%1$s さん、こんにちは。

ユーザー登録が完了しました。以下のリンクからログインしてください:

  %2$s';
$Definition['EmailNotification'] = '%1$s さん

フォーラム上で確認するには、以下のリンクから:
%2$s

では、よい一日をお過ごしください！';
$Definition['EmailPassword'] = '%2$s さんが %3$s に パスワードをリセットしました。あなたの最新の認証情報は、次の通りです:

  メールアドレス: %6$s
  パスワード: %5$s
  URL: %4$s';
$Definition['EmailStoryNotification'] = '%1$s

%3$s

---
フォーラム上で確認するには、以下のリンクから:
%2$s

では、よい一日をお過ごしください！';
$Definition['EmailWelcome'] = '%2$s さんが、%3$s に あなたのアカウントを作成しました。あなたの認証情報は、次の通りです:

  メールアドレス: %6$s
  パスワード: %5$s
  URL: %4$s';
$Definition['EmailWelcomeConnect'] = '{Title} に接続しました。あなたの情報は、次の通りです:

  ユーザー名: {User.Name}
  接続プロバイダ: {ProviderName}

{/,url,domain} からサイトにアクセスできます。';
$Definition['EmailWelcomeRegister'] = '{Title} のアカウントを登録しました。あなたの情報は、次の通りです:

  ユーザー名: {User.Name}
  メールアドレス: {User.Email}

{/,url,domain} からサイトにアクセスできます。';

$Definition['Enable'] = '有効化';
$Definition['Enable Google Sign In'] = 'Google アカウントでのログインを有効化';
$Definition['Enable OpenID'] = 'OpenID を有効化';
$Definition['Enabled'] = '有効';
$Definition['Enabled %1$s'] = '有効 %1$s';
$Definition['ErrorBadInvitationCode'] = '無効な招待コードです。';
$Definition['ErrorCredentials'] = '申し訳ありませんが、入力されたメールアドレス/ユーザー名とパスワードに合致するアカウントが見つかりませんでした。';
$Definition['ErrorPermission'] = '申し訳ありませんが、権限が不足しています。';
$Definition['ErrorRecordNotFound'] = 'リクエストされたレコードが見つかりませんでした。';
$Definition['ErrorTermsOfService'] = '利用規約に同意する必要があります。';
$Definition['Existing members send invitations to new members.'] = '既存のメンバーが新規メンバーに招待状を送ります。';

$Definition['Facebook Connect allows users to sign in using their Facebook account.'] = 'Facebook Connect を使うと、Facebook アカウントでログインできます。<b>このプラグインを使うには、Facebook にアプリケーションを登録する必要があります。</b>';
$Definition['Facebook Settings'] = 'Facebook 設定';
$Definition['First Visit'] = '訪問開始';
$Definition['Flood Control'] = '投稿規制';
$Definition['Forum Settings'] = 'フォーラム設定';

$Definition['Garden.Email.SupportAddress'] = 'サポートメール';
$Definition['Garden.Import.Description'] = 'このページを使用して、Vanilla のエクスポート機能を使用してエクスポートされた別のフォーラムからのデータをインポートしてください。 詳しくは<a href="%s">インポートについて (英語)</a> を参照してください。'; // 'Use this page to import data from another forum that was exported using Vanilla\'s exporter. For more information <a href="%s">see our importing documentation</a>.'
$Definition['Garden.Import.InputInstructions'] = 'インポートされるデータの管理者ユーザーのメールアドレスとパスワードを入力してください。'; // 'Enter the email and password of the admin user from the data being imported.'
$Definition['Garden.Import.Overwrite.Description'] = '警告: このフォーラムのすべてのデータが上書きされます。'; // 'Warning: All data in this forum will be overwritten.'
$Definition['Garden.StatisticsDisabled'] = 'Vanilla 統計画面は、設定ファイルによって明示的に無効化されています。';
$Definition['Garden.StatisticsLocal.Explain'] = 'このフォーラムはテスト環境で使用されているか、さもなくばプライベート IP のようです。既定では、プライベート IP で使用中のフォーラムの統計は取りません。';
$Definition['Garden.StatisticsLocal.Resolve'] = 'フォーラムが外部インターネットから接続可能であることを確認済みの場合は、下記で統計画面を強制的に有効化できます:';
$Definition['Garden.StatisticsReadonly.Explain'] = 'config.php ファイルが読み取り専用です。Vanilla はフォーラムの InstallationID と InstallationSecret を自動で登録することができません。';
$Definition['Garden.StatisticsReadonly.Resolve'] = 'この問題を解決するには、conf/config.php ファイルのファイルモード (パーミッション) を 777 に設定してください。';
$Definition['Generate import SQL only'] = 'インポート用の SQL 文生成のみ行う';
$Definition['Generate Password'] = 'パスワードを生成';
$Definition['Go'] = '検索';
$Definition['Google Sign In Settings'] = 'Google ログイン 設定';
$Definition['Guest'] = 'ゲスト';

$Definition['here'] = 'ここ';

$Definition['Import'] = 'インポート';
$Definition['Inbox'] = '受信トレイ';
$Definition['Information'] = '情報';
$Definition['Internal'] = 'Internal';
$Definition['Invitation'] = '招待制';
$Definition['Invitations can be sent from users\' profile pages.'] = 'ユーザー登録を招待制にした場合、各ユーザーのプロフィール ページには<a href="%s" class="Popup">招待者リスト</a>と呼ばれるリンクが作成されます。';
$Definition['Invitations per month'] = '一ヶ月あたりの招待状数';
$Definition['Invitations will expire'] = '招待状の有効期限';
$Definition['It is a good idea to keep the maximum number of characters allowed in a comment down to a reasonable size.'] = '投稿できる文字数の上限を適度な数値に抑えることを、推奨します。';

$Definition['Key Type'] = 'キーの種類';
$Definition['Key Value'] = 'キーの値';

$Definition['Last Active'] = '最終訪問';
$Definition['Last time your forum communicated with the statistics server it received the following message:'] = '前回あなたのフォーラムが統計サーバーと通信した際、次のメッセージを受信しました:';
$Definition['Last Visit'] = '最終訪問';
$Definition['Locale'] = 'ja-JP';
$Definition['Locale Name'] = 'ロケール名';
$Definition['Locales'] = 'ロケール';
$Definition['Locales are in your %s folder.'] = 'ロケールは、サイトを既定以外の言語で表示できるようにします。%s フォルダに追加されたロケールを、ここで有効化または無効化できます。';
$Definition['Location'] = '場所';

$Definition['Manage Applicants'] = '申請者管理';
$Definition['Manage Applications'] = 'アプリケーション管理';
$Definition['Manage Categories'] = 'カテゴリ管理';
$Definition['Manage Messages'] = 'メッセージ管理';
$Definition['Manage Plugins'] = 'プラグイン管理';
$Definition['Manage Roles & Permissions'] = 'ロールと権限の管理';
$Definition['Manage Routes'] = 'ルート管理';
$Definition['Manage Spam'] = 'スパム管理';
$Definition['Manage Themes'] = 'テーマ管理';
$Definition['Manage Users'] = 'ユーザー管理';
$Definition['Manage your Plugins'] = 'プラグインを管理する';
$Definition['Max Comment Length'] = 'コメント最大文字数';
$Definition['Member'] = 'メンバー';
$Definition['Message'] = 'メッセージ';
$Definition['Messages'] = 'メッセージ';
$Definition['Messages can appear anywhere in your application.'] = 'メッセージはサイトのどこにでも表示でき、ユーザーにニュースやイベントを通知するために使われます。このページでメッセージをドラッグすると、順番を入れ替えることができます。';
$Definition['Method'] = '方法';
$Definition['minute(s)'] = '分間';
$Definition['Moderation'] = 'モデレーション';
$Definition['Moderator'] = 'モデレータ';

$Definition['Name'] = '名前';
$Definition['never'] = 'なし (無期限)';  // 招待の有効期限オプション
$Definition['New comments in the last day'] = '過去一日間の新規コメント数';
$Definition['New comments in the last week'] = '過去一週間の新規コメント数';
$Definition['New conversations in the last day'] = '過去一日間の新規会話数';
$Definition['New conversations in the last week'] = '過去一週間の新規会話数';
$Definition['New discussions in the last day'] = '過去一日間の新規ディスカッション数';
$Definition['New discussions in the last week'] = '過去一週間の新規ディスカッション数';
$Definition['New messages in the last day'] = '過去一日間の新規メッセージ数';
$Definition['New messages in the last week'] = '過去一週間の新規メッセージ数';
$Definition['New Password'] = '新しいパスワード';
$Definition['New users are only registered through SSO plugins.'] = '新規メンバーは SSO プラグイン経由でのみ登録できます。';
$Definition['New users are reviewed and approved by an administrator (that\'s you!).'] = '新規メンバーは審査のうえ、管理者 (あなたのことです) によって承認されます。';
$Definition['New users fill out a simple form and are granted access immediately.'] = '新規メンバーは簡単なフォームに記入をすれば、すぐにアクセスを許可されます。';
$Definition['New users in the last day'] = '過去一日間の新規ユーザー数';
$Definition['New users in the last week'] = '過去一週間の新規ユーザー数';
$Definition['No discussions were found.'] = 'ディスカッションは見つかりませんでした。';
$Definition['None'] = 'なし';
$Definition['Not Authorized (401)'] = '認証できません (401)';
$Definition['Not Found (404)'] = '見つかりません (404)';
$Definition['Not Spam'] = 'スパムから除外';
$Definition['Notes'] = '備考';
$Definition['Number of blocked registrations'] = 'ユーザー登録のブロック回数';

$Definition['OK'] = 'OK';
$Definition['Okay'] = 'Ok';
$Definition['Only Allow Each User To Post'] = '1 ユーザーにつき投稿可能な件数';
$Definition['OpenID Settings'] = 'OpenID 設定';
$Definition['Operation By'] = '投稿者';
$Definition['Options'] = 'オプション';
$Definition['Or Spamblock For'] = '違反時のスパムブロック時間';
$Definition['Organize your Categories'] = 'カテゴリを編成';
$Definition['Other Themes'] = '他のテーマ';
$Definition['Outgoing Email'] = 'メール送信';

$Definition['Page'] = '表示対象';
$Definition['Panel Box'] = 'パネル ボックス';
$Definition['Password'] = 'パスワード';
$Definition['PasswordRequest'] = '%2$s に、パスワードのリセット依頼が出されました。以下のリンクから、パスワードをリセットできます:

  %3$s

依頼した覚えが無い場合は、このメールを無視してください。';
$Definition['Password Options'] = 'パスワード オプション';
$Definition['Permanent (301)'] = '恒久的な移動 (301)';
$Definition['Please choose an authenticator to configure.'] = '設定するユーザー認証方式を選んでください。';
$Definition['Plugin'] = 'プラグイン';
$Definition['PluginHelp'] = '「プラグイン」は、このサイトの機能を拡張します。<br />%s フォルダに追加されたプラグインを、ここで有効化または無効化できます。';
$Definition['Plugins'] = 'プラグイン';
$Definition['Position'] = '表示位置';
$Definition['Prevent spam on your forum by limiting the number of discussions &amp; comments that users can post within a given period of time.'] = 'スパムを防ぐため、ユーザーが一定時間内に作成できるディスカッションおよび投稿できるコメントの数を制限できます。';
$Definition['Private Key'] = 'プライベート キー';
$Definition['Public Key'] = '公開キー';

$Definition['Recent Activity'] = '最近のアクティビティ'; // translation follows facebook. See http://www.facebook.com/help/?faq=15699&hloc=ja_JP
$Definition['Recent News'] = '最新ニュース';
$Definition['Recent Tutorials'] = '最新チュートリアル';
$Definition['Recently Active Users'] = '最近 活動したユーザー';
$Definition['Record Content'] = '内容';
$Definition['Refresh Comments'] = 'コメントの自動更新';
$Definition['Registration'] = '登録';
$Definition['Remove'] = '削除';
$Definition['Requires: '] = '動作要件: ';
$Definition['Reset Password'] = 'パスワードのリセット';
$Definition['Reset password and send email notification to user'] = 'パスワードをリセットして、ユーザーにメールで通知';
$Definition['Reveal Password'] = 'パスワードを表示';
$Definition['Restore'] = '元に戻す';
$Definition['Role'] = 'ロール';
$Definition['Roles & Permissions'] = 'ロールと権限';
$Definition['Roles determine user\'s permissions.'] = '当サイトに参加する全てのユーザは、いずれか一つ以上のロールに所属します。ロールは、どのユーザーが何をしてよいのかを判別する基準に使われます。';
$Definition['Route'] = 'ルート';
$Definition['Route Expression'] = 'ルート式';
$Definition['Routes'] = 'ルート';
$Definition['Routes can be used to redirect users to various parts of your site depending on the url.'] = 'ルートは URL に基づきユーザーを適切なページへリダイレクトするために使用されます。';

$Definition['Save'] = '保存';
$Definition['Search'] = '検索';
$Definition['↳ Search results for \'%s\''] = '「<b class="search_term">%s</b>」の検索結果';
$Definition['seconds'] = '秒間';
$Definition['Select the import source'] = 'インポート元を選択してください';
$Definition['Settings'] = '設定';
$Definition['Sign Out'] = 'ログアウト';
$Definition['Unsink'] = '上げ進行';
$Definition['Sink'] = '下げ進行';
$Definition['SMTP Host'] = 'SMTP サーバー';
$Definition['SMTP Password'] = 'SMTP パスワード';
$Definition['SMTP Port'] = 'SMTP ポート';
$Definition['SMTP Security'] = 'SMTP セキュリティ';
$Definition['SMTP User'] = 'SMTP ユーザー';
$Definition['Spam'] = 'スパム';
$Definition['Start'] = '開始';
$Definition['Start Conversation'] = '会話を開始する';
$Definition['Start a New Conversation'] = '新しい会話を開始';
$Definition['Start a New Discussion'] = '新しいディスカッションを開始';
$Definition['Start your First Discussion'] = '最初のディスカッションを開始する';
$Definition['Statistics'] = '統計';
$Definition['Statistics Documentation'] = '統計画面ドキュメンテーション (英語)';

$Definition['Target'] = '対象';
$Definition['Temporary (302)'] = '一時的な移動 (302)';
$Definition['The %s Authenticator does not have any custom configuration options.'] = 'ユーザー認証方式 %s には設定オプションがありません。';
$Definition['The addon could not be enabled because it generated a fatal error: <pre>%s</pre>'] = '致命的なエラーが発生したため、アドオンを有効にすることができませんでした: <pre>%s</pre>';
$Definition['The banner logo appears at the top of your forum.'] = 'タイトルロゴはヘッダの左上に表示されます。タイトル文字列と置き換えます。';
$Definition['The banner title appears on the top-left of every page. If a banner logo is uploaded, it will replace the banner title on user-facing forum pages.'] = 'タイトルはヘッダの左上に表示されます。タイトルロゴ画像をアップロードすると、タイトル文字列と置き換えます。';
$Definition['The file failed to upload.'] = 'ファイルのアップロードに失敗しました。';
$Definition['ThemeHelp'] = '「テーマ」はサイトのデザインを変更します。<br />%s フォルダに追加されたテーマを、ここで有効化できます。';
$Definition['Themes'] = 'テーマ';
$Definition["The Vanilla Statistics plugin turns your forum's dashboard into an analytics reporting tool"] = 'Vanilla 統計画面は、ダッシュボードを統計レポーティングツールに変えます。あなたは特定の期間におけるフォーラムのアクティビティを調査することができます。詳しくは、<a href="http://vanillaforums.org/docs/vanillastatistics">Vanilla 統計画面のドキュメンテーション (英語)</a> を参照してください。';
$Definition['There are currently no applicants.'] = '申請者はいません。';
$Definition['This Database'] = '現在のデータベース';
$Definition['This plugin allows users to sign in with OpenID. <b>Make sure you click Settings after enabling this plugin to enable OpenID signin</b>.'] = 'このプラグインを使うと、OpenID でログインできます。<b>このプラグインを有効にした後、OpenID を有効化する設定を、必ずクリックしてください</b>。';
$Definition['This plugin allows users to sign in with their Google accounts. <b>Make sure you click Settings after enabling this plugin to enable Google signin</b>.'] = 'このプラグインを使うと、Googleアカウントでログインできます。<b>OpenIDプラグインが有効になっている必要があります。また、このプラグインを有効にした後、Google アカウントでのログインを有効化する設定を必ずクリックしてください</b>。';
$Definition['To send another confirmation email click <a href="%s">here</a>.'] = '確認用メールを再送信する場合は、<a href="%s">ここ</a>をクリックしてください。';
$Definition['Tools'] = 'ツール';
$Definition['Transport error: %s'] = 'リクエストを処理中に致命的なエラーが発生しました。<br />サーバーは次のように応答しています: %s';
$Definition['Try Again'] = '再試行';
$Definition['Twitter Connect allows users to sign in using their Twitter account.'] = 'Twitter Connect を使うと、Twitter アカウントでログインできます。<b>このプラグインを使うには、Twitter にアプリケーションを登録する必要があります。</b>';
$Definition['Twitter Settings'] = 'Twitter 設定';
$Definition['Type'] = 'タイプ';

$Definition['Unlimited'] = '無制限';
$Definition['Upload'] = 'アップロード';
$Definition['Url'] = 'URL';
$Definition['User'] = 'ユーザー';
$Definition['User Count'] = 'ユーザー数';
$Definition['User Registration Settings'] = 'ユーザー登録設定';
$Definition['Username'] = 'ユーザー名';
$Definition['Users'] = 'ユーザー';
$Definition['Users will be assigned to this role until they\'ve confirmed their email addresses.'] = 'メールアドレスを確認するまでのあいだ、ユーザーにはこのロールが適用されます。';
$Definition['Just you!'] = '自分宛てです。';

$Definition['ValidateRequired'] = '%sは必須です。';
$Definition['ValidateOneOrMoreArrayItemRequired'] = 'ユーザーを１人以上指定してください。';
$Definition['Vanilla Statistics'] = 'Vanilla 統計画面';
$Definition['Vanilla Statistics Plugin'] = 'Vanilla Statistics プラグイン';
$Definition['Vanilla Statistics are currently disabled'] = 'Vanilla 統計画面は無効化されています';
$Definition['Vanilla.Archive.Description'] = '特定の日付より古いディスカッションをアーカイブ化できます。アーカイブ化されたディスカッションは事実上 閉じられ、新しいコメントを受け付けなくなります。';
$Definition['Version'] = 'バージョン';
$Definition['Version %s'] = 'バージョン %s';
$Definition['version %s'] = 'バージョン %s';
$Definition['View'] = '表示';
$Definition['Clear'] = 'クリア';
$Definition['Visit Site'] = 'サイトへ移動';

$Definition['Warning'] = '警告';
$Definition['We will attempt to use the local mail server to send email by default. If you want to use a separate SMTP mail server, you can configure it below.'] = '既定ではメールの送信にローカルメールサーバを使用します。独立した SMTP メールサーバを使用する場合は、以下で設定してください。';
$Definition['Welcome Aboard!'] = 'ようこそ！';
$Definition['What\'s the Buzz?'] = '最近の統計';
$Definition['Within'] = '制限時間';
$Definition['I agree to the <a id="TermsOfService" class="Popup" target="terms" href="%s">terms of service</a>'] = '<a id="TermsOfService" class="Popup" target="terms" href="%s">利用規約</a>に同意します';
$Definition['Remember me on this computer'] = 'ログイン状態を記憶する';
$Definition['Sign Up'] = 'アカウントを作成';

$Definition['You can always use your password at<a href="%1$s">%1$s</a>.'] = 'メールアドレスとパスワードを使って、いつでも <a href="%1$s">%1$s</a> からログインできます。';
$Definition['You can place files in your /uploads folder.'] = 'このページに直接アップロードできないくらいファイルサイズが大きな場合は、/uploads フォルダにファイルを配置してください。ファイル名は必ず単語 <b>export</b> で始まり、拡張子 <b>.txt または .gz</b> で終わるようにしてください。'; /* 'If your file is too
		large to upload directly to this page you can place it in your /uploads
		folder. Make sure the filename begins with the word <b>export</b> and ends
		with one of <b>.txt, .gz</b>.'*/
$Definition['You cannot disable the %1$s plugin because the %2$s plugin requires it in order to function.'] = '%1$s プラグインを無効にできません。%2$s プラグインが動作するために、必要です。';
//$Definition['You cannot disable the OpenID plugin because the GoogleSignIn plugin requires it in order to function.'] = 'You cannot disable the OpenID plugin because the GoogleSignIn plugin requires it in order to function.'; // 内容的に上と重複しているのでコメントアウト
$Definition['Your changes have been saved.'] = '変更を保存しました。';
$Definition['Your email has been successfully confirmed.'] = 'メールアドレスの確認を完了しました。';
$Definition['Your settings have been saved.'] = '設定を保存しました。';
$Definition['Warning: This is for advanced users.'] = '<b>警告</b>: これは上級者向けで、ウェブサーバの設定を変更する必要があります。通常は、専用サーバか VPS ホスティングを使用している場合しか使えません。内容について十分な知識があるのでない限り、試さないでください。'; // en-CA にあるので翻訳したが、2.0.18b2 の時点では使用されていない？
$Definition['Activity.Delete'] = '×';

/** 以下は、オリジナルに無かったエントリです **/
$Definition['Search by user or role.'] = 'ユーザー名またはロール (管理者:<input type="text" value="Administrator" size="13" onclick="this.select()" />, 申請者:<input type="text" value="Applicant" size="9" onclick="this.select()" />, 利用禁止:<input type="text" value="Banned" size="6" onclick="this.select()" />, ゲスト:<input type="text" value="Guest" size="5" onclick="this.select()" />, メンバー:<input type="text" value="Member" size="7" onclick="this.select()" />, モデレータ:<input type="text" value="Moderator" size="10" onclick="this.select()" />, メール確認待ち:<input type="text" value="Confirm Email" size="15" onclick="this.select()" />) で検索します。';
$Definition['Add Category'] = 'カテゴリを追加';
$Definition['Don\'t use Categories'] = 'カテゴリを使用しない';
$Definition['Role Name'] = 'ロール名';
$Definition['Edit Role'] = 'ロールを編集';
$Definition['Manage'] = '管理';
$Definition['Allow'] = '許可';
$Definition['Check all permissions that apply to this role:'] = '以下のロールに適用する権限すべてにチェックを入れてください:';
$Definition['SignIn'] = 'ログイン';
$Definition['Sign In'] = 'ログイン';
$Definition['Apply for Membership'] = 'アカウントを作成する';
$Definition['Howdy, Stranger!'] = 'ようこそ！';
$Definition['Profiles'] = 'プロフィール';
$Definition['Authors cannot edit their posts'] = '投稿者は自分の投稿を編集できません';
$Definition['Authors can edit for 5 minutes after posting'] = '投稿者は投稿後 5 分以内なら編集できます';
$Definition['Authors can edit for 15 minutes after posting'] = '投稿者は投稿後 5 分以内なら編集できます';
$Definition['Authors can edit for 30 minutes after posting'] = '投稿者は投稿後 5 分以内なら編集できます';
$Definition['Authors can edit for 1 day after posting'] = '投稿者は投稿後 1 日以内なら編集できます';
$Definition['Authors can edit for 1 week after posting'] = '投稿者は投稿後 1 週間以内なら編集できます';
$Definition['Authors can edit for 1 month after posting'] = '投稿者は投稿後 1 ヶ月間以内なら編集できます';
$Definition['Authors can always edit their posts'] = '投稿者はいつでも自分の投稿を編集できます';
$Definition['Get more information on creating custom routes'] = '独自のルートを作成するなら、詳しくはこちら';
$Definition['Get More Applications'] = '他のアプリケーション';
$Definition['Get More Themes'] = '他のテーマ';
$Definition['Get More Plugins'] = '他のプラグイン';
$Definition['By %s'] = '作成者: %s';
$Definition['Need More Help?'] = '参考情報';
$Definition['Theming Overview'] = 'テーマの概要 (英語)';
$Definition['Quick-Start Guide to Creating Themes for Vanilla'] = 'テーマ作成のためのクイック スタート ガイド (英語)';
$Definition['Allow users to dismiss this message'] = 'このメッセージを閉じることをユーザーに許可する';
$Definition['Enable this message'] = 'このメッセージを有効化する';
$Definition['Saved'] = '変更を保存しました。';
$Definition['Organize Categories'] = 'カテゴリ編成';
$Definition['Category Page Layout'] = 'カテゴリのページ レイアウト';
$Definition['View Page'] = 'ページを表示';
$Definition['Did You Know?'] = 'ご存知ですか？';
$Definition['You can make the categories page your homepage.'] = 'カテゴリ一覧のページを<a href="%s">こちら</a>でホーム画面として設定できます。';
$Definition['Make sure you click View Page'] = '<a href="%s">ページを表示</a>をクリックすると、保存後にカテゴリ ページがどのように見えるかを確認することができます。';
$Definition['Drag and drop the categories below to sort and nest them.'] = 'カテゴリを並べ替えたりネストするには、この下のカテゴリをドラッグ &amp; ドロップしてください。';
$Definition['Configure how nested categories are displayed to users.'] = 'ネストされたカテゴリをどのように表示するか、設定してください。';
$Definition['Vanilla.Categories.MaxDisplayDepth'] = 'ネストされたカテゴリが次の条件に合致する場合は、カンマ区切りのリストとして表示されます: %1$s';
$Definition['Display root categories as headings.'] = 'ルート カテゴリを見出しとして表示する。';
$Definition['Do not display the categories in the side panel.'] = 'カテゴリ一覧をサイドパネルに表示しない。';
$Definition['Managing Categories'] = 'カテゴリの管理 (英語)';
$Definition['Adding & Editing Categories'] = 'カテゴリの追加と編集 (英語)';
$Definition['Homepage'] = 'ホーム画面';
$Definition['Configuring Vanilla\'s Homepage'] = 'Vanilla のホーム画面設定 (英語)';
$Definition['Change the look of All Categories'] = '<b>すべてのカテゴリ</b> ページの外観は<a href="%s">こちら</a>から変更できます。';
$Definition['Changing the Discussions Menu Link'] = 'ディスカッション メニュー リンクの変更 (英語)';
$Definition['Use the content at this url as your homepage.'] = '"ホーム画面" は <strong>%s</strong> にアクセスしたときに表示されます。既定では "すべてのディスカッション" がホーム画面になっていますが、この設定は自由に変更できます。以下は代表的なオプションです:';
$Definition['Use categories to organize discussions'] = 'ディスカッションを整理するためカテゴリを使用する';
$Definition['Exclude archived discussions from the discussions list'] = 'アーカイブ化したディスカッションをディスカッション一覧に表示しない'; //advanced.php *
$Definition['All Categories'] = 'すべてのカテゴリ';
$Definition['Categories &amp; Discussions'] = 'カテゴリ &amp; ディスカッション';
$Definition['Don\'t Refresh'] = 'しない'; //* advanced.php
$Definition['Every 5 seconds'] = '5秒間隔';
$Definition['Every 10 seconds'] = '10秒間隔';
$Definition['Every 30 seconds'] = '30秒間隔';
$Definition['Every 1 minute'] = '1分間隔';
$Definition['Every 5 minutes'] = '5分間隔';
$Definition['Enter the url to the page you would like to use as your homepage:'] = 'ホーム画面に設定したいページの URL を入力してください:';
$Definition['TermsOfService'] = '利用規約';
$Definition['TermsOfServiceText'] = "
   <p>このサービスを利用する時点で、以下の規約に同意したものとみなします。
   本コミュニティにおいて、中傷(虚偽かどうかに関わらず)、嘘、暴言、罵倒、悪態、
   嫌がらせ、わいせつ表現、冒涜表現、性的表現、脅迫、プライバシーの侵害、
   あるいは違法な内容は投稿できません。あなた自身が著作権者である場合を除き、
   著作権によって保護された内容は投稿できません。</p>
   
   <p>本コミュニティはまた、あなたの投稿によって法律問題や訴訟が発生した場合、
   個人情報 (あるいは何であれ知り得た情報) を提供する権利を有するものとします。
   本ウェブサイトへのアクセスは、いかなるインターネットプロトコルによるもので
   あれ、記録されます。</p>
   
   <p>広告、チェーンレター、マルチ商法、セールスの勧誘は、本コミュニティにおいて
   不適切な行為とみなされます。</p>
   
   <p>本コミュニティは、理由のいかんに関わらず いかなるコンテンツをも削除する
   権利を有するものとします。また理由のいかんに関わらず いかなる会員資格をも
   停止する権利を有するものとします。</p>
   
   <p>このサービスを利用するには、13 歳以上である必要があります。</p>
";
$Definition['UsernameError'] = 'ユーザー名には 3～20 文字の英数字とアンダースコアのみ使用できます。';
$Definition['Use an SMTP server to send email'] = 'メールの送信に SMTP サーバを使用';
$Definition['%1$s was removed from the %2$s %3$s and added to the %4$s %5$s.'] = '%1$s が%3$s %2$s から削除され、%5$s %4$s に追加されました。';  //* /applications/dashboard/models/class.usermodel.php
$Definition['%1$s was removed from the %2$s %3$s.'] = '%1$s が%3$s %2$s から削除されました。';
$Definition['%1$s was added to the %2$s %3$s.'] = '%1$s が%3$s %2$s に追加されました。';
$Definition['role'] = 'ロール';
//$Definition['roles'] = 'roles';  // Japanese plural use only singular.
$Definition['This forum is currently set to invitation only mode.'] = 'このフォーラムは現在、招待制に設定されています。'; // /applications/dashboard/models/class.usermodel.php */
$Definition['Please choose an authenticator to configure.'] = '設定したい認証方式を選んでください。';
$Definition['Add Role'] = 'ロールを追加';
$Definition['This category has custom permissions.'] = 'このカテゴリの権限をカスタマイズする';
$Definition['Your default locale won\'t display properly'] = '既定のロケールは、下記にて有効化されるまで正しく表示されません。%s を有効化してください。';
$Definition['Enabling a Locale Pack'] = 'ロケールパックを有効化する(英語)';
$Definition['Internaltionalization & Localization'] = '国際化と地域化(英語)';
$Definition['Default Locale'] = '既定のロケール';
$Definition['You must provide a comment.'] = 'コメントは必須です。';
$Definition['You do not have any conversations.'] = '会話はありません。';
$Definition['You do not have enough invitations left.'] = '招待状が残っていません。';
$Definition['The email you have entered is already related to an existing account.'] = '入力されたメールアドレスは、既存のアカウントで使用済みです。';
$Definition['An invitation has already been sent to the email you entered.'] = '入力されたメールアドレスには、すでに招待状を送信済みです。';
$Definition['Although the invitation was created successfully, the email failed to send. The server reported the following error: %s'] = '招待状の作成は成功しましたが、メールの送信に失敗しました。サーバのエラー報告は次の通りです: %s';
$Definition['ErrorBadInvitationCode'] = '招待コードが正しくありません。';
$Definition['The reCAPTCHA value was not entered correctly. Please try again.'] = 'reCAPTCHA の値が正しくありません。再入力してください。';
$Definition['The email you entered is in use by another member.'] = '入力されたメールアドレスは他のメンバーが使用済みです。';
$Definition['Heads Up! This is a special role that does not allow active sessions. For this reason, the permission options have been limited to "view" permissions.'] = '注意してください！これはアクティブなセッションには適用されない、特殊なロールです。そのため、権限のオプションは "表示" 権限のみに限定されています。';
$Definition['You are now signed in.'] = '登録されました。'; // connect.php
$Definition['Choose a name to identify yourself on the site.'] = 'このサイトで使用する あなたの名前を決めてください。'; // connect.php
$Definition['Other'] = 'その他'; // connect.php
$Definition['Leave blank unless connecting to an exising account.'] = '既存のアカウントに接続しない場合は、空白のままにしておいてください。'; // connect.php
$Definition['You cannot remove an invitation that has been accepted.'] = '受信済みの招待状は削除できません。'; // class.invitationmodel.php
$Definition['[%s] Invitation'] = '[%s] 招待状'; // class.invitationmodel.php
$Definition['Reset my password'] = 'パスワードのリセット';
$Definition['Enter your email address'] = 'メールアドレスを入力してください';
$Definition['A message has been sent to your email address with password reset instructions.'] = 'パスワードのリセット方法を案内するメッセージを、あなたのメールアドレス宛てに送信しました。';
$Definition['Save your password'] = 'パスワードを保存';
$Definition['Could not instantiate mail function.'] = 'メールを送信できません。サーバ側の設定に問題があります。';
$Definition['Security Check'] = 'セキュリティ チェック';
$Definition["Passwords don't match"] = 'パスワードが一致しません';
$Definition['There is already an account in this forum using your email address. Please create a new account, or enter the credentials for the existing account.'] = 'このメールアドレスを使用したアカウントがすでに存在しています。新しいアカウントを作成するか、既存のアカウントの認証情報を入力してください。';
$Definition['%s (Current)'] = '%s (現在)';
$Definition['There was an error fetching the connection data.'] = '接続データの取得でエラーが発生しました。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['The connection data has not been verified.'] = '接続データが認証されませんでした。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['The password you entered is incorrect.'] = '入力されたパスワードが正しくありません。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['You must agree to the terms of service.'] = '利用規約に同意してください。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Tell us why you want to join!'] = '参加理由をご記入ください。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Success!'] = '成功しました'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Failed to authenticate your password reset request. Try using the reset request form again.'] = 'パスワード リセット リクエストの認証に失敗しました。もう一度リセット リクエスト フォームから送信してください。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Your new password is invalid'] = '新しいパスワードが不正です'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Your passwords did not match.'] = 'パスワードが一致しませんでした。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Couldn\'t confirm email.'] = 'メールアドレスの確認が取れていません。あなたに送信したメールに記載されたリンクを確認するか、確認用メールを送信し直してください。'; // applications/dashboard/controllers/class.entrycontroller.php
$Definition['Use My Current Password'] = '自分の現在のパスワードを使用する'; // applications/dashboard/views/import/credentials.php & index.php
$Definition['Importing to Vanilla'] = 'Vanilla へのデータ移行 (英語)'; // applications/dashboard/views/import/index.php
$Definition['The Vanilla 2 Exporter'] = 'Vanilla Porter プラグイン (英語)'; // applications/dashboard/views/import/index.php
$Definition['Warning: Loading tables can be slow.'] = '<b>警告</b>: 現在のサーバ設定では、高速なデータ読み取りができません。とてもサイズの大きなファイル (例. 200,000 コメント以上) をインポートする場合は、設定の変更を検討するといいでしょう。詳しい情報を参照する場合は、<a href="http://vanillaforums.com/blog/help/importing-data/">ここ</a>をクリックしてください。'; /*'<b>Warning</b>: Your server configuration does not support fast data loading.
If you are importing a very large file (ex. over 200,000 comments) you might want to consider changing your configuration. Click <a href="http://vanillaforums.com/porter">here</a> for more information.'*/
$Definition['Current File:'] = '現在のファイル:'; // applications/dashboard/views/import/index.php
$Definition['Garden.Import.Complete.Description'] = 'インポートに成功しました。<a href="%s">ダッシュボード &gt; ロールと権限</a>に移動して、あなたの「ロール」に権限を設定してください。準備ができたら、<b>完了</b>をクリックしてください。'; /* 'You have successfully completed an import.
   Remember to visit <a href="%s">Dashboard &gt; Roles & Permissions</a> to set up your role permissions.
   Click <b>Finished</b> when you are ready.' */
$Definition['Finished'] = '完了'; // applications/dashboard/views/import/go.php
$Definition['Continue'] = '続行'; // applications/dashboard/views/import/go.php
$Definition['You must select a file to import.'] = 'インポートするファイルを選択してください。'; // applications/dashboard/controllers/class.importcontroller.php
$Definition['Garden.Import.Steps.Initialize'] = '初期化'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.ProcessImportFile'] = 'ファイル インポート処理'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.DefineTables'] = 'テーブル作成'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.LoadTables'] = 'テーブル読み込み'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.DefineIndexes'] = 'インデックス作成'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.AssignUserIDs'] = 'ユーザー ID 割り当て'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.AssignOtherIDs'] = 'その他 ID 割り当て'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.InsertTables'] = 'テーブル挿入'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.UpdateCounts'] = 'カウント更新'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.CustomFinalization'] = 'カスタム終了処理'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.AddActivity'] = 'アクティビティ追加'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.LoadUserTable'] = 'ユーザーテーブル読み込み'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.AuthenticateAdminUser'] = '管理者ユーザー認証'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.InsertUserTable'] = 'ユーザーテーブル挿入'; // applications/dashboard/models/class.importmodel.php
$Definition['Garden.Import.Steps.DeleteOverwriteTables'] = '上書きテーブル削除'; // applications/dashboard/models/class.importmodel.php
$Definition['Vanilla Export: %s, Source: %s'] = 'Vanilla エクスポート: %s, ソース: %s'; // applications/dashboard/models/class.importmodel.php
$Definition['The %s table is not in the correct format.'] = '%s テーブルの形式が不正です。'; // applications/dashboard/models/class.importmodel.php
$Definition['There was an error while trying to create the %s table (%s).'] = '%s テーブルの作成中にエラーが発生しました (%s)。'; // applications/dashboard/models/class.importmodel.php
$Definition['The import file is not in the correct format.'] = 'インポート ファイルの形式が不正です。'; // applications/dashboard/models/class.importmodel.php
$Definition['%s of %s'] = '%s / %s'; // applications/dashboard/models/class.importmodel.php
$Definition['The user table was not in the import file.'] = 'ユーザーテーブルはインポートファイルに含まれていませんでした。'; // applications/dashboard/models/class.importmodel.php
$Definition['Could not parse import file. The problem is near line %s.'] = 'インポートファイルを解析できません。%s 行付近で問題が発生しました。'; // applications/dashboard/models/class.importmodel.php
$Definition['The import file does not contain any data.'] = 'インポートファイルにデータがありません。'; // applications/dashboard/models/class.importmodel.php
$Definition['Email/Username'] = 'メールアドレス/ユーザー名'; // applications/dashboard/views/entry/auth/password.php
$Definition['%s unavailable'] = 'その%sは利用できません。'; // applications/dashboard/controllers/class.usercontroller.php
$Definition['Page Not Found'] = 'ページが見つかりません'; // applications/dashboard/views/home/filenotfound.php
$Definition['The page you were looking for could not be found.'] = 'お探しのページが見つかりませんでした。'; // applications/dashboard/views/home/filenotfound.php
$Definition['This theme has additional options.'] = 'このテーマは %s ページでオプションを設定できます。'; // applications/dashboard/views/settings/themes.php
$Definition['Body'] = '本文'; // Validate error
$Definition['The route was saved successfully.'] = 'ルートが保存されました。'; // applications/dashboard/controllers/class.routescontroller.php
$Definition['The homepage was saved successfully.'] = 'ホーム画面が保存されました。'; // applications/dashboard/controllers/class.settingscontroller.php
$Definition['Forum'] = 'フォーラム'; // ダッシュボードのサイドメニュー名
$Definition['Theme Options'] = 'テーマ オプション'; // ダッシュボードのサイドメニュー名
$Definition['GuestModule.Message'] = '初めてですか？　参加するには、どちらかのボタンをクリックしてください！'; // applications/dashboard/modules/class.guestmodule.php

$Definition['You are attempting to sign out of Vanilla. Are you sure you want to %s?'] = 'このフォーラムからログアウトしようとしています。%sしてよろしいですか？';
$Definition['sign out'] = 'ログアウト';
