<?php
	if(ISSET($_POST['count'])){
		$words=$_POST['words'];
		function countWords($string) {
			$string = preg_replace('/\s+/', ' ', trim($string));
			$words = explode(" ", $string);
			return count($words);
		}
 
 
		echo "<center><h3>There are <span class='text-primary'>".countWords($words)."</span> words in the given string</h3></center>";
	}
?>
