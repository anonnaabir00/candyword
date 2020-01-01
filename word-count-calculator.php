<?php
require('main-functions.php');


$count_all_words= new Candy_Word_Counter;
$count_all_words->word_counter($_POST['wordcount']);
/*function utReadTime_counting($read_time){
	$words_without_html= strip_tags($read_time);
	$final_words= str_word_count($words_without_html);
	$total_time= floor($final_words/200);
	$final_time= sprintf("<p><strong>Total Reading Time: %s Minutes</strong></p>",$total_time);
	$read_time = $final_time . $read_time;
	return $read_time;
}

*/

?>