<html>
<body>
<?php
include("users.php");

function check_user() {
	$user = new Users();
	return $user->check($_POST['username'], $_POST['password']);
}

if(check_user()){
	echo "Successful login!";
}
else{
	echo "Error: Username or password is incorrect";
}

?>
</body>
</html> 
