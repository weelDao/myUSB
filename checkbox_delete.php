<html>
<head>

<title>Links Page</title>

</head>

<body>

<h2>Choose and delete selected links.</h2>

<?php

$dbc = mysqli_connect('localhost','root','','weelDaw')
or die('Error connecting to MySQL server');

$query = "select * from contact";

$result = mysqli_query($dbc,$query)
or die('Error querying database');

$count=mysqli_num_rows($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Message_ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Message</strong></td>
</tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['del_id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['msg_id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['email']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['msg']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete"></td>
</tr>
<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
 <tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="3" bgcolor="#FFFFFF"><strong>Delete multiple links</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Message_ID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Message</strong></td>
 </tr>

<?php

while ($row=mysqli_fetch_array($result)) {
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox" type="checkbox" value="<?php echo $row['del_id']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $row['msg_id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['name']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['email']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $row['msg']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" value="Delete"></td>
</tr>



<?php

// Check if delete button active, start this 

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM contact WHERE del_id='$del_id'";
$result = mysqli_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
//echo "<meta http-equiv=\"refresh\" content=\"0;URL=view_links.php\">";
echo "Successfully deleted ... !";
}
 }

mysqli_close($dbc);

?>

</table>
</form>
</td>
</tr>
</table>

</body>

</html>

