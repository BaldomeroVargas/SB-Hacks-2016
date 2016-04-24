<html>
<body>
  <?php
  
function read_data_base(){
	
	
}

function reg_user(){
	$uname = $_POST['username'];
	#checking the password constraints for size 6-32
	if(strlen($uname) < 6 or strlen($uname) > 32){
		echo "Error: Please make an appropriate sized password<br>";
	}
	else{
		$low = false; $up = false; $dig = false;
		for($i = 0; $i < strlen($uname);$i++){
			#checking if one upper/lower case and number
			if(ctype_lower($uname{$i})){
				$low = true;
			}
			elseif(ctype_upper($uname{$i})){
				$up = true;
			}
			elseif(ctype_digit($uname{$i})){
				$dig = true;
			}
		}	
		#check if all conditione met
		if(!($low and $up and $dig)){
			echo "Error: Please make sure all conditions are met for password<br>";
		}
		else{
				#checking if input passwords match
				if(strcmp($_POST['password'], $_POST['confirmpassword']) != 0){
					echo "Error: Please confirm password<br>";
				}
				else{
					#creates a new user
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
		}
	
}

reg_user();
?>
</body>
</html>
