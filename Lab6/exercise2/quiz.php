<!DOCTYPE html>
<html>
<title>Exercise 2</title>
<center><b><h1 font:size=300%>Harvey Ji's KU Quiz</h1></center></b>
<head>
<style>
body {
	background-image: url('kucampus.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
</style>

</head>
<body>
<?php
	error_reporting(E_ALL); 
	ini_set("display_errors", 1); 

	$answer1 = $_POST["Q1"];
	$answer2 = $_POST["Q2"];
	$answer3 = $_POST["Q3"];
	$answer4 = $_POST["Q4"];
	$answer5 = $_POST["Q5"];
	$numCorrect = 5;
	
	echo "Question 1: What year was KU founded? <br> You answered: ".$answer1."<br>The correct answer: 1865<br><br>";
	echo("Question 2: What college football bowl game did KU win in 2008? <br> You answered: ".$answer2."<br>The correct answer: Orange Bowl");
	echo("<p>Question 3: Who did KU beat to win the national championship for men's basketball in 2022? <br> You answered: ".$answer3."<br>The correct answer: North Carolina<p>");
	echo("<p>Question 4: What city is the University of Kansas located in? <br> You answered: ".$answer4."<br>The correct answer: Lawrence<p>");
	echo("<p>Question 5: What is NOT a name of a building on campus? <br> You answered: ".$answer5."<br>The correct answer: Ginsberg<p><br>");
	
	if($answer1 != "1865"){
		$numCorrect--;
	}

	if($answer2 != "Orange Bowl"){
		$numCorrect--;
	}


	if($answer3 != "North Carolina"){
		$numCorrect--;
	}

	if($answer4 != "Lawrence"){
		$numCorrect--;
	}

	if($answer5 != "Ginsberg"){
		$numCorrect--;
	}

	echo("You answered ".$numCorrect." questions correctly<br>");
	$percent=$numCorrect/5*100;
	echo("Quiz grade: ".$percent."%");
	
?>
</body>
</html>