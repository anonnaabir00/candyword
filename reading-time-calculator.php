<?php
require('main-functions.php');

$reading_time_calculator = new Candy_Reading_Time;
$reading_time_calculator->reading_time($_POST['wordcount']);