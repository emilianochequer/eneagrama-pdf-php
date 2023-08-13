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

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-1/page-1.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-2/page-2.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-3/page-3.php';
    ?>
        </div>
        
        <div class="pdf-container">
            <?php
        include 'pages/type-1/page-4/page-4.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-7/page-7.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-8/page-8.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-18/page-18.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-23/page-23.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-36/page-36.php';
    ?>
        </div>

        <div class="pdf-container">
            <?php
        include 'pages/type-9/page-40/page-40.php';
    ?>
        </div>

    </div>
</body>

</html>