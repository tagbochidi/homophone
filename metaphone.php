<?php
if(isset($_POST['submit'])){
	function sound(){
$str=$_POST['ho1'];
$str2=$_POST['ho2'];

echo metaphone($str);
echo "<br>";
echo metaphone($str2);
echo "<br>";
echo "<br>";

echo soundex($str);
echo "<br>";
echo soundex($str2);
}
sound();

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homophone detector</title>
	<style type="text/css">
		.text{
			/*border-radius: 20px;*/
		}
		.submit{
			background-color: rgb(25, 161, 95);
			color: white;
			border-radius: 20px;
		}
		.submit:hover{
			cursor: pointer;
			color: rgb(25, 161, 95);
			background-color: white;
		}
		.submit:active{
			cursor: progress;
			background-color: orange;
			color: white;
		}
	</style>
</head>
<body>

	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
		<input type="text" name="ho1" class="text" placeholder="Type a word">
		<input type="text" name="ho2" class="text" placeholder="Type a word"><br><br>
		<input type="submit" name="submit" value="CHECK" class="submit">

	</form>
</body>
</html>