<?php if (!defined('APPLICATION')) exit();
/*
これは Vanilla アプリケーション用の日本語言語ファイルです。
以下のパスに配置してください。

    /applications/vanilla/locale/ja-JP/definitions.php

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

$Definition['Change Picture'] = 'プロフィール画像を変更';
$Definition['%s comment'] = '投稿数 %s 件';
$Definition['%s comments'] = '投稿数 %s 件';
$Definition['%s Connect'] = '%s 接続';
$Definition['%s message'] = 'メッセージ %s 件';
$Definition['%s New'] = '未読 %s 件';
$Definition['%s new'] = '未読 %s 件';
$Definition['%s New Plural'] = '未読 %s 件';
$Definition['%s second'] = '%s 秒';	//* class.format.php Seconds()
//$Definition['%s seconds'] = '%s 秒'; // Japanese plural use only singular.
$Definition['%s minute'] = '%s 分';
//$Definition['%s minutes'] = '%s 分';
$Definition['%s hour'] = '%s 時間';
//$Definition['%s hours'] = '%s 時間';
$Definition['%s day'] = '%s 日';
//$Definition['%s days'] = '%s 日';
$Definition['%s week'] = '%s 週間';
//$Definition['%s weeks'] = '%s 週間';
$Definition['%s month'] = '%s ヶ月';
//$Definition['%s months'] = '%s ヶ月';
$Definition['%s year'] = '%s 年';
//$Definition['%s years'] = '%s 年';	// class.format.php Seconds() */

//$Definition['1 message'] = '1 メッセージ'; // '%s message' の定義と重複しているのでコメントアウト

