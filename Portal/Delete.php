<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('project',$Connection);

$Delete_Record=$_GET['Delete'];
$Delete_Query="DELETE FROM details where ID='$Delete_Record'"; 
$Execute=mysql_query($Delete_Query);
if($Execute)
{
	echo'<script>window.open("View.php?Deleted=Record Deleted","_self")</script>';
	
}
?>