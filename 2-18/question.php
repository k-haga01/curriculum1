<?php
//POST送信で送られてきた名前を受け取って変数を作成
$test__name = $_POST['test__name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$number = ['80','22','20','21'];
$language = ['PHP','Python','JAVA','HTML'];
$command = ['join','select','insert','update'];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
if($number='80')

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>questions</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!--POST通信で送られてきた名前を出力-->
<p>お疲れ様です<?=$test__name?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
</body>
</html>