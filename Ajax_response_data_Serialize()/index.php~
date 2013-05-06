<html>
<head>
<script src="googleapis.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
var form2=$("#form1").serialize();
$.ajax({
type: "POST",
url: "data.php",
data: form2,
success: function(html)
{
//alert("success !");
$("#load").html(html);

}
});
return false;
});
});
</script>
</head>
<body>
<form method="post" action="" id="form1">
Username: <input type="text" name="name" id="name" /><br />
Password:<input type="password" name="pass" id="pass"/><br />
<input type="submit" name="submit" id="submit" /><br />
<div id="load"></div>
</form>
</body>
</html>
