<html>
<head>
<title>Congratulations </title>
<style type="text/css"> 
body{ 
	background-color: #8ee6c1;

}

ul {
	list-style-type: none;
	margin: 0;
	padding:20px 5px 15px 270px;
}

li {
	display: inline;
	padding: 8px;
}

</style>
</head>
<body>
<ul>
			<li><a href="index.php">Assignment 1</a></li>
			<li><a href="assignment2.php">Assignment 2</a></li>
			<li><a href="assignment3.php">Assignment 3</a></li>
			<li><a href="../ECT436_Assignment1/deliverable_a.php">Project Deliverable A</a></li>
			<li><a href="signup.php">Assignment 4</a></li>
			<li><a href="../ECT436_Assignment1/deliverable_b.php">Project Deliverable B</a></li>
</ul>
<h1>Congratulations!!!!</h1>

<?php
     $firstData = filter_input(INPUT_GET, "firstName");
	 $secondData = filter_input(INPUT_GET, "lastName"); 
	 $ageData = filter_input(INPUT_GET, "age");
     print "<h3>Hello, " . $firstData . " " . $secondData .  ". At age " . $ageData . ", 
	 You win a free t-shirt!</p>";
 ?>

</body>
</html>