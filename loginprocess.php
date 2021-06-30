<?php

$db_user = "root";
$db_pass = '';
$dsn = 'mysql:host=localhost;dbname=demo';

$pdo = new PDO($dsn, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['signin']))
{

	if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
 
		// if(filter_var($username, FILTER_VALIDATE_USERNAME))
		// {
			$sql = "select * from users where username = :username ";
			$handle = $pdo->prepare($sql);
			$params = ['username'=>$username];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				

				// if(password_verify($password, $getRow['password']))
				if($password == $getRow['password'])
				{

					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:profile.php');
					exit();
				}
				else
				{
					$errors[] = "Wrong username or Password";
				}
			}
			else
			{
				$errors[] = "Wrong username or Password";
			}
			
		// // }
		// else
		// {
		// 	$errors[] = "username address is not valid";	
		// }
 
	}
	else
	{
		$errors[] = "username and Password are required";	
	}
 
}





// if(isset($_POST{'signin'})){
//      $username          = $_POST['username'];
//      $password          = ($_POST['password']);

// 	$username = !empty($_POST['username']) ? trim($_POST['username']) : null;
//     $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

//     $sql = "SELECT id, username, password FROM users WHERE username = :username";
//     $stmt = $pdo->prepare($sql);
    
//     //Bind value.
//     $stmt->bindValue(':username', $username);
    
//     //Execute.
//     $stmt->execute();
    
//     //Fetch row.
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);
    

//    //If $row is FALSE.
//    if($user === false){
// 	//Could not find a user with that username!
// 	//PS: You might want to handle this error in a more user-friendly manner!
// 	die('Incorrect username / password combination!');
// } else{
// 	//User account found. Check to see if the given password matches the
// 	//password hash that we stored in our users table.
	
// 	//Compare the passwords.
// 	$validPassword = password_verify($passwordAttempt, $user['password']);
	
// 	//If $validPassword is TRUE, the login has been successful.
// 	if($validPassword){
		
// 		//Provide the user with a login session.
// 		$_SESSION['user_id'] = $user['id'];
// 		$_SESSION['logged_in'] = time();
		
// 		//Redirect to our protected page, which we called home.php
// 		header('Location: profile.php');
// 		exit;
		
// 	} else{
// 		//$validPassword was FALSE. Passwords do not match.
// 		die('Incorrect username / password combination!');
// 	}
// }

// }







?>