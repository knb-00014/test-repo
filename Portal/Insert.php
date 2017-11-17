<?php
if(isset($_POST["Submit"]))
{
	$NAME=$_POST["NAME"];
	$CRITERIA=$_POST["CRITERIA"];
	$POST_NAME=$_POST["POST_NAME"];
	$VACANCIES=$_POST["VACANCIES"];
	$ABOUT_COMPANY=$_POST["ABOUT_COMPANY"];
	$DATE=$_POST["DATE"];
	
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('project',$Connection);
$Query="INSERT INTO details(NAME,CRITERIA,POST_NAME,VACANCIES,ABOUT_COMPANY,DATE)VALUES('$NAME','$CRITERIA','$POST_NAME','$VACANCIES','$ABOUT_COMPANY','$DATE')";
$Execute=mysql_query($Query);
}
?>
<html>
<head>
<title>Insert Into Database </title>
</head>
<style type="text/css">
input[type="text"],textarea
{
	border:1px solid dashed;
	background-color: rgb(221,226,312);
	width:480px;
	padding:.5em;
	font_size:1.0em;
}
input[type="Submit"]
{
  background: #8934d9;
  background-image: -webkit-linear-gradient(top, #8934d9, #080808);
  background-image: -moz-linear-gradient(top, #8934d9, #080808);
  background-image: -ms-linear-gradient(top, #8934d9, #080808);
  background-image: -o-linear-gradient(top, #8934d9, #080808);
  background-image: linear-gradient(to bottom, #8934d9, #080808);
  -webkit-border-radius: 20;
  -moz-border-radius: 20;
  border-radius: 20px;
  -webkit-box-shadow: 19px 1px 18px #666666;
  -moz-box-shadow: 19px 1px 18px #666666;
  box-shadow: 19px 1px 18px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 36px;
  padding: 10px 20px 8px 20px;
  text-decoration: none;
}
fieldset
{
  background-color:#CCC;
  max-width:500px;
  padding:16px;	
}
.leg
{
  margin-bottom:0px;
  margin-left:16px;
}
body{background-color:wheat;}
</style>
<body>
<h2 style="font-size:20px"><marquee direction="right" scrollamount="5" behaviour="scroll"> Add A New Company<u></marquee></h2>

<div class="leg">
<form action="Insert.php" method="post">
<fieldset style="margin: 0px auto;>
<span class="FieldInfo">COMPANY NAME:</span><br><input type="text" Name="NAME" value=""><br>
<span class="FieldInfo">CRITERIA:</span><br><input type="text" Name="CRITERIA" value=""><br>
<span class="FieldInfo">HIRING FOR THE POST OF:</span><br><input type="text" Name="POST_NAME" value=""><br>
<span class="FieldInfo">NUMBER OF VACANCIES:</span><br><input type="text" Name="VACANCIES" value=""><br>
<span class="FieldInfo">ABOUT COMPANY:</span><br><textarea Name="ABOUT_COMPANY" ></textarea><br>
<span class="FieldInfo">LAST DATE TO REGISTER:</span><br><input type="text" Name="DATE" value=""><br>
<br><input type="Submit" Name="Submit" value="Add"><br>
</fieldset>
</div>
<h2 style="color:red;text-align:center"><a href="View.php">Upcoming Drives</a></h2>

<?php


?>
</body>
</html>