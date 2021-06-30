<?php

session_start();
include ('Config.php');

try {
    $con = new PDO ("mysql:host=localhost;dbname=demo",'root','');
    
	if(isset($_POST['signup'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

		$insert = $con->prepare("INSERT INTO register(email,password,firstname,lastname)
				values(:email, :password, :firstname, :lastname)
				");
		$insert->bindParam (':email',$email);
		$insert->bindParam (':password',$password);
		$insert->bindParam (':firstname',$firstname);
		$insert->bindParam (':lastname',$lastname);
		$insert->execute();
	}elseif (isset($_POST['signin'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$select = $con->prepare("SELECT*FROM register where email='$email' and password='$password'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		$data=$select->fetch();
		if($data['email']!=$email and $data['password']!=$password)
		{
			echo "Invalid Email or Password";
		}
		elseif($data['email']==$email and $data['password']==$password)
		{
            
			$_SESSION['email']=$data['email'];
			$_SESSION['firstname']=$data['firstname'];
			$_SESSION['lastname']=$data['lastname'];
			$_SESSION['password']=$data['password'];

			header("location:profile.php");

		}
	}
}
catch (PDOException $e) {

	echo "Error: ". $e -> getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<script src="main.js"></script>
</head>
<body>
	

<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>
</html>
