<html>

<head>
   <meta charset="utf-8">
   <title>食事アンケート</title>
   <style> body { background-color : lemonchiffon} </style>
</head>

<body>
<h1>あなたの食事をチェック！</h1>
<h3>〜ダイエットに欠かせない”食物繊維”足りてるかな？〜</h3><br>

   <form action="write.php" method="get">
       お名前: <input type="text" name="name"><br><br>

       年齢: <select name="age">
            <option value="">選択してください</option>
            <option value="10">10代</option>
            <option value="20">20代</option>
            <option value="30">30代</option>
            <option value="40">40代</option>
            <option value="50">50代</option>
            <option value="60">60代</option>
            <option value="70">70代</option>
            <option value="80">80代以上</option>
        </select><br><br>
       
       1. パン、穀物、米、パスタを毎日何回食べますか?<br>
       <input type="radio" name="grain" value="0">0回
       <input type="radio" name="grain" value="1">1回
       <input type="radio" name="grain" value="2">2回
       <input type="radio" name="grain" value="3">3回以上<br><br>

       2. よく食べるご飯は次のうちどれですか?<br>
       <input type="radio" name="rice" value="食べない">食べない
       <input type="radio" name="rice" value="白米">白米
       <input type="radio" name="rice" value="玄米">玄米
       <input type="radio" name="rice" value="雑穀米">雑穀米
       <input type="radio" name="rice" value="もち麦">もち麦
       <input type="radio" name="rice" value="その他">その他<br><br>

       3. よく食べるパンは次のうちどれですか?<br>
       <input type="radio" name="bread_type" value="食べない">食べない
       <input type="radio" name="bread_type" value="食パン">食パン
       <input type="radio" name="bread_type" value="ライ麦パン">ライ麦パン
       <input type="radio" name="bread_type" value="全粒粉パン">全粒粉パン
       <input type="radio" name="bread_type" value="菓子パン">菓子パン
       <input type="radio" name="bread_type" value="調理パン">調理パン
       <input type="radio" name="bread_type" value="その他">その他<br><br>
       
       ４. 果物を毎日何回食べますか?<br>
       <input type="radio" name="fruit" value="0">0回
       <input type="radio" name="fruit" value="1">1回
       <input type="radio" name="fruit" value="2">2回
       <input type="radio" name="fruit" value="3">3回以上<br><br>
       
       ５. 野菜を毎日何回食べますか?<br>
       <input type="radio" name="veggie" value="0">0回
       <input type="radio" name="veggie" value="1">1回
       <input type="radio" name="veggie" value="2">2回
       <input type="radio" name="veggie" value="3">3回以上<br><br>

       ６. きのこを毎日何回食べますか?<br>
        <input type="radio" name="mushroom" value="0">0回
        <input type="radio" name="mushroom" value="1">1回
        <input type="radio" name="mushroom" value="2">2回
        <input type="radio" name="mushroom" value="3">3回以上<br><br>

        7. 海藻を毎日何回食べますか?<br>
       <input type="radio" name="seaweed" value="0">0回
       <input type="radio" name="seaweed" value="1">1回
       <input type="radio" name="seaweed" value="2">2回
       <input type="radio" name="seaweed" value="3">3回以上<br><br>


        
       
       <input type="submit" value="送信">
   </form>
</body>

</html>