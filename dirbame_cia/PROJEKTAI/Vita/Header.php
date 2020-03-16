<!DOCTYPE html>
<html lang="lt" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/master.css">

</head>

<?php
include('models/loginas.php');
?>


<body>

<h2>Baigiamasis</h2>

    <!-- ================================================================== -->

    <div class=" container bg-secondary">
        <!-- ................................................. -->
        <header class="row">
            <div class="col-md-12 aukstis-100 mb-2 bg-success">
                
                <div class="row">

                <div class="col floatr">
                    <form action="controller/vartotojas-naujas-form.php">
                        <button type="submit" name="button">Registruotis</button>
                    </form>
                </div>
                <div class="col-md-6 floatr">

                    <form action="controller/vartotojas-prisijung-form.php">
                        <button type="submit" name="button">Prisijungti</button>
                    </form>
                </div>
                <div class="isjungti-float"></div>
            </div>

            </div>

        </header>

        <!-- ++++++++++++++++++++++++++++++++++++++++++- -->
