<html>
<body>
<form method="Post" action="applySettings.php">
<?php
$conn=mysqli_connect("localhost","root","","clients");
if($conn->connect_error){
	die("fatal error");
}

$query="SELECT * FROM users WHERE id=".$_GET["id"];
$results=$conn->query($query);
if(!$results){die("error in the query");}
while($row=$results->fetch_array(MYSQLI_ASSOC)){
	echo "<input type=hidden name=id value=".$row["id"]."><br>";
	echo "<input type=text name=email value=\"".$row["email"]."\"><br>";
    echo "<input type=text name=password value=\"".$row["password"]."\"><br>";
    echo "<input type=text name=number value=\"".$row["phone_Number"]."\"><br>";
echo"ba7baaaaakkakakaka";
}
?>
<input type=submit>
</form>
</body>
</html>