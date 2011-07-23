<?php if (!defined('APPLICATION')) exit();

/**
 * Japanese version of ValidateUsername().
 * 日本語のユーザー名を登録可能にするため、ここで関数をオーバーライドします。
 * オリジナルの関数は以下のファイルに定義されています。
 * /library/core/functions.validation.php
 * ユーザー名に使用できる文字種あるいは文字数の上下限を変更したい場合は、
 * 下記関数内の正規表現パターンを変更してください。
 * ユーザー名に使用できる文字種および文字数の上下限をオリジナルの状態
 * (半角英数字とアンダースコアのみ3～20文字以内) に復元したい場合は、
 * 下記関数をコメントアウトまたは削除してください。
 * 詳細については、以下の課題を参照してください。
 * https://github.com/yu-tang/Garden/issues/4
 */
if (!function_exists('ValidateUsername')) {
   function ValidateUsername($Value, $Field = '') {
      return ValidateRegex(
         $Value,
         '/^[一-龠ぁ-んァ-ヶ・ー＝\w\-０-９ａ-ｚＡ-Ｚ＿－]{1,20}$/u'
      );
   }
}

/**
 * Japanese version of GetMentions().
 * 日本語のユーザー名を検出可能にするため、ここで関数をオーバーライドします。
 * オリジナルの関数は以下のファイルに定義されています。
 * /library/core/functions.general.php
 * ユーザー名に使用できる文字種あるいは文字数の上下限を変更したい場合は、
 * 下記関数内の正規表現パターンを変更してください。
 * ユーザー名に使用できる文字種および文字数の上下限をオリジナルの状態
 * (半角英数字とアンダースコアのみ3～20文字以内) に復元したい場合は、
 * 下記関数をコメントアウトまたは削除してください。
 * 詳細については、以下の課題を参照してください。
 * https://github.com/yu-tang/Garden/issues/5
 */
if (!function_exists('GetMentions')) {
   function GetMentions($String) {
      $Mentions = array();

      // This one grabs mentions that start at the beginning of $String
      preg_match_all(
         '/(?:^|[^一-龠ぁ-んァ-ヶ・ー＝\w\-０-９ａ-ｚＡ-Ｚ＿－])@([一-龠ぁ-んァ-ヶ・ー＝\w\-０-９ａ-ｚＡ-Ｚ＿－]{1,50})(?:$|[^一-龠ぁ-んァ-ヶ・ー＝\w\-０-９ａ-ｚＡ-Ｚ＿－])/u',
         $String,
         $Matches
      );
      if (count($Matches) > 1) {
         $Result = array_unique($Matches[1]);
         return $Result;
      }
      return array();
   }
}
