<?php if (!defined('APPLICATION')) exit();

$LocaleInfo['Japanese'] = array (
  'Locale' => 'ja-JP',
  'Name' => 'Japanese Locale',
  'Description' => '日本語 言語ファイルです。',
  'Version' => '1.1',
  'Author' => 'vanillaforums-ja',
  'AuthorEmail' => 'vanillaforums.ja@gmail.com',
  'AuthorUrl' => 'https://github.com/vanillaforums-ja/',
  'License' => 'GPL2',
);

/**
 * Japanese version of object possession and plural. (there is no plural in Japanese.)
 * 日本語には所有格と複数形の分岐処理が必要ないので、ここでオーバーライドします。
 *
 * @param string The word to format.
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

if (!function_exists('Plural')) {
   function Plural($Number, $Singular, $Plural) {
		// Make sure to fix comma-formatted numbers
      //$WorkingNumber = str_replace(',', '', $Number);
      //return sprintf(T($WorkingNumber == 1 ? $Singular : $Plural), $Number);
      return sprintf(T($Singular), $Number);
   }
}
