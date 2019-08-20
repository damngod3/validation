<?php

	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$gender = $_SESSION['gender'];
	$comment = $_SESSION['comment'];
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
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
.section-content{
  text-align: center; 
  }
	</style>
</head>
<body>

<section id="contact">

	<div class="section-content">
		<div class="contact-section">

		<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Profile's Informnation	</span></h1>
			<div class="container">	<center>

	<br>

<?php
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";
echo $name.'<br><br>';
echo $email.'<br><br>';
echo $username.'<br><br>';
echo $password.'<br><br>';
echo $comment.'<br><br>';
echo $gender.'<br><br>';
?>
</center>
</div>
</div>
	</section>
</body>
</html>