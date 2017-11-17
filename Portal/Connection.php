<html>
<head>
<title>Connection</title>
</head>
<body>
<?php
$Connection=mysql_connect('localhost','root','');
if($Connection)
{
	echo "Connected";
}
else
{
	error.mysql_connect();
}
$Selected=mysql_select_db('project',$Connection);
if($Selected)
{
	echo "DB Connected";
}
else
{
	error.mysql_select_db();
}

?>
</body>
</html>