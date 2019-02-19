<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}/*<option value="Home">
    <option value="Library">
    <option value="Calender">
    <option value="Research">
    <option value="Alumni">
	<option value="Staff Login">
	<option value="Student Login">
	<option value="Student Registration">
	<option value="Result">
	<option value="Admin">
	<option value="Announcement">
	<option value="contact us">*/
$val = test_input($_GET['browser']);
if(preg_match("/Library/",$val))
{
	header("location:library.php");
}
if(preg_match("/Calender/",$val))
{
	header("location:calender.php");
}
if(preg_match("/Research/",$val))
{
	header("location:research.php");
}
if(preg_match("/Alumni/",$val))
{
	header("location:alumni.php");
}
if(preg_match("/Student Login/",$val))
{
	header("location:studentlogin.php");
}
if(preg_match("/Student Registration/",$val))
{
	header("location:registration.php");
}
if(preg_match("/Result/",$val))
{
	header("location:result.php");
}
if(preg_match("/Admin/",$val))
{
	header("location:admin.php");
}
if(preg_match("/Announcement/",$val))
{
	header("location:announcement.php");
}
if(preg_match("/Contact Us/",$val))
{
	header("location:contact.php");
}
?>
