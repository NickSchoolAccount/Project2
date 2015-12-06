<?php
session_start();
include('GetStudentData.php');

$debug = false;
$COMMON = new Common($debug);

$sql = "select * from Proj2Students";
$rs = $COMMON->executeQuery($sql, $_SERVER["SCRIPT_NAME"]);

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Edit Student Information</title>
    <link rel="stylesheet" type="text/css" href="css/standard.css">
  </head>
  <body>
    <div id="login">
      <div id="form">
			<div class="top">
			<h2>Edit Student Information<span class="login-create"></span></h2>
			<form action="StudProcessEdit.php" method="post" name="Edit">
			<div class="field">
				<label for="firstN">First Name</label>
				<input id="firstN" size="30" maxlength="50" type="text" name="firstN" required value=<?php echo getFirstName()?>>
			</div>
			<div class="field">
			  <label for="lastN">Last Name</label>
			  <input id="lastN" size="30" maxlength="50" type="text" name="lastN" required value=<?php echo getLastName()?>>
			</div>
			<div class="field">
				<label for="studID">Student ID</label>
				<input id="studID" size="30" maxlength="7" type="text" pattern="[A-Za-z]{2}[0-9]{5}" title="AB12345" name="studID" disabled value=<?php echo $_SESSION["studID"]?>>
			</div>
			<div class="field">
				<label for="email">E-mail</label>
				<input id="email" size="30" maxlength="255" type="email" name="email" required value=<?php echo getEmail()?>>
			</div>
			<div class="field">
				  <label for="major">Major</label>
				  <select id="major" name = "major">
					<option <?php if($_SESSION["major"] == 'CMPE'){echo("selected");}?>>Computer Engineering</option>
					<option <?php if($_SESSION["major"] == 'CMSC'){echo("selected");}?>>Computer Science</option>
					<option <?php if($_SESSION["major"] == 'MENG'){echo("selected");}?>>Mechanical Engineering</option>
					<option <?php if($_SESSION["major"] == 'CENG'){echo("selected");}?>>Chemical Engineering</option>
<!-- someday
					<option <?php if(getMajor() == 'Africana Studies'){echo("selected");}?>>Africana Studies</option>
					<option <?php if(getMajor() == 'American Studies'){echo("selected");}?>>American Studies</option>
					<option <?php if(getMajor() == 'Ancient Studies'){echo("selected");}?>>Ancient Studies</option>
					<option <?php if(getMajor() == 'Anthropology'){echo("selected");}?>>Anthropology</option>
					<option <?php if(getMajor() == 'Asian Studies'){echo("selected");}?>>Asian Studies</option>
					<option <?php if(getMajor() == 'Biochemistry and Molecular Biology'){echo("selected");}?>>Biochemistry and Molecular Biology</option>
					<option <?php if(getMajor() == 'Bioinformatics and Computational Biology'){echo("selected");}?>>Bioinformatics and Computational Biology</option>
					<option <?php if(getMajor() == 'Biological Sciences'){echo("selected");}?>>Biological Sciences</option>
					<option <?php if(getMajor() == 'Business Technology Administration'){echo("selected");}?>>Business Technology Administration</option>
					<option <?php if(getMajor() == 'Chemistry'){echo("selected");}?>>Chemistry</option>
					<option <?php if(getMajor() == 'Dance'){echo("selected");}?>>Dance</option>
					<option <?php if(getMajor() == 'Economics'){echo("selected");}?>>Economics</option>
					<option <?php if(getMajor() == 'Financial Economics'){echo("selected");}?>>Financial Economics</option>
					<option <?php if(getMajor() == 'Emergency Health Services'){echo("selected");}?>>Emergency Health Services</option>
					<option <?php if(getMajor() == 'English'){echo("selected");}?>>English</option>
					<option <?php if(getMajor() == 'Environmental Science and Environmental Studies'){echo("selected");}?>>Environmental Science and Environmental Studies</option>
					<option <?php if(getMajor() == 'Gender and Womens Studies'){echo("selected");}?>>Gender and Womens Studies</option>
					<option <?php if(getMajor() == 'Geography'){echo("selected");}?>>Geography</option>
					<option <?php if(getMajor() == 'Global Studies'){echo("selected");}?>>Global Studies</option>
					<option <?php if(getMajor() == 'Health Administration and Policy'){echo("selected");}?>>Health Administration and Policy</option>
					<option <?php if(getMajor() == 'History'){echo("selected");}?>>History</option>
					<option <?php if(getMajor() == 'Information Systems'){echo("selected");}?>>Information Systems</option>
					<option <?php if(getMajor() == 'Interdisciplinary Studies'){echo("selected");}?>>Interdisciplinary Studies</option>
					<option <?php if(getMajor() == 'Management of Aging Services'){echo("selected");}?>>Management of Aging Services</option>
					<option <?php if(getMajor() == 'Mathematics'){echo("selected");}?>>Mathematics</option>
					<option <?php if(getMajor() == 'Statistics'){echo("selected");}?>>Statistics</option>
					<option <?php if(getMajor() == 'Media and Communication Studies'){echo("selected");}?>>Media and Communication Studies</option>
					<option <?php if(getMajor() == 'Modern Languages, Linguistics and Intercultural Communication'){echo("selected");}?>>Modern Languages, Linguistics and Intercultural Communication</option>
					<option <?php if(getMajor() == 'Music'){echo("selected");}?>>Music</option>
					<option <?php if(getMajor() == 'Philosophy'){echo("selected");}?>>Philosophy</option>
					<option <?php if(getMajor() == 'Physics'){echo("selected");}?>>Physics</option>
					<option <?php if(getMajor() == 'Political Sciences'){echo("selected");}?>>Political Science</option>
					<option <?php if(getMajor() == 'Psychology'){echo("selected");}?>>Psychology</option>
					<option <?php if(getMajor() == 'Social Work'){echo("selected");}?>>Social Work</option>
					<option <?php if(getMajor() == 'Sociology'){echo("selected");}?>>Sociology</option>
					<option <?php if(getMajor() == 'Theatre'){echo("selected");}?>>Theatre</option>
					<option <?php if(getMajor() == 'Visual Arts'){echo("selected");}?>>Visual Arts</option>
					<option <?php if(getMajor() == 'Undecided'){echo("selected");}?>>Undecided</option>
					<option <?php if(getMajor() == 'Other'){echo("selected");}?>>Other</option>
-->
					</select>
			</div>
			<div class="nextButton">
				<input type="submit" name="save" class="button large go" value="Save">
			</div>
			</div>
		</form>
  </body>
  
</html>
