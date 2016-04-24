<html>
<body>
	<?php
include("users.php");

function check_user() {
	$user = new Users();
	return $user->save(
		$_POST['username'],
		$_POST['password'],
		$_POST['firstname'],
		$_POST['lastname']
	);
}

?>
</body>
</html> 
