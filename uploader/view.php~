<h3>Image Uploaded:</h3>

	
<?php	
	$wing=mysql_connect("localhost","student1","password") or die ("Cannot connect !".mysql_error());
        mysql_select_db("weelDaw",$wing);
        
        $sql=mysql_query("Select * from images");
        
     while($row=mysql_fetch_array($sql)){
       
       
        $imageId=$row['id'];
       
       	
?>

<html>
	<head>
		<title>Upload image to mysql database.</title>
		<style type="text/css">
			img{
				margin: .2em;
				border: 1px solid #555;
				padding: .2em;
				vertical-align: top;
			}
			h3{
			        height:25px;
			        width:180px;
			        margin-left:500px;
			        color:red;
			        border:1px solid green;
			        background-color:pink; 
			
			}
		</style>
	</head>
	<body>	
			<div>
				<img src="image.php?id=<?=$imageId ?>" width="150px">
				<strong>Embed</strong>: <input size="25" value='<img src="image.php?id=<?=$row[id] ?>">'>
			</div>

			<hr>

	</body>
</html>

<?}?> 





