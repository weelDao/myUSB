<html>
<head>
<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>
</head>
<body>
<center>
<br/><br/>
<a href="add.php">Add_New</a>
<br/><br/>
<?php
include('config.php');
$query1=mysql_query("select username, age, id from addd");
echo "<table><tr><td>Username</td><td>Age</td><td></td><td></td>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['username']."</td>";
echo "<td>".$query2['age']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
}
?>
</ol>
</table>
</center>
</body>
</html>
