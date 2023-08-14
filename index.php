<html>

<head>
    <title>PHP Starter</title>
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }

    .pdf-container {
        width: 800px;
        height: 1132px;
        margin: 0 auto;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .container-pdfs {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin: 10px;
    }
    </style>
</head>

<body>
    <div class="container-pdfs">
        <div>
            <?php
        include 'pages/type-1/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-2/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-3/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-4/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-5/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-6/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-7/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-8/index.php';
    ?>
        </div>
        <div>
            <?php
        include 'pages/type-9/index.php';
    ?>
        </div>
    </div>
</body>

</html>