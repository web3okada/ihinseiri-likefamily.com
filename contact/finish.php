・お見積り<?php
//-------------------------------------------------------------------
// 作成日: 2020/08/05
// 作成者: fukushima
// 内  容: お問い合わせ
//-------------------------------------------------------------------

//----------------------------------------
//  共通設定
//----------------------------------------
require "./config.ini";

$mail = $_SESSION["front"]["contact"]["POST"]["mail"];

//----------------------------------------
//  ヘッダー情報
//----------------------------------------
// タイトル
$_HTML_HEADER["title"] = "お問い合わせ・お見積り 完了";

// ディスクリプション
$_HTML_HEADER["description"] = "";

// キーワード
$_HTML_HEADER["keyword"] = "";


//----------------------------------------
//  smarty設定
//----------------------------------------
$smarty = new MySmarty("front");
$smarty->compile_dir .= "contact/";

// テンプレートに設定
$smarty->assign( "mail" , $mail  );

// 表示
$smarty->display("finish.tpl");
?>