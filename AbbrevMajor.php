<?php

// My function to convert an entered major into an abbreviated form for the database

function AbbrevMajor($maj) {
	switch ($maj) {
		case "Computer Engineering":
			$newMaj = "CMPE";
			break;
		case "Computer Science":
			$newMaj = "CMSC";
			break;
		case "Mechanical Engineering":
			$newMaj = "MENG";
			break;
		case "Chemical Engineering":
			$newMaj = "CENG";
			break;
		default:
			$newMaj = "Error abbreviating major";		//major should be one of the other options
	}

	return $newMaj;
}

?>