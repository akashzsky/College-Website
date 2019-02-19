<!DOCTYPE html>
<html>
<head>
<title>The Coding Institute</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
p{
	font-size:80%;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#d1c7c7;
    color: white;
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
<h1 style="padding-left:300px;"> ACADEMIC CALENDAR (SESSION 2016 – 2017)</h1>
          <table  cellspacing="0" cellpadding="0" width="100%" class="tble1" align="left">
    <tbody>
        <th>
          
            <td width="259" colspan="2" style="background-color:#d1c7c7;">
                <p align="center">
                    <strong>ODD SEMESTER</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="282" colspan="2" style="background-color:#d1c7c7;">
                <p align="center">
                    <strong>EVEN SEMESTER</strong>
                    <strong></strong>
                </p>
            </td>
        </th>
        <tr>
            <td width="132">
                <p align="center">
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>UG SEM-I</strong>
                </p>
                
               
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    <strong>UG SEM-II</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p align="center">
                    <strong>COMMENCEMENT</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    2<sup>ND</sup> JANUARY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>TEACHING PERIOD</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="130">
                <p>
                    9<sup>TH</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    2ND JANUARY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    3<sup>RD</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>END SEMESTER EXAM</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    21<sup>ST</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    9<sup>TH</sup> DECEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    15<sup>TH</sup> MAY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    31<sup>ST</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>RESULT PUBLICATION</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 3<sup>RD</sup> WEEK OF JANUARY 2017
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 1<sup>ST</sup> WEEK OF JULY 2017
                </p>
            </td>
        </tr>
    </tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%" class="tble1" align="left">
    <tbody>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    <strong>UG SEM-III </strong>
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    <strong>UG SEM IV</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p align="center">
                    <strong>COMMENCEMENT</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    4<sup>TH</sup> JANUARY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>TEACHING PERIOD</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="130">
                <p>
                    9<sup>TH</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    2<sup>ND</sup> JANUARY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    3<sup>RD</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>END SEMESTER EXAM</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    21<sup>ST</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    9<sup>TH</sup> DECEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    15<sup>TH</sup> MAY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    31<sup>ST</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>RESULT PUBLICATION</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 3<sup>RD</sup> WEEK OF JANUARY 2017
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 1<sup>ST</sup> WEEK OF JULY 2017
                </p>
            </td>
        </tr>
    </tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%" class="tble1" align="left">
    <tbody>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    <strong>UG SEM V </strong>
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    <strong> UG SEM VI </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p align="center">
                    <strong>COMMENCEMENT</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    4<sup>TH</sup> JANUARY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>TEACHING PERIOD</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="130">
                <p>
                    9<sup>TH</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    2<sup>ND</sup> JANUARY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    3<sup>RD</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>END SEMESTER EXAM</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    21<sup>ST</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    9<sup>TH</sup> DECEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    15<sup>TH</sup> MAY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    31<sup>ST</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>RESULT PUBLICATION</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 3<sup>RD</sup> WEEK OF JANUARY 2017
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 1<sup>ST</sup> WEEK OF JULY 2017
                </p>
            </td>
        </tr>
    </tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%" class="tble1" align="left">
    <tbody>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    <strong>PG SEM I</strong>
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    <strong>PG SEM II </strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p align="center">
                    <strong>COMMENCEMENT</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    4<sup>TH</sup> JANUARY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>TEACHING PERIOD</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="130">
                <p>
                    9<sup>TH</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    2<sup>ND</sup> JANUARY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    3<sup>RD</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>END SEMESTER EXAM</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    21<sup>ST</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    9<sup>TH</sup> DECEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    15<sup>TH</sup> MAY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    31<sup>ST</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>RESULT PUBLICATION</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 3<sup>RD</sup> WEEK OF JANUARY 2017
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 1<sup>ST</sup> WEEK OF JULY 2017
                </p>
            </td>
        </tr>
    </tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%" class="tble1" align="left">
    <tbody>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    <strong>PG SEM III</strong>
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    <strong>PG SEM IV</strong>
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p align="center">
                    <strong>COMMENCEMENT</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    4<sup>TH</sup> JANUARY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>TEACHING PERIOD</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    11<sup>TH</sup> JULY 2016
                </p>
            </td>
            <td width="130">
                <p>
                    9<sup>TH</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    2ND JANUARY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    3<sup>RD</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>END SEMESTER EXAM</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="130">
                <p align="center">
                    21<sup>ST</sup> NOVEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    9<sup>TH</sup> DECEMBER 2016
                </p>
            </td>
            <td width="130">
                <p align="center">
                    15<sup>TH</sup> MAY 2017
                </p>
            </td>
            <td width="153">
                <p align="center">
                    31<sup>ST</sup> MAY 2017
                </p>
            </td>
        </tr>
        <tr>
            <td width="132">
                <p>
                    <strong></strong>
                </p>
                <p align="center">
                    <strong>RESULT PUBLICATION</strong>
                    <strong></strong>
                </p>
            </td>
            <td width="259" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 3<sup>RD</sup> WEEK OF JANUARY 2017
                </p>
            </td>
            <td width="282" colspan="2">
                <p align="center">
                    TENTATIVELY WITHIN 1<sup>ST</sup> WEEK OF JULY 2017
                </p>
            </td>
        </tr>
    </tbody>
</table>

</article>
<footer>Copyright &copy; TheCodingInstitute.com</footer>
</body>
</html>

