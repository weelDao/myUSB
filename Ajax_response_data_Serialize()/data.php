<?php
/*if(isset($_POST['name']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];

echo $name."&nbsp;&nbsp;&nbsp;";
echo $pass;
}*/
$query=mysql_connect("localhost","root","");
mysql_select_db("weelDaw",$query);


if(!empty($_POST['name']) && !empty($_POST['pass'])){
$name=$_POST['name'];
$pass=$_POST['pass'];

mysql_query("insert into serialize(username,password) values ('$name','$pass') ");
$result=mysql_query("select * from serialize");

echo "
        <table>
            <tr>
                <th>Users</th>
                <th>ID</th>
              </tr>
";

while($row=mysql_fetch_array($result)){
/*echo "&nbsp;"."Users !"."<br/><br/>";

echo $name."&nbsp;&nbsp;&nbsp;";
echo $pass;*/

  echo"        
              <tr>
               <td>".$row['username']."</td>
               <td>".$row['id']."</td>
              </tr>
";
}
echo " </table>";



}
else{
        echo "Dont Leave empty !";
  }
?>
