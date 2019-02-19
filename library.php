<!DOCTYPE html>
<html>
<head>
<title>The Coding Institute</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
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
<p>
<img src="images.jpg" alt="College Photo" style="width:1190px;height:500px;">
The Coding Frog Library has a very unique and rich collection of books, periodicals and manuscripts 
as well as multimedia resources built over nearly two hundred years. This includes some of the rarest
 reference materials along with thousands of important documents and journals.The University Library 
 comprises two main units - i.e., - the coding Library, the networking library alongside the individual
 departmental libraries. With the vast stock of old and rare books as well as the growing maintenance 
 demands, plans for further infrastructural development and expansion are underway.</p>
 <p>Mission The primary mission of the library is to support the educational and research programs of the University by providing
 access to rich physical and digital repositories of learning resources. With its rare archives and the most current databases,
 the University library is designed to cater to the University's current and future teaching and research interests.</p>
</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>
</html>

