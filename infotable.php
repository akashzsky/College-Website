<!DOCTYPE html>
<html>
<head>
<style>
table.tblresults {
    width:100%;
    *width:99.5%;
    border: 1px solid #b9b8b8;
    top: 0;
}
table.tblresults tr.tblresultshdr {background: lightgrey;}
table.tblresults tr.tblresultshdr td {padding: 6px;}
table.tblresults td {padding: 8px; border: 1px solid #b9b8b8;}
table.tblresults td.col1 {width: 20%;}
table.tblresults td.col2 {width: 10%;}
table.tblresults td.col3 {width: 13%;}


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
$sql="select * from userprofile";
$results=$con->query($sql);
if($results->num_rows>0)
{
echo "<table class=\"tblresults txtblack\" style = \"background-color: #ccc;\">
<tr><td class=\"col2\"><b>Student ID</b></td>
<td class=\"col1\"><b>Student Name</b></td>
<td class=\"col1\"><b>Password</b></td>
<td class=\"col2\"><b>Age</b></td>
<td class=\"col3\"><b>Contact No</b></td>
<td ><b>Roll No</b></td></tr></table>";

while($rows=$results->fetch_assoc())
echo "<table class=\"tblresults txtblack\">
<tr><td class=\"col2\">".$rows["ID"]."</td><td class=\"col1\">".$rows["NAME"]."</td><td class=\"col1\">".$rows["Password"]."</td><td class=\"col2\">".$rows["Age"]."</td><td class=\"col3\">".$rows["Contact"]."</td><td>".$rows["RollNo"]."</td></tr></table>";
}
?>  
</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>