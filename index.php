<html>

<head>
    <title>PHP Starter</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }

    .pdf-container {
        width: 800px;
        height: 1132px;
        margin: 0;
        background-color: white;
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); */
    }

    .container-pdfs {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin: 10px;
    }
    </style>
</head>

<body>
    <?php

$user = [
    'id' => "123",
    'name' => 'Juan Perez',
    'first_name' => 'Juan',
    'last_name' => 'Perez',
    'email' => 'a@a.com',
];

$user_test = [
    "id" => "8",
    "user_id" => "123",
    "gender" => "female",
    "lang" => "es",
    "test_duration" => "10", // Duración en segundos en realizar el test
    "test_result" => "7", // Tipo de Eneagrama: 7
    "test_accuracy" => "92", // Porcetaje de Test: 92%
    "created" => "2023-03-23 17:09:52",
    "updated" => "2023-03-23 17:09:52",
    "results_by_type" => [
        [ "enneatype" => "1", "score" => "45", "points" => "7" ],
        [ "enneatype" => "2", "score" => "76", "points" => "3" ],
        [ "enneatype" => "3", "score" => "20", "points" => "3" ],
        [ "enneatype" => "4", "score" => "40", "points" => "3" ],
        [ "enneatype" => "5", "score" => "89", "points" => "1" ],
        [ "enneatype" => "6", "score" => "76", "points" => "1" ],
        [ "enneatype" => "7", "score" => "92", "points" => "5" ],
        [ "enneatype" => "8", "score" => "33", "points" => "3" ],
        [ "enneatype" => "9", "score" => "60", "points" => "4" ],
    ],
];

$enneatype = $user_test['test_result'];
$enneatype = 2;

    $chart_data = [];

    foreach ($user_test['results_by_type'] as $item) {
        $chart_data[] = $item['points'];
    }
?>
    <div class="container-pdfs">
        <div>
            <?php include 'pages/type-' . $enneatype . '/index.php'; ?>
        </div>
    </div>
</body>

</html>