$Definition['About'] = 'ユーザー情報';
$Definition['Accepted'] = '承認済み';
$Definition['Activity'] = 'アクティビティ'; // translation follows facebook. See http://www.facebook.com/help/?faq=15699&hloc=ja_JP
$Definition['Activity.AboutUpdate.FullHeadline'] = '%1$s が %6$s のプロフィールを更新しました。';
$Definition['Activity.AboutUpdate.ProfileHeadline'] = '%1$s が %6$s のプロフィールを更新しました。';
$Definition['Activity.ActivityComment.FullHeadline'] = '%1$s が%4$sの%8$sにコメントしました。';
$Definition['Activity.ActivityComment.ProfileHeadline'] = '%1$s が%4$sの%8$sにコメントしました。';
$Definition['Activity.AddedToConversation.FullHeadline'] = '%1$s があなたを %8$s に追加しました。';
$Definition['Activity.AddedToConversation.ProfileHeadline'] = '%1$s があなたを %8$s に追加しました。';
$Definition['Activity.Banned.FullHeadline'] = '%1$s が %3$s を利用禁止にしました。';
$Definition['Activity.Banned.ProfileHeadline'] = '%1$s が %3$s を利用禁止にしました。';
$Definition['Activity.BookmarkComment.FullHeadline'] = '%1$s があなたの%8$sにコメントしました。';
$Definition['Activity.BookmarkComment.ProfileHeadline'] = '%1$s があなたの%8$sにコメントしました。';
$Definition['Activity.Comment'] = 'コメントする';
$Definition['Activity.CommentMention.FullHeadline'] = '%1$s が %8$s の中で %3$s に@リプライしました。';
$Definition['Activity.CommentMention.ProfileHeadline'] = '%1$s が %8$s の中で %3$s に@リプライしました。';
$Definition['Activity.ConversationMessage.FullHeadline'] = '%1$s があなたに%8$sを送信しました。';
$Definition['Activity.ConversationMessage.ProfileHeadline'] = '%1$s があなたに%8$sを送信しました。';
$Definition['Activity.DiscussionComment.FullHeadline'] = '%1$s が%4$sの%8$sにコメントしました。';
$Definition['Activity.DiscussionComment.ProfileHeadline'] = '%1$s が%4$sの%8$sにコメントしました。';
$Definition['Activity.DiscussionMention.FullHeadline'] = '%1$s が %8$s の中で %3$s に@リプライしました。';
$Definition['Activity.DiscussionMention.ProfileHeadline'] = '%1$s が %8$s の中で %3$s に@リプライしました。';
$Definition['Activity.Import.FullHeadline'] = '%1$s がデータをインポートしました。';
$Definition['Activity.Import.ProfileHeadline'] = '%1$s がデータをインポートしました。';
$Definition['Activity.Join.FullHeadline'] = '%1$s が参加しました。';
$Definition['Activity.Join.ProfileHeadline'] = '%1$s が参加しました。';
$Definition['Activity.JoinApproved.FullHeadline'] = '%1$s が%4$sの参加申請を承認しました。';
$Definition['Activity.JoinApproved.ProfileHeadline'] = '%1$s が%4$sの参加申請を承認しました。';
$Definition['Activity.JoinCreated.FullHeadline'] = '%3$s が %1$s のアカウントを作成しました。';
$Definition['Activity.JoinCreated.ProfileHeadline'] = '%3$s が %1$s のアカウントを作成しました。';
$Definition['Activity.JoinInvite.FullHeadline'] = '%1$s が%4$sの招待を受け入れました。';
$Definition['Activity.JoinInvite.ProfileHeadline'] = '%1$s が%4$sの招待を受け入れました。';
$Definition['Activity.NewDiscussion.FullHeadline'] = '%1$s が%8$sを開始しました。';
$Definition['Activity.NewDiscussion.ProfileHeadline'] = '%1$s が%8$sを開始しました。';
$Definition['Activity.PictureChange.FullHeadline'] = '%1$s が%6$sプロフィール画像を変更しました。';
$Definition['Activity.PictureChange.ProfileHeadline'] = '%1$s が%6$sプロフィール画像を変更しました。';
$Definition['Activity.RoleChange.FullHeadline'] = '%1$s が%4$sの権限を変更しました。';
$Definition['Activity.RoleChange.ProfileHeadline'] = '%1$s が%4$sの権限を変更しました。';
$Definition['Activity.SignIn.FullHeadline'] = '%1$s がログインしました。';
$Definition['Activity.SignIn.ProfileHeadline'] = '%1$s がログインしました。';
$Definition['Activity.Unbanned.FullHeadline'] = '%1$s が %3$s の利用禁止を解除しました。';
$Definition['Activity.Unbanned.ProfileHeadline'] = '%1$s が %3$s の利用禁止を解除しました。';
$Definition['Activity.WallComment.FullHeadline'] = '%1$s が%4$sの%5$sに書きました。';
$Definition['Activity.WallComment.ProfileHeadline'] = '%1$s が書きました。';
$Definition['Add'] = '追加';
$Definition['Add Comment'] = 'コメントする';
$Definition['Add Info &amp; Create Account'] = '情報追加とアカウント作成';
$Definition['All Discussions'] = 'すべてのディスカッション';
$Definition['Allow other members to see your email?'] = '他のメンバーにメールアドレスを公開する';
$Definition['Announce'] = 'お知らせ';
$Definition['Applicants'] = '申請者リスト';
$Definition['Apply'] = (C('Garden.Registration.Method') === 'Approval') ? '申請' : '適用'; // このコードはテーマの「適用」ボタン(ダッシュボード)と、審査制の場合のアカウント作成フォームの「申請」ボタンの両方に使われている。日本語の場合は本来単語が異なるが、使い分けができないため、管理者しか見ないダッシュボード用の「適用」を犠牲にして、「申請」を採用するものとする。→ 2.0.18b3 でアカウント作成フォームのボタン名が'Apply for Membership'に変更されるため、'適用' で統一できる見通し。
$Definition['Apply for Membership'] = 'アカウントを作成する';
$Definition['Are you sure you want to do that?'] = '本当に実行してよいですか？';
// $Definition['at'] = 'アット';  // 'at' 決め打ちで JavaScript によってメールアドレス変換されているため、意図的に翻訳しません。

$Definition['Back to Discussions'] = 'ディスカッション一覧に戻る';
$Definition['Bookmark'] = 'フォロー';
$Definition['bookmarked discussion'] = 'フォロー中のディスカッション';
$Definition['Bookmarked Discussions'] = 'フォロー中のディスカッション';
$Definition['By uploading a file you certify that you have the right to distribute this picture and that it does not violate the Terms of Service.'] = 'ファイルのアップロードによって、あなたが画像の配布権利者であり、利用規約に違反しないことを保証するものとします。';

