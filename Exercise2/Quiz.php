<?php
	$Q1 = $_POST['Q1C'];
	$Q2 = $_POST['Q2C'];
	$Q3 = $_POST['Q3C'];
	$Q4 = $_POST['Q4C'];
	$Q5 = $_POST['Q5C'];
	$score=0;
	if($Q1=="Topeka")
	{
		$score++;
	}
	if($Q2=="Sacramento")
	{
		$score++;
	}
	if($Q3=="Salem")
	{
		$score++;
	}
	if($Q4=="Olympia")
	{
		$score++;
	}
	if($Q5=="Oklahoma City")
	{
		$score++;
	}
	$percentage=($score/5)*100;
	echo "
	<header>Question 1: What is the capital of Kansas?</header>
		<p> You answered: {$Q1}</p>
		<p> Correct answer: Topeka</p>
	<header>Question 2: What is the capital of California?</header>
		<p> You answered: {$Q2}</p>
		<p> Correct answer: Sacramento</p>
	<header>Question 3: What is the capital of Oregon?</header>
		<p> You answered: {$Q3}</p>
		<p> Correct answer: Salem</p>
	<header>Question 4: What is the capital of Washington?</header>
		<p> You answered: {$Q4}</p>
		<p> Correct answer: Olympia</p>
	<header>Question 5: What is the capital of Oklahoma?</header>
		<p> You answered: {$Q5}</p>
		<p> Correct answer: Oklahoma City</p>
		<p>Total Correct: {$score}/5</p>
		<p>Total Percentage: {$percentage}%</p>";
?>
