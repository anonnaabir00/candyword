<?php
error_reporting(0);
require('main-functions.php');


$count_all_words= new Candy_Word_Counter;
$reading_time_calculator = new Candy_Reading_Time;
//$count_all_words->word_counter($_POST['wordcount']);
//echo "<br>";
//$reading_time_calculator->reading_time($_POST['wordcount']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CandyWord">
    <meta name="author" content="Asaduzzaman Abir">
    <meta name="keywords" content="word counter, reading time calculator, word calculator, reading time counter">

    <!-- Title Page-->
    <title>CandyWord-Reading time calculator with Word Counter</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
<div class="wrapper wrapper--w680">
<div class="card card-4">
<div class="card-body">
<img src="logo.png" class="logo"><br>
<h2 class="title">Total Words: <?php $count_all_words->word_counter($_POST['text_count']);?><br>Reading Time: <?php $reading_time_calculator->reading_time($_POST['text_count']);?></h2>
<form method="POST">
<div class="row row-space">
<div class="col-2">
<div class="input-group">
<label class="label">Enter Your Text Here:</label>
<textarea class="input--style-4" rows="8" cols="57" name="text_count" id="text_count"></textarea>
</div>
</div>
<div class="p-t-15">
<button class="btn btn--radius-2 btn--blue" type="submit">Count Words!</button>
</div>
</form>
</div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>