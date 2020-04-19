<html>
<body>
<h1>index.php</h1>
<h2>Superglobals:</h2>
$_REQUEST:
<?php print_r($_REQUEST)?>
<br>
$_GET:
<?php print_r($_GET)?>
<br>
$_POST:
<?php print_r($_POST)?>
<h2>Forms:</h2>
<form method="get" action="handle_get.php">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>
<form method="post">
POST Form: <input type="text" name="post_name">
<input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>
</body>
</html>