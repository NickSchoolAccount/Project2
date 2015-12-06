<?php
session_start();
include('GetStudentData.php');
include('ConvertMajor.php');

$studid = $_SESSION["studID"];			// Added for use in upcoming sql query

$firstN = strtoupper($_POST["firstN"]);		// Changed from assignment to session variables
$lastN = strtoupper($_POST["lastN"]);
$email = $_POST["email"];
$major = $_POST["major"];

// Added to replace assignment to session variables- edited student info is saved in Proj2Students

$sql = "update `Proj2Students` set `FirstName`= '$firstN', `LastName`= '$lastN', `Email` = '$email', `Major` = '$major' where `id` = '$studid'";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

$firstn = strtoupper($_POST["firstN"]);
$lastn = strtoupper($_POST["lastN"]);
$studid = $_SESSION["studID"];
$email = $_POST["email"];
$major = ConvertMajor($_POST["major"]);

$debug = false;
$COMMON = new Common($debug);
if(getStudentExist() == true){
	$sql = "update `Proj2Students` set `FirstName` = '$firstn', `LastName` = '$lastn', `Email` = '$email', `Major` = '$major' where `StudentID` = '$studid'";
	$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);
}

header('Location: 02StudHome.php');
?>