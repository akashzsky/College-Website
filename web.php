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
	<li><a href="admin1.php">Admin</a></li>

  </ul>
</nav>

<article>
<img src="techno.jpg" alt="College Photo" style="width:1190px;height:500px;">
<p>The Coding Frog Institute is a private Institute in Kolkata, in the state of West Bengal in India. Its campus is in the Kestopor. It was inaugurated on 7 August 2012, by the chief minister of West Bengal,
.The motive of this Institute was to enable students with such coding skills which will give them limitless powers.
This Institute have subjects which are only coding related.</p>
<p> The Coding Fron Institute is now paying students to learn computer programming, rather than charging tuition -- and guaranteeing them jobs when they graduate.</p>
<p>The Virginia-based company, called Revature, is setting up classrooms at college campuses around the country and recruiting college graduates for a free 40-hour-per-week, 12-week crash course in hot skills like Java and data management. The students receive minimum wage during the course. In return, graduates commit to working for Revature for two years, at an annual salary of anywhere from $50,000 to $65,000. (Revature sends its graduates out to work as contract software engineers at firms such as banks, health insurers, retailers and the like.)</p>
<p>Since November, Revature has set up paid immersion classes at two colleges: Arizona State University and Queens College in New York. Company officials say they plan to start offering similar classes at the University of Missouri in June, and George Mason University later in the year. They say they hope to add additional campuses later in the year.</p>
<p>Including another group of college grads that are taking classes at the company's headquarters in Reston, Va. -- and living in a company dorm -- Revature says it is currently paying at least 150 students to learn, and hopes to double that number within a year.</p>
<p>Revature is hardly the only coding bootcamp competing for would-be programmers. But many of its rivals charge high tuition -- some in excess of $15,000 for a three-month program -- and some yield mixed results for their graduates, leaving them stuck with big debt and weak job prospects. (Across the board, Americans now owe more than $1.3 trillion in student loans, an average of about $30,000 for those graduates who have borrowed.) By offering an alternative to the use of student loans to fund higher education, Revature's program has won praise from some students, college officials and educational experts.</p>

<p>Rikki Katz, who graduated with a bachelors in Computer Science from Queens College in 2015, says she was thrilled to get a spot in her alma mater’s first Revature class. She hadn’t been able to land a tech job on her own, in part because she had spent most of her first year after college teaching, rather than programming. “A lot of people think that finding jobs in programming is easy right now. But companies are looking for a lot of experience, which is hard to get,” she says.The $11 hourly wage she received during the class helped her and her husband pay their rent, and meant she didn’t have to take on any additional debt for the skills tuneup. Katz was placed at a programming job at a finance company after she graduated from Revature in March.</p>
</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>
</html>