$Definition['Cancel'] = 'キャンセル';
$Definition['Categories'] = 'カテゴリ';
$Definition['Category'] = 'カテゴリ';
$Definition['Change My Password'] = 'パスワードを変更';
$Definition['Change My Picture'] = 'プロフィール画像を変更';
$Definition['Close'] = '終了する';
$Definition['comment'] = 'コメント';
$Definition['Comment'] = 'コメントを投稿';
$Definition['Confirm'] = '確認';
$Definition['Confirm Password'] = 'パスワードを再入力';
$Definition['Connect'] = '接続';
$Definition['conversation'] = '会話';
$Definition['Conversations'] = '会話';
$Definition['Create One.'] = '今すぐ作成';

$Definition['Dashboard'] = 'ダッシュボード';
$Definition['Date.DefaultDayFormat'] = '%m/%d';
$Definition['Date.DefaultFormat'] = '%Y/%m/%d';
$Definition['Date.DefaultTimeFormat'] = '%H:%M';
$Definition['Date.DefaultYearFormat'] = '%Y/%m';
$Definition['Delete'] = '削除';
$Definition['Delete Account'] = 'アカウントを削除';
$Definition['Delete Discussion'] = 'ディスカッションを削除';
$Definition['discussion'] = 'ディスカッション';
$Definition['Discussion Title'] = 'ディスカッション タイトル';
$Definition['Discussions'] = 'ディスカッション'; // vanilla のメニューの「ディスカッション」とダッシュボードの "What's Buzz?" のディスカッション(数)の両方で使用されている
$Definition['Don\'t have an account? %s'] = 'アカウントを お持ちですか？ %s';
// $Definition['dot'] = 'ドット';  // 'dot' 決め打ちで JavaScript によってメールアドレス変換されているため、意図的に翻訳しません。
$Definition['Drag around and resize the square below to define your thumbnail icon.'] = 'オリジナル画像の使いたい範囲をマウスでドラッグして、下のサムネイル アイコンを編集してください。';

$Definition['Edit'] = '編集';
$Definition['Edit Account'] = 'アカウントを編集';
$Definition['Edit My Account'] = 'アカウントを編集';
$Definition['Edit My Thumbnail'] = 'サムネイルを編集';
$Definition['Edit Preferences'] = '個人設定を編集';
$Definition['Email'] = 'メールアドレス';
$Definition['Email Notifications'] = 'メール通知設定';
$Definition['Email Unavailable'] = 'メールアドレスは登録済みです';
$Definition['Enter the email address of the person you would like to invite:'] = '招待したい方のメールアドレスを入力してください:';
$Definition['Enter your Email address'] = 'メールアドレスを入力';
$Definition['Enter your existing account password.'] = '登録済みアカウントのパスワードを入力してください。';

$Definition['Female'] = '女性';
$Definition['Forgot?'] = '<br />パスワードを忘れた';

$Definition['Gender'] = '性別';
$Definition['GenderSuffix.First.f'] = '';
$Definition['GenderSuffix.First.m'] = '';
$Definition['GenderSuffix.Third.f'] = '';
$Definition['GenderSuffix.Third.m'] = '';
$Definition['Go'] = '検索';
$Definition['GuestModule.Message'] = '初めてですか？　参加するには、どちらかのボタンをクリックしてください！';

$Definition['he'] = '彼は';
$Definition['her'] = '彼女の';
$Definition['his'] = '彼の';
$Definition['Howdy, Stranger!'] = 'ようこそ！';

$Definition['I agree to the <a id="TermsOfService" class="Popup" target="terms" href="%s">terms of service</a>'] = '<a id="TermsOfService" class="Popup" target="terms" href="%s">利用規約</a>に同意します';
$Definition['I remember now!'] = '思い出した！戻る。';
$Definition['Inbox'] = '受信トレイ';
$Definition['Internal'] = 'Internal';
$Definition['Invitation Code'] = '招待コード';
$Definition['Invite'] = '招待';
$Definition['Invited by'] = '招待者';

