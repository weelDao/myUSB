<?php

$username = "student1";
$password = "password";
$host = "localhost";
$database = "weelDaw";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());


$query = mysql_query("SELECT image FROM image");
$row = mysql_fetch_array($query);
//for($count=0;$count < $row['image'];$count++){
 //      while($row = mysql_fetch_array($query)){

 header('Content-type: image/jpg');
    echo $row['image']; 

//}
//}
?>
