<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {    
    border: 1px solid black;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
tr:nth-child(even){background-color: #f2f2f2}

</style>
<title>The Coding Institute</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
.error {color: #FF0000;}
form {
	font-weight: bold;
}
</style>
</head>
<body>
<div style="padding: 10px;">

<img src="logo1.png" alt="College logo" style="width:200px;height:160px;float:left;margin-left:30px;">
<h1 style = "font-size:3em;">The Coding Institute</h1>
<h2> AG-166,Kestopur, Kolkata, West Bengal 700091</h2>
</div>
<div style="padding-left:80%;">
<form action="search.php" method="get">
  <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="Home">
    <option value="Library">
    <option value="Calender">
    <option value="Research">
    <option value="Alumni">
	<option value="Student Login">
	<option value="Student Registration">
	<option value="Result">
	<option value="Admin">
	<option value="Announcement">
	<option value="contact us">
  </datalist>
  <input type="submit" value = "search">
</form>
</div>

<div style= "clear:right">
<span >
<ul>
  <li><a href="web.php">Home</a></li>
  <li><a href="library.php">Library</a></li>
  <li><a href="calender.php">Calender</a></li>
  <li><a href="research.php">Research</a></li>
  <li><a href="alumni.php">Alumni</a></li>
    <li><a href="announcement.php">Announcement</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li style = "float:right;"><?php session_start();if(isset($_SESSION['user'])){echo "<a href=\"logout.php\" >logout</a>" ;}?></li>

</ul>
</span>
</div>
<MARQUEE style="color:red" BGCOLOR=#f5f5f5 >
<li><a href="registration.php">||NEW USERS REGISTER HERE||</a></li>
</MARQUEE>
<nav>
<h2 style = "color:#13a751;padding: 16px;">Quick links</h2>
<ul>
    <li><a href="studentlogin.php">Student Login</a></li>
    <li><a href="registration.php">Student Registration</a></li>
	<li><a href="result.php">Result</a></li>
	<li><a href="admin.php">Admin</a></li>

  </ul>
</nav>
<article>
<?php
//$id=$_POST['id'];
$con=new mySqli("localhost","root","","college_database");
if(!$con)
{
die('could not connect try again :'.mysql_error());
}
$sql="select * from results r inner join userprofile up on r.StudentID=up.ID";
$results=$con->query($sql);
if($results->num_rows>0)
{
echo "<table align=\"centre\">
<tr><td style = \"background-color: #ccc;\"><b>Roll Number</b></td>
<td style = \"background-color: #ccc;\"><b>Name</b></td>
<td style = \"background-color: #ccc;\"><b>CGPA</b></td></tr></table>";
while($rows=$results->fetch_assoc())
echo "<table align=\"centre\">
<tr><td style=\"width:45.2%;\">".$rows["RollNo"]."</td><td style=\"width:26.5%;\">".$rows["NAME"]."</td><td>".$rows["Marks"]."</td></tr></table>";
}
?>  
</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>