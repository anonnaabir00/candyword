<?php
require('main-functions.php');


$count_all_words= new Candy_Word_Counter;
$reading_time_calculator = new Candy_Reading_Time;
$count_all_words->word_counter($_POST['wordcount']);
echo "<br>";
$reading_time_calculator->reading_time($_POST['wordcount']);

?>