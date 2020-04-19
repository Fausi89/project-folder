<html>
<body>
<form method="post">
Favorite Color:
<input type="text" name="color">
<br>
Favorite Food:
<input type="text" name="food">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Best food is: <?=$_POST['food'];?></p>
<p>Best color is: <?=$_POST['color'];?></p>
<a href="index.php">Reset</a>
</body>
</html>