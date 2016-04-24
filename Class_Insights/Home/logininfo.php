<html>
<body>
<?php
include("users.php");
echo "hi<br>";
function check_user() {
	$user = new Users();
	return $user->getOne($_POST['username']);
}

$result = check_user();
var_dump($result);
echo "bye<br>";
?>
</body>
</html> 
