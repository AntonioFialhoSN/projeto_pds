<?php
session_start();
ob_start();
define('4578S9', true);
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PROJETO PDS</title>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
</head>

<body>
    <?php
    require './vendor/autoload.php';

    use Core\ConfigController as Home;

    $url = new Home();
    $url->carregar();
    ?>
</body>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</html>