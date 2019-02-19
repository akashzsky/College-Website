<!DOCTYPE html>
<html>
<head>
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
<div style="padding-left:85%;">
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
<li><a href="registration.php">||NEW USERS REGISTER HERE||a></li>
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
// define variables and set to empty values
$idErr  = $passwordErr = "";
$id = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
  if (empty($_POST["id"])) {
    $idErr = "Id number is required";
  } else {
    $id = test_input($_POST["id"]);
  }

 if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if((!empty($_POST["password"])) and (!empty($_POST["id"])))
{
$user = $id;
$conn = new mysqli("localhost","root","","college_database");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$que1="select * from userprofile where RollNo='$user'and Password='$password'";
	$count1=$conn->query($que1);
	if($count1->num_rows!=0)
	{
		session_start();
		$_SESSION['user']=$id;
		echo'<script language="javascript">alert(" WELCOME STUDENT !!! ");
	window.location.href="web.php";</script>';
	}
	else
	{
		echo ("<h2 style = \"padding-left: 0px;color:red;\">wrong password or Roll No!!!!</h2>");
		$id=$password = "";
		
	}
}
if(isset($_SESSION['user']))
{
	echo'<script language="javascript">alert("Already logged in !!! ");
	window.location.href="web.php";</script>';

}

?>
<h3 style = "color:green;font-size:200%;">Student Login</h3>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Roll Number: <input type="text" name="id" value="<?php echo $id;?>">
  <span class="error">* <?php echo $idErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>

  
  <input type="submit" name="submit" value="login">  
</form>
</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>
</html>

