<?php

/*	Converts DB major to unabbreviated version:
	will return a string where instances of abbreviated
	majors in the input string are replaced with
	unabbreviated forms. Requires input string to
	separate majors with one space in between.
*/

function convertMajor($maj) {
	$newMaj = "";
	$part = "";
	$count = 0;

	$maj = str_replace("," , "" , $maj);			//Removes any commas from the major list
	$majLen = strlen($maj);

	while ($count < $majLen) {
		$part = substr($maj,$count,4); 			// breaks major list into 4 letter pieces

		switch($part) {
			case "CMPE":
				$part = "Computer Engineering";
				break;
			case "CMSC":
				$part = "Computer Science";
				break;
			case "MENG":
				$part = "Mechanical Engineering";
				break;
			case "CENG":
				$part = "Chemical Engineering";
				break;
			default:
				$part = "Error converting from abbreviation";		// for debugging
		}

		$count = $count + 5; 				//next 4 letters after a space

		if(strlen($newMaj) > 0) {
			$newMaj = $newMaj . ", " . $part;	//concatenate to "list" of majors
		} else {
			$newMaj = $newMaj . " " . $part;	//No comma before first major
		}
	}

	return $newMaj;
}

?>