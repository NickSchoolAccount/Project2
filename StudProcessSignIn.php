<?php
session_start();
$debug = false;
include('CommonMethods.php');
include('AbbrevMajor.php');
$COMMON = new Common($debug);

// Replaced assignment to session variables with temporary variables- used in upcoming sql query to add to Proj2Students table

$firstN = strtoupper($_POST["firstN"]);
$lastN = strtoupper($_POST["lastN"]);
$_SESSION["studID"] = strtoupper($_POST["studID"]);		// Only one session variable necessary to access all student information
$studID = $_SESSION["studID"];
$email = $_POST["email"];
$major = AbbrevMajor($_POST["major"]);

// My addition to actually put a student who logs in into the database- necessary to avoid use of extra session variables

$sql = "insert into `Proj2Students`(`FirstName`, `LastName`, `StudentID`, `Email`, `Major`) values ('$firstN','$lastN','$studID','$email','$major')";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

header('Location: 02StudHome.php');
?>