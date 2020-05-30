<?php 

require 'config.php';

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$success = true;

if(!$connection){
	die("connection failed ".mysqli_error());
	$success = false;
}

if(!$selection){
	die("selection failed ".mysqli_error());
	$success = false;
}

if($success){
	$sql = "SELECT `email`,  `password` FROM `register` WHERE `email` = '$email'";
    $result = $connection->query($sql);

	if ($result->num_rows > 0) {
        // output data of each row
             while($row = $result->fetch_assoc()) {
				//echo $row['email'].  " ".$row['password'];
				if( $row['email'] == $email){
					if($row['password'] == $password){
						$query = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
						$response = @mysqli_query($connection, $query);
						if ($response) {
							echo('LOGIN');
						}else{
							echo mysqli_error($connection);
						}
					}else{
						echo('password');
					}
				}else{
					echo('email');
				}
             }
        } else {
            echo('email');
          }
}
?>
