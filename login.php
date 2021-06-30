<?php

session_start();
include ('loginprocess.php');


// /**
//  * Start the session.
//  */
// session_start();

// /**
//  * Include our MySQL connection.
//  */
// require 'config.php';


// //If the POST var "login" exists (our submit button), then we can
// //assume that the user has submitted the login form.
// if(isset($_POST['signin'])){
    
//     //Retrieve the field values from our login form.
//     $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
//     $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
//     //Retrieve the user account information for the given username.
//     $sql = "SELECT id, username, password FROM users WHERE username = :username";
//     $stmt = $pdo->prepare($sql);
    
//     //Bind value.
//     $stmt->bindValue(':username', $username);
    
//     //Execute.
//     $stmt->execute();
    
//     //Fetch row.
//     $username = $stmt->fetch(PDO::FETCH_ASSOC);
    
//     //If $row is FALSE.
//     if($username === false){
//         //Could not find a user with that username!
//         //PS: You might want to handle this error in a more user-friendly manner!
//         die('Incorrect username / password combination!');
//     } else{
//         //User account found. Check to see if the given password matches the
//         //password hash that we stored in our users table.
        
//         //Compare the passwords.
//         $validPassword = password_verify($passwordAttempt, $username['password']);
        
//         //If $validPassword is TRUE, the login has been successful.
//         if($validPassword){
            
//             //Provide the user with a login session.
//             $_SESSION['user_id'] = $user['id'];
//             $_SESSION['logged_in'] = time();
            
//             //Redirect to our protected page, which we called home.php
//             header('Location: profile.php');
//             exit;
            
//         } else{
//             //$validPassword was FALSE. Passwords do not match.
//             die('Incorrect username / password combination!');
//         }
//     }
    
// }

// if(isset($_SESSION['userlogin'])){
//     header("Location: profile.php");
// }

// if(isset($_POST) & !empty($_POST)){
//     // PHP Form Validations
//     if(empty($_POST['email'])){ $errors[]="User Name / E-Mail field is Required"; }
//     if(empty($_POST['password'])){ $errors[]="Password field is Required"; }
// }

//     if(!empty($errors)){
//         echo "<div class='alert alert-danger'>";
//         foreach ($errors as $error) {
//             echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
//         }
//         echo "</div>";
//     }
    

?>





        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>LOGIN</title>

            <!-- Font Icon -->
            <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

            <!-- Main css -->
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>

            <div class="main">

                <section class="signup">
                    <!-- <img src="images/signup-bg.jpg" alt=""> -->
                    <div class="container">
                        <div class="signup-content">
                            <form method="POST" id="signup-form" class="signup-form">
                                <h2 class="form-title">LOGIN</h2>
                              
                                <div class="form-group">
                                    <input type="text" class="form-input" name="username" id="username" placeholder="Your Username" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="signin" id="submit" class="form-submit" value="signin"/>
                                </div>
                            </form>
                            <p class="Signup here">
                                Don't have an account ? <a href="reg.php" class="loginhere-link">Signup here</a>
                            </p>
                        </div>
                    </div>
                </section>

            </div>

            <!-- JS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="js/main.js"></script>
            <script type="text/javascript">

    //         $(function(){
	// 	        $('#submit').click(function(e){

	// 		var valid = this.form.checkValidity();

	// 		if(valid){
	// 			var username = $('#email').val();
	// 			var password = $('#password').val();
	// 		}

	// 		e.preventDefault();

	// 		$.ajax({
	// 			type: 'POST',
	// 			url: 'loginprocess.php',
	// 			data:  {email: email, password: password},
	// 			success: function(data){
	// 				alert(data);
	// 				if($.trim(data) === "1"){
	// 					setTimeout(' window.location.href =  "profile.php"', 1000);
	// 				}
	// 			},
	// 			error: function(data){
	// 				alert('there were erros while doing the operation.');
	// 			}
	// 		});

	// 	});
	// }); 
            
            </script>
        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
        </html>