$Definition['Joined'] = '登録日';

$Definition['Keep me signed in'] = 'ログイン状態を記憶する';

$Definition['Last Active'] = '最終訪問';
$Definition['Login with Facebook'] = 'Facebook アカウントでログイン';

$Definition['Male'] = '男性';
$Definition['Most recent by %1$s'] = '最新コメント by %1$s';
$Definition['My Bookmarks'] = 'フォロー中のディスカッション';
$Definition['My Discussions'] = '自分のディスカッション';
$Definition['My Drafts'] = '下書き';
$Definition['My Invitations'] = '招待者リスト';
$Definition['My Preferences'] = '個人設定';

$Definition['Name Unavailable'] = 'ユーザー名が登録済みです';
$Definition['Notifications'] = '通知';
$Definition['Notify me when people comment on my bookmarked discussions.'] = 'フォロー中のディスカッションにコメントが付いたら通知する。';
$Definition['Notify me when people comment on my discussions.'] = '自分のディスカッションにコメントが付いたら通知する。';
$Definition['Notify me when people mention me in comments.'] = 'コメントで自分に@リプライされたら通知する。';
$Definition['Notify me when people mention me in discussion titles.'] = 'ディスカッション タイトルで自分に@リプライされたら通知する。';
$Definition['Notify me when people reply to my wall comments.'] = 'ウォールに付けたコメントに返信されたら通知する。';
$Definition['Notify me when people write on my wall.'] = '自分のウォールにコメントが付いたら通知する。';
$Definition['Notify me when people start new discussions.'] = '新しいディスカッションが開始されたら通知する。';

$Definition['Okay'] = 'Ok';
$Definition['On'] = 'On';
$Definition['Options'] = 'オプション設定';
$Definition['Or you can...'] = 'またはこちらのアカウントで';
$Definition['Original'] = 'オリジナル';

$Definition['PageDetailsMessage'] = '%1$s ～ %2$s';
$Definition['PageDetailsMessageFull'] = '%1$s ～ %2$s / %3$s';
$Definition['Password'] = 'パスワード';
$Definition['Passwords don\'t match'] = 'パスワードが一致しません';
$Definition['Permalink'] = '固定リンク';
$Definition['Please wait while you are redirected. If you are not redirected, click <a href="%s">here</a>.'] = 'リダイレクト中につき、少々お待ちください。リダイレクトされない場合は、<a href="%s">ここ</a>をクリックしてください。';
$Definition['Popup'] = 'ポップアップ';
$Definition['Post Comment'] = 'コメントを投稿';
$Definition['Post Discussion'] = 'ディスカッションを投稿';
$Definition['Powered by Vanilla'] = 'Powered by Vanilla';
$Definition['Preview'] = 'プレビュー';
$Definition['Profile Picture'] = 'プロフィール画像';

$Definition['Recent Activity'] = '最近のアクティビティ'; // translation follows facebook. See http://www.facebook.com/help/?faq=15699&hloc=ja_JP
$Definition['Redirecting...'] = 'リダイレクト中…';
$Definition['Remember me on this computer'] = 'ログイン状態を記憶する';
$Definition['Remove My Picture'] = 'プロフィール画像を削除';
$Definition['Request a new password'] = 'パスワードをリセットする';
$Definition['Roles'] = 'ロール';

$Definition['Save'] = '保存';
$Definition['Save Draft'] = '下書きを保存';
$Definition['Save Preferences'] = '個人設定を保存';
$Definition['Search'] = '検索';
$Definition['Select an image on your computer (2mb max)'] = 'コンピュータ上の画像を選んでください (2 MBまで)';
$Definition['Sent To'] = '送信';
$Definition['Share'] = 'シェア';
$Definition['she'] = '彼女';
$Definition['Sign In'] = 'ログイン';
$Definition['Sign In with Google'] = 'Google アカウントでログイン';
$Definition['Sign In with OpenID'] = 'OpenID アカウントでログイン';
$Definition['Sign In with Twitter'] = 'Twitter アカウントでログイン';
$Definition['Sign Out'] = 'ログアウト';
$Definition['Sign Up'] = 'アカウントを作成';
$Definition['Sink'] = '下げ進行';
$Definition['somebody'] = '誰か';
$Definition['Start a New Discussion'] = '新しいディスカッションを開始';
$Definition['Started by %1$s'] = '開始 by %1$s';
$Definition['Status'] = 'ステータス';

