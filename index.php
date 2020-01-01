<?php
//error_reporting(0);
require('main-functions.php');


$count_all_words= new Candy_Word_Counter;
$reading_time_calculator = new Candy_Reading_Time;
//$count_all_words->word_counter($_POST['wordcount']);
//echo "<br>";
//$reading_time_calculator->reading_time($_POST['wordcount']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
  		Input Text: <input type="text" size="100" name="wordcount" id="wordcount"><br>
  	<input type="submit" value="Submit">
</form>
<p>Total Word In this Sentence: <?php $count_all_words->word_counter($_POST['wordcount']);?></p>
<p>Reading Time: <?php $reading_time_calculator->reading_time($_POST['wordcount']);?></p>
</body>
</html>