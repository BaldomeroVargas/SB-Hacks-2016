<html>
<body>
  <?php

function reg_user(){
	if(strcmp($_POST['password'], $_POST['confirmpassword']) != 0){
		echo "Error: Please confirm password";
	}
	else{
	     $servername = "localhost";
	     $user = "root";
	     $pass = "39632hd";
	     $dbname = "Database One";

	     //Create connection

	     $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);

	     $stmt = $pdo->prepare("INSERT INTO Users (username, password, first_name, last_name, avatar_id) VALUES		(:username, :password, :first_name, :last_name, 0)");

		$stmt->bindParam(':username', $_POST['username']);
		$stmt->bindParam(':password', $_POST['password']);
		$stmt->bindParam(':first_name', $_POST['firstname']);
		$stmt->bindParam(':last_name', $_POST['lastname']);

	     $stmt->execute();
	     
	     echo "You have now registered!";
	}
}

reg_user();
?>
</body>
</html>
