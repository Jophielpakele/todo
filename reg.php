<?php
require_once('config.php');
session_start();
include ('regprocess.php');

// if(isset($_POST) & !empty($_POST)){
//     // PHP Form Validations
//     if(empty($_POST['email'])){ $errors[]="E-Mail field is Required"; }
//     if(empty($_POST['password'])){ $errors[]="Password field is Required"; }
// }

// if(!empty($errors)){
//     echo "<div class='alert alert-danger'>";
//     foreach ($errors as $error) {
//         echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;".$error."<br>";
//     }
//     echo "</div>";
// }


?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>REGISTRATION</title>

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
                                <h2 class="form-title">Create account</h2>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="firstname" id="firstname" placeholder="Your First Name" required/>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-input" name="lastname" id="lastname" placeholder="Your Last Name" required/>
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-input" name="username" id="username" placeholder="Username" required/>

                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-input" name="password" id="password" placeholder="Password" required/>
                                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="signup" id="submit" class="form-submit" value="Sign up"/>
                                </div>
                            </form>
                            <p class="loginhere">
                                Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                            </p>
                        </div>
                    </div>
                </section>

            </div>

            <!-- JS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="js/main.js"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--             
            <script type="text/javascript">
            
            $(function(){
		$('#submit').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
            var lastname	= $('#username').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'regprocess.php',
					data: {firstname: firstname,lastname: lastname,username: username,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});          -->
            </script>

        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
        </html>