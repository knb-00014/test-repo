<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('project',$Connection);
$Update_Record=$_GET['Update'];
$ShowQuery="SELECT * from details where id='$Update_Record'";
$Update=mysql_query($ShowQuery);
while($DataRows=mysql_fetch_array($Update))
{
	$Update_ID=$DataRows['ID'];
	$NAME=$DataRows['NAME'];
	$CRITERIA=$DataRows['CRITERIA'];
	$POST_NAME=$DataRows['POST_NAME'];
	$VACANCIES=$DataRows['VACANCIES'];
	$ABOUT_COMPANY=$DataRows['ABOUT_COMPANY'];
	$DATE=$DataRows['DATE'];
}
?>
<html>
<head>
<title>Update Into Database </title>
</head>
<h2 style="font-size:20px"><marquee direction="right" scrollamount="5" behaviour="scroll"> Update Company Details<u></marquee></h2>

<style type="text/css">
body{background-color:wheat;}
input[type="text"],textarea
{
	border:1px solid dashed;
	background-color: rgb(221,216,212);
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
</style>
<body>

<div class=leg>
<form action="Update.php?Update_ID=<?php echo $Update_ID;?>" method="Post">
<fieldset style="margin: 0px auto;>
<span class="FieldInfo">COMPANY NAME:</span><br><input type="text" Name="NAME" value="<?php echo $NAME;?>"><br>
<span class="FieldInfo">CRITERIA:</span><br><input type="text" Name="CRITERIA" value="<?php echo $CRITERIA;?>"><br>
<span class="FieldInfo">HIRING FOR THE POST OF:</span><br><input type="text" Name="POST_NAME" value="<?php echo $POST_NAME;?>"><br>
<span class="FieldInfo">NUMBER OF VACANCIES:</span><br><input type="text" Name="VACANCIES" value="<?php echo $VACANCIES;?>"><br>
<span class="FieldInfo">ABOUT COMPANY:</span><br><textarea Name="ABOUT_COMPANY" ><?php echo $ABOUT_COMPANY;?></textarea><br>
<span class="FieldInfo">LAST DATE TO REGISTER:</span><br><input type="text" Name="DATE" value="<?php echo $DATE;?>"><br>

<br><input type="Submit" Name="Submit" value="Submit Your Record"><br>
</fieldset>
</div>
<h2 style="color:red;text-align:center"><a href="View.php">Upcoming Drives</a></h2>
<?php


?>
</body>
<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('project',$Connection);
if(isset($_POST['Submit']))
{
	$Update_ID=$_GET['Update_ID'];
	$NAME=$_POST['NAME'];
	$CRITERIA=$_POST['CRITERIA'];
	$POST_NAME=$_POST['POST_NAME'];
	$VACANCIES=$_POST['VACANCIES'];
	$ABOUT_COMPANY=$_POST['ABOUT_COMPANY'];
	$DATE=$_POST['DATE'];
	$UpdateQuery="UPDATE details SET NAME='$NAME',CRITERIA='$CRITERIA',POST_NAME='$POST_NAME',VACANCIES='$VACANCIES',ABOUT_COMPANY='$ABOUT_COMPANY',DATE='$DATE'
	where ID='$Update_ID'";
	$Execute=mysql_query($UpdateQuery);
	if($Execute)
	{
		function redirect_to($NewLocation)
		{
			header("Location:".$NewLocation);
			exit;
		}
		redirect_to("View.php?Updated=Record Updated");
		
	}
}
?>
</html>