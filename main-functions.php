<?php

//Here are all main functions are located

/**
 * This is the Class to count words from a paragraph.
 */
class Candy_Word_Counter {

	public function word_counter($total_words){
	$words_without_html= strip_tags($total_words);
	$final_words= str_word_count($words_without_html);
	$total_words = $final_words;
	echo $total_words;
	
	}
	
}


/**
 * This is the Class to count reading time.
 */
class Candy_Reading_Time
{
	
	public function reading_time($reading_time){
	$words_without_html= strip_tags($reading_time);
	$final_words= str_word_count($words_without_html);
	$time= $final_words/200;
	$reading_time= $time;
	echo "Reading Time: ",$reading_time;
	
	}
}

?>