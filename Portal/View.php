<html>
<head>
<title>View from Database</title>
</head>
<body>
<table float="center" border="10"  width="1000" height="100" bordercolor="brown" cellborder="3" cellpadding="5" style="margin: 0px auto;>
<h2 class="Success"><?php echo @$_GET['Updated'];?></h2>
<h2 style="font-size:20px"><marquee direction="right" scrollamount="5" behaviour="scroll">Upcoming Companies<u></marquee></h2>

<tr>
<th>ID</th>
<th>Company Name</th>
<th>Criteria</th>
<th>Post Name</th>
<th>Vacancies</th>
<th>About COmpany</th>
<th>Last date to register</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('project',$Connection);
$ViewQuery="SELECT * from details";
$Execute=mysql_query($ViewQuery);
while($DataRows=mysql_fetch_array($Execute))
{
	$ID=$DataRows['ID'];
	$NAME=$DataRows['NAME'];
	$CRITERIA=$DataRows['CRITERIA'];
	$POST_NAME=$DataRows['POST_NAME'];
	$VACANCIES=$DataRows['VACANCIES'];
	$ABOUT_COMPANY=$DataRows['ABOUT_COMPANY'];
	$DATE=$DataRows['DATE'];


?>
<tr>
<td><?php echo $ID; ?></td>
<td><?php echo $NAME; ?></td>
<td><?php echo $CRITERIA;?></td>
<td><?php echo $POST_NAME;?></td>
<td><?php echo $VACANCIES;?></td>
<td><?php echo $ABOUT_COMPANY;?></td>
<td><?php echo $DATE;?></td>
<td><a href="Delete.php?Delete=<?php echo $ID;?>">Delete</a></td>
<td><a href="Update.php?Update=<?php echo $ID?>">Update</a></td>
</tr>

<?php }?>
</table>
<h2 style="color:red;text-align:center"><a href="Insert.php">Click to Add New Company</a></h2>

</body>
</html>