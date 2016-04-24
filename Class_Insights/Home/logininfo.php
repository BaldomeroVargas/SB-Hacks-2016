<html>
<body>
<?php
include("users.php");

function check_user() {

	$servername = "localhost";
	$user = "root";
	$pass = "39632hd";
	$dbname = "Database One";

	//Create connection

	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);

	$user1 = new Users();
	if($user1->check($_POST['username'], $_POST['password'])){
		$stmt = $pdo->prepare("DELETE FROM `Cloud` WHERE 1");
		$stmt->execute();

		$stmt = $pdo->prepare("INSERT INTO Cloud(uname, sid) VALUES (:uname,:sid)");
		$stmt->bindParam(':uname', $_POST['username']);
		$stmt->bindParam(':sid', $sid);
		$stmt->execute();
	}
	return $user1->check($_POST['username'], $_POST['password']);
}
			
//Create connection

if(check_user()){
<<<<<<< HEAD
	if(sleep(3)){
	echo "Successful Login";
	}
	else{
	header("Location: ../indexc.html");
	}
=======
	echo "Successful login!";
	header("Location: indexc.html")
>>>>>>> 62fe203156119bf695b0e37822e9328d7620d9b6
}
else{
	echo "Error: Username or password is incorrect";
	sleep(2);
	header("Location: loginf.html");
}

?>
</body>
</html> 
