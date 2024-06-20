<?php
$data = file_get_contents("data/data.txt");
$lines = explode("\n", $data);
$table_data = array();

foreach ($lines as $line) {
    if (!empty($line)) {
        $row = explode(",", $line);
        $table_data[] = $row;
    }
}

// １. 穀類について
$grain_count = array(
    '0' => 0,
    '1' => 0,
    '2' => 0,
    '3' => 0
);

foreach ($table_data as $row) {
    $grain_answer = $row[3];
    $grain_count[$grain_answer]++;
}

$grain_chart_data = array(
    'labels' => array('0回', '1回', '2回', '3回以上'),
    'datasets' => array(
        array(
            'data' => array_values($grain_count),
            'backgroundColor' => array('rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)', 'rgb(153, 102, 255)'),
            'label' => '回答の内容'
        )
    )
);
$grain_chart_data = json_encode($grain_chart_data);

// 2. ご飯の種類
$rice_count = array(
    '食べない' => 0,
    '白米' => 0,
    '玄米' => 0,
    '雑穀米' => 0,
    'もち麦' => 0,
    'その他' => 0
);
foreach ($table_data as $row) {
    $rice_answer = $row[4];
    $rice_count[$rice_answer]++;
}
$rice_chart_data = array(
    'labels' => array_keys($rice_count),
    'datasets' => array(
        array(
            'data' => array_values($rice_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($rice_count))),
            'label' => 'ご飯の種類'
        )
    )
);
$rice_chart_data = json_encode($rice_chart_data);

// 3. パンの種類
$bread_count = array(
    '食べない' => 0,
    '食パン' => 0,
    'ライ麦パン' => 0,
    '全粒粉パン' => 0,
    '菓子パン' => 0,
    '調理パン' => 0,
    'その他' => 0
);
foreach ($table_data as $row) {
    $bread_answer = $row[5];
    $bread_count[$bread_answer]++;
}
$bread_chart_data = array(
    'labels' => array_keys($bread_count),
    'datasets' => array(
        array(
            'data' => array_values($bread_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($bread_count))),
            'label' => 'パンの種類'
        )
    )
);
$bread_chart_data = json_encode($bread_chart_data);

// 4. 果物
$fruit_count = array(
    '0' => 0,
    '1' => 0,
    '2' => 0,
    '3' => 0
);
foreach ($table_data as $row) {
    $fruit_answer = $row[6];
    $fruit_count[$fruit_answer]++;
}
$fruit_chart_data = array(
    'labels' => array('0回', '1回', '2回', '3回以上'),
    'datasets' => array(
        array(
            'data' => array_values($fruit_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($fruit_count))),
            'label' => '果物'
        )
    )
);
$fruit_chart_data = json_encode($fruit_chart_data);

// 5. 野菜
$veggie_count = array(
    '0' => 0,
    '1' => 0,
    '2' => 0,
    '3' => 0
);
foreach ($table_data as $row) {
    $veggie_answer = $row[7];
    $veggie_count[$veggie_answer]++;
}
$veggie_chart_data = array(
    'labels' => array('0回', '1回', '2回', '3回以上'),
    'datasets' => array(
        array(
            'data' => array_values($veggie_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($veggie_count))),
            'label' => '野菜'
        )
    )
);
$veggie_chart_data = json_encode($veggie_chart_data);

// 6. きのこ
$mushroom_count = array(
    '0' => 0,
    '1' => 0,
    '2' => 0,
    '3' => 0
);
foreach ($table_data as $row) {
    $mushroom_answer = $row[8];
    $mushroom_count[$mushroom_answer]++;
}
$mushroom_chart_data = array(
    'labels' => array('0回', '1回', '2回', '3回以上'),
    'datasets' => array(
        array(
            'data' => array_values($mushroom_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($mushroom_count))),
            'label' => 'きのこ'
        )
    )
);
$mushroom_chart_data = json_encode($mushroom_chart_data);