$Definition['Thank You!'] = 'ありがとうございます！';
$Definition['Thumbnail'] = 'サムネイル';
$Definition['Transport error: %s'] = 'リクエストを処理中に致命的なエラーが発生しました。<br />サーバーは次のように応答しています: %s';

$Definition['Unbookmark'] = 'フォロー解除';
$Definition['Upload'] = 'アップロード';
$Definition['Username'] = 'ユーザー名';

$Definition['ValidateBoolean'] = '%sは不正な真偽値です。';
$Definition['ValidateConnection'] = '指定された接続パラメータでは、データベースに接続できませんでした。データベースは次のエラーを報告しています: <code>%s</code>';
$Definition['ValidateDate'] = '%sは不正な日付です。';
$Definition['ValidateDecimal'] = '%sは不正な小数です。';
$Definition['ValidateEmail'] = '%sが不正です。';
$Definition['ValidateEnum'] = '%sが不正です。';
$Definition['ValidateInteger'] = '%sは不正な整数です。';
$Definition['ValidateLength'] = '%1$sは%2$s文字 長すぎます。';
$Definition['ValidateMatch'] = '新しい%sが再入力と一致しません。';
$Definition['ValidateMinimumAge'] = '年齢が若すぎます。';
$Definition['ValidateOneOrMoreArrayItemRequired'] = 'ユーザーを１人以上指定してください。';
$Definition['ValidateRegex'] = '%sは不正な形式です。';
$Definition['ValidateRequired'] = '%sは必須です。';
$Definition['ValidateRequiredArray'] = '少なくとも一つ以上の%sを選択してください。';
$Definition['ValidateTime'] = '%s は不正な時刻です。';
$Definition['ValidateTimestamp'] = '%s は不正なタイムスタンプです。';
$Definition['ValidateUsername'] = 'ユーザー名には 3～20 文字の英数字とアンダースコアのみ使用できます。';
$Definition['ValidateVersion'] = '%s フィールドは有効なバージョン番号ではありません。 phpのversion_compare()関数の例を見てください。';
$Definition['ValidateBanned'] = 'その %s は許可されていません。';
$Definition['Visits'] = 'ログイン回数';

$Definition['wall'] = 'ウォール';
$Definition['Why do you want to join?'] = '参加を希望する理由は？';
$Definition['Write a comment'] = 'コメントを書く';
$Definition['Write Comment'] = '投稿内容';
$Definition['Write something about yourself...'] = '自分自身について、何か書いてみましょう…';

$Definition['you'] = 'あなた';
$Definition['You'] = 'あなた';
$Definition['You already have an account here.'] = 'アカウント作成済みです。';
$Definition['You are connected as %s through %s.'] = '%sから%sに接続しました。';
$Definition['You do not have any notifications yet.'] = '通知はありません。';
$Definition['your'] = 'あなた';
$Definition['Your application will be reviewed by an administrator. You will be notified by email if your application is approved.'] = '管理者が申請を審査します。承認されましたら、電子メールでお知らせします。';
$Definition['Your registered username: <strong>%s</strong>'] = 'ユーザー名: <strong>%s</strong>';

