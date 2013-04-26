<script type="text/javascript" src="jquery.js"></script>
<script>
jQuery(function($) {
 $("form input[id='check_all']").click(function() { // triggred check

   var inputs = $("form input[type='checkbox']"); // get the checkbox

   for(var i = 0; i < inputs.length; i++) { // count input tag in the form
   var type = inputs[i].getAttribute("type"); //  get the type attribute
    if(type == "checkbox") {
     if(this.checked) {
      inputs[i].checked = true; // checked
     } else {
      inputs[i].checked = false; // unchecked
       }
    }
  }
 });

  $("form input[id='delete']").click(function() {  // triggred submit

   var count_checked = $("[name='checkbox[]']:checked").length; // count the checked
  if(count_checked == 0) {
   alert("Please select a product(s) to delete.");
   return false;
  }
  if(count_checked == 1) {
   return confirm("Are you sure you want to delete these product?");
  } else {
   return confirm("Are you sure you want to delete these products?");
    }
 });
}); // jquery end


</script>
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="weelDaw"; 
$tbl_name="contact";


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>&nbsp;</td>
<td><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td>Check All <input type="checkbox" id="check_all" value=""></td>
<td><strong>Id</strong></td>
<td><strong>Name</strong></td>
<td><strong>Lastname</strong></td>
<td><strong>Email</strong></td>

</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
<td><? echo $rows['id']; ?></td>
<td><? echo $rows['name']; ?></td>
<td><? echo $rows['lastname']; ?></td>
<td><? echo $rows['email']; ?></td>
</tr>

<?php
}
?>

<tr>
<td><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>

<?php

// Check if delete button active, start this 
if(isset($_POST['delete'])){
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id=$_POST['checkbox'][$i];
$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
$result = mysql_query($sql);
}
// if successful redirect to delete_multiple.php 
if($result){
echo "Successfully deleted !";//echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
}
mysql_close();
?>

</table>
</form>
</td>
</tr>
</table>