// 7. 海藻
$seaweed_count = array(
    '0' => 0,
    '1' => 0,
    '2' => 0,
    '3' => 0
);
foreach ($table_data as $row) {
    $seaweed_answer = $row[9];
    $seaweed_count[$seaweed_answer]++;
}
$seaweed_chart_data = array(
    'labels' => array('0回', '1回', '2回', '3回以上'),
    'datasets' => array(
        array(
            'data' => array_values($seaweed_count),
            'backgroundColor' => array_map(function() {
                return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            }, range(1, count($seaweed_count))),
            'label' => '海藻'
        )
    )
);
$seaweed_chart_data = json_encode($seaweed_chart_data);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>データ一覧</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        
        /* 円グラフのスタイル */
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .chart-row {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            width: 100%;
        }
        
        .chart-wrapper {
            flex: 1;
            max-width: 300px;
            margin: 10px;
            text-align: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
</head>

<body>
    <h1>データ一覧</h1>
    <table>
        <tr>
            <th>時間</th>
            <th>名前</th>
            <th>年齢</th>
            <th>パン・穀物・米・パスタ</th>
            <th>ご飯の種類</th>
            <th>パンの種類</th>
            <th>果物</th>
            <th>野菜</th>
            <th>きのこ</th>
            <th>海藻</th>
        </tr>
        <?php foreach ($table_data as $row): ?>
        <tr>
            <?php foreach ($row as $cell): ?>
            <td><?php echo $cell; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="chart-container">
        <div class="chart-row">
            <div class="chart-wrapper">
                <h2>1. パン、穀物、米、パスタを毎日何回食べますか?</h2>
                <canvas id="grainChart" width="300" height="300"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>2. よく食べるご飯は次のうちどれですか?</h2>
                <canvas id="riceChart" width="300" height="300"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>3. よく食べるパンは次のうちどれですか?</h2>
                <canvas id="breadChart" width="300" height="300"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>4. 果物を毎日何回食べますか?</h2>
                <canvas id="fruitChart" width="300" height="300"></canvas>
            </div>
        </div>
        <div class="chart-row">
            <div class="chart-wrapper">
                <h2>5. 野菜を毎日何回食べますか?</h2>
                <canvas id="veggieChart" width="300" height="300"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>6. きのこを毎日何回食べますか?</h2>
                <canvas id="mushroomChart" width="300" height="300"></canvas>
            </div>
            <div class="chart-wrapper">
                <h2>7. 海藻を毎日何回食べますか?</h2>
                <canvas id="seaweedChart" width="300" height="300"></canvas>
            </div>
        </div>
    </div>

    
    <script>
        let grainChartCtx = document.getElementById('grainChart').getContext('2d');
        let grainChartData = <?php echo $grain_chart_data; ?>;
        let grainChart = new Chart(grainChartCtx, {
            type: 'pie',
            data: grainChartData,
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script>

<script>
    let riceChartCtx = document.getElementById('riceChart').getContext('2d');
    let riceChartData = <?php echo $rice_chart_data; ?>;
    let riceChart = new Chart(riceChartCtx, {
        type: 'pie',
        data: riceChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script>
    let breadChartCtx = document.getElementById('breadChart').getContext('2d');
    let breadChartData = <?php echo $bread_chart_data; ?>;
    let breadChart = new Chart(breadChartCtx, {
        type: 'pie',
        data: breadChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script>
    let fruitChartCtx = document.getElementById('fruitChart').getContext('2d');
    let fruitChartData = <?php echo $fruit_chart_data; ?>;
    let fruitChart = new Chart(fruitChartCtx, {
        type: 'pie',
        data: fruitChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script>
    let veggieChartCtx = document.getElementById('veggieChart').getContext('2d');
    let veggieChartData = <?php echo $veggie_chart_data; ?>;
    let veggieChart = new Chart(veggieChartCtx, {
        type: 'pie',
        data: veggieChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script>
    let mushroomChartCtx = document.getElementById('mushroomChart').getContext('2d');
    let mushroomChartData = <?php echo $mushroom_chart_data; ?>;
    let mushroomChart = new Chart(mushroomChartCtx, {
        type: 'pie',
        data: mushroomChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>

<script>
    let seaweedChartCtx = document.getElementById('seaweedChart').getContext('2d');
    let seaweedChartData = <?php echo $seaweed_chart_data; ?>;
    let seaweedChart = new Chart(seaweedChartCtx, {
        type: 'pie',
        data: seaweedChartData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        }
    });
</script>



</body>
</html>