/** 以下は、オリジナルに無かったエントリです **/
$Definition['Add a Comment'] = 'コメントを書く';
$Definition['Old Password'] = '古いパスワード';
$Definition['old Password'] = '古いパスワード';
$Definition['New Password'] = '新しいパスワード';
$Definition['Change Password'] = 'パスワードを変更';
$Definition['Your old password was incorrect.'] = '古いパスワードが間違っています。';
$Definition['Your password has been changed.'] = 'パスワードが変更されました。';
$Definition['Your changes have been saved successfully.'] = '変更が保存されました。';
$Definition['View'] = '表示';
$Definition['Clear'] = 'クリア';
$Definition['Unsink'] = '上げ進行';
$Definition['This discussion has been closed.'] = 'このディスカッションは終了しました。';
$Definition['Reopen'] = '再開';
$Definition['&larr; All Discussions'] = '&larr; すべてのディスカッション';
$Definition['Closed'] = '終了';
$Definition['Dismiss'] = '片付ける';  // Flagging プラグインでも使用されるため、共用できるように "フロート解除" から変更
$Definition['Announcement'] = 'お知らせ';
$Definition['Unannounce'] = 'お知らせ解除';
$Definition['Welcome to Vanilla!'] = 'ようこそ Vanilla へ！';
$Definition['Welcome Aboard!'] = 'ようこそ！';
$Definition['Save Comment'] = 'コメントを更新';
$Definition['The name you entered is already in use by another member.'] = '入力されたユーザー名は、他のメンバーによって使用済みです。';
$Definition['Comment by %s'] = 'コメント by %s';
$Definition['permalink'] = '固定リンク';
$Definition['↳ No results for \'%s\''] = '↳ \'%s\' の検索結果はありません。';
$Definition['↳ Search results for \'%s\''] = '↳ \'%s\' の検索結果は以下の通りです。';
$Definition['%s messages'] = 'メッセージ %s 件';
$Definition['Edit Discussion'] = 'ディスカッションを編集';
$Definition['Don\'t Refresh'] = 'しない'; //* advanced.php
$Definition['Every 5 seconds'] = '5 秒間隔';
$Definition['Every 10 seconds'] = '10 秒間隔';
$Definition['Every 30 seconds'] = '30 秒間隔';
$Definition['Every 1 minute'] = '1 分間隔';
$Definition['Every 5 minutes'] = '5 分間隔';
$Definition['Use categories to organize discussions'] = 'ディスカッションを整理するためカテゴリを使用する';
$Definition['Exclude archived discussions from the discussions list'] = 'アーカイブ化したディスカッションをディスカッション一覧に表示しない'; //advanced.php *
$Definition['Draft saved at %s'] = '%s に、下書きを保存しました。';  // vanilla/controllers/class.postcontroller.php
$Definition['Categories are used to organize discussions.'] = '<strong>カテゴリ</strong>を使って、ディスカッションを分類することができます。';
$Definition['The specified url code is already in use by another category.'] = '指定された url code は他のカテゴリで使用済みです。';
$Definition['You have posted %1$s times within %2$s seconds. A spam block is now in effect on your account. You must wait at least %3$s seconds before attempting to post again.'] = '%2$s 秒以内に %1$s 回の投稿が行われたため、スパム ブロック機能が発動しました。今後 %3$s 秒間は、投稿できません。';
$Definition["You've filled our honeypot! We use honeypots to help prevent spam. If you're  not a spammer or a bot, you should contact the application administrator for help."] = 'ハニーポットに入力しました。私たちはスパム防止のためにハニーポットを導入しています。もしあなたがスパマーでもボットでもないのでしたら、管理者に連絡を取ってください。';
$Definition['You must specify at least one tag.'] = '少なくとも 1 個はタグを指定してください。'; // class.tagging.plugin.php
$Definition['ValidateTag'] = 'タグにスペースを含むことはできません。'; // class.tagging.plugin.php
$Definition['You can only specify up to %s tags.'] = '指定できるタグは %s 個までです。'; // class.tagging.plugin.php
$Definition['You have entered an invalid discussion title'] = 'ディスカッション タイトルが不正です。'; // class.postcontroller.php
$Definition['You do not have any drafts.'] = '下書きはありません。'; // applications/vanilla/views/drafts/index.php
$Definition['Commenting not allowed.'] = 'コメントは許可されていません。'; // applications/vanilla/views/discussion/index.php
$Definition['Blank Discussion Topic'] = 'ディスカッション タイトル未設定';
$Definition['message'] = 'メッセージ';
$Definition['This user has not commented yet.'] = 'コメントはまだありません。'; // applications/vanilla/views/discussion/profile.php
$Definition['More Discussions'] = 'さらにディスカッションを表示'; // applications/vanilla/views/categories/discussions.php
$Definition['Draft.Delete'] = '×';
