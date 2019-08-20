<?php
	

	if(isset($_POST['submit'])){
			
		session_start();
		

			$_SESSION['name'] = htmlentities($_POST['name']);
			$_SESSION['email'] = htmlentities($_POST['email']);
			$_SESSION['username'] = htmlentities($_POST['username']);
			$_SESSION['password'] = htmlentities($_POST['password']);
			$_SESSION['comment'] = htmlentities($_POST['comment']);
}
else
{			header('Location: page2.php');
}
			

// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<style>
	.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 100px;
  width: 100%;
  width: 100vw;
  height: 900px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}


.form-line{
  border-right: 1px solid #B29999;
}
.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;
}


.error{
	color: #FF0000;
}

</style>
<body>

	
<section id="contact">
					<div class="section-content">
		<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">PHP Form Validation</span></h1>
				
			</div>
			<div class="contact-section">
			<div class="container">
				 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label>Name</label>
			  				<span class="error">* <?php echo $nameErr;?></span>
					    	<input type="text" class="form-control" id="" placeholder=" Enter Name" name="name">

				  		</div>
				  		<div class="form-group">
					    	<label>Email Address</label><span class="error"> * <?php echo $emailErr;?></span>
					    	<input type="email" class="form-control" placeholder=" Enter Email Address" name="email">
					  	</div>	
					  	<div class="form-group">
					    	<label>Username</label>
					    	<span class="error">*<?php echo $usernameErr;?></span>
					    	<input type="text" class="form-control" placeholder=" Enter Username" name="username">
			  			</div>
		
			  			<div class="form-group">
					    	<label>Password</label>
					    	<span class="error">*<?php echo $passwordErr;?></span>
					    	<input type="password" class="form-control" placeholder=" Enter password" name="password">
			  			</div>
						<div class="form-group">
  						<label>Gender:</label>
						 <span class="error">* <?php echo $genderErr; ?></span>&emsp;
  						<input type="radio" name="gender" value="female">Female&emsp;
  						<input type="radio" name="gender" value="male">Male
 						</div>
 						</div>


			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description">Comment:</label>

			  			 	<textarea  class="form-control" name="comment" id="description" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit" name="submit" ><i class="fa fa-paper-plane" aria-hidden="true" ></i>&ensp;Sign Up</button>
			  			</div> 
					</div>
				</form>
			</div>
		</section>	
</body>
</html>