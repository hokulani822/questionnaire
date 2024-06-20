<?php
$name = $_GET["name"];
$age = $_GET["age"];
$grain = $_GET["grain"];
$rice = $_GET["rice"];
$bread_type = $_GET["bread_type"];
$fruit = $_GET["fruit"];
$veggie = $_GET["veggie"];
$mushroom = $_GET["mushroom"];
$seaweed = $_GET["seaweed"];

// 食物繊維の摂取量を計算
$fiber_score = $grain + $veggie + $mushroom + $seaweed;
if ($rice == "玄米" || $rice == "雑穀米" || $rice == "もち麦") {
    $fiber_score += 1;
}
if ($bread_type == "ライ麦パン" || $bread_type == "全粒粉パン") {
    $fiber_score += 1;
}

// ファイルに書き込み
$time = date("Y-m-d H:i:s");
$data = $time . "," . $name . "," . $age . "," . $grain . "," . $rice . "," . $bread_type . "," . $fruit . "," . $veggie . "," . $mushroom . "," . $seaweed . "\n";

file_put_contents("data/data.txt", $data, FILE_APPEND);

// メッセージを決定
if ($fiber_score >= 8) {
    $message = "素晴らしい！食物繊維の摂取量が十分のようです！その食事を続けることでさらに体型維持や美肌などに繋がります！
    食物繊維は腸内環境を整え、便秘の改善や免疫力の向上にも役立ちます。また、満腹感を得やすくなり、食べ過ぎを防ぐ効果もあります。
    さらに、食物繊維は糖や脂質の吸収を抑える働きもあり、生活習慣病の予防にも役立ちます！将来の健康はバッチリですね！";
} elseif ($fiber_score >= 5) {
    $message = "食物繊維の摂取量はまずまずです。主食を食物繊維の多い食品に置き換えることで簡単に摂取量を増やすことが出来ますよ！
    例えば、白米から玄米や雑穀米に変えるだけでも食物繊維の摂取量が増えます。
    またパンの場合は全粒粉や雑穀パンを選ぶことをおすすめします。野菜や果物、きのこ、海藻を意識的に取り入れることも大切です。
    食物繊維は便秘の改善、コレステロール値の改善、糖尿病のリスク軽減、体重管理などに役立ちます。腸内環境を整え、免疫力の向上にも貢献します。このように、食物繊維を適量摂取することで健康的な生活を送ることができます。";
} else {
    $message = "食物繊維の摂取量が少し不足しているようです。意識して食物繊維を摂ることでダイエットや便秘改善などに繋がりますよ！
    食物繊維は体内で消化されず、腸を刺激して蠕動運動を活発化させることで便秘を改善します。
    また、食物繊維は満腹感を得やすくするため、食べ過ぎを防ぐ効果もあります。糖質や脂質の吸収を抑えるため、肥満や生活習慣病の予防にも役立ちます。";
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style> body { background-color :lemonchiffon } </style>
</head>

<body>
    <h1>食事チェックの結果</h1>
    <h3><?php echo $message; ?></h3>

    <ul>
        <li><a href="read.php">集計データを確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>
</html>