<html>
<head>
        <style type="text/css">
                #can{position:relative;margin-left:100px;margin-top:-30px;}
                #save{position:fixed;}
        </style>
</head>
<body>
<?php
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query1=mysql_query("insert into addd (username,age) values('$name','$age')");
//echo "insert into addd values('$name','$age')";
if($query1)
{
header("location:list.php");
}
}       
?>
<fieldset style="width:300px;">
<form method="post" action="">
Username: <input type="text" name="name"><br>
Age: <input type="text" name="age"><br>
<br>
<input type="submit" name="submit" id="save" value="Save">
</form>
<a href="list.php"><button id="can">Cancel</button></a>
</fieldset>
</body>
</html>
