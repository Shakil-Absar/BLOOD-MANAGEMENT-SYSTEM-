<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'REGdbcon.php' ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
			/*background: #e3edf7;*/
		}
		body{
			margin: 0;
			height: 100vh;
			width: 100vw;
			display: flex;
			align-items: center;
			justify-content: center;
			overflow: hidden;
			color: #555;
			background: #ecf0f3;
		}
		
		.fields{
			margin: 0 auto;
			padding: .5vw 2vw 2vw 2vw;
			box-shadow: .7vw .7vw 2vw #cbced1,
				-.7vw -.7vw 1.9vw #ffffff;
			border-radius: 1vw;
		}
		.fields input{
			border: none;
			outline: none;
			background: none;
			font-size: 1.3vw;
			color: #555;
			border-radius: 3vw;
			padding: .7vw;
			box-shadow: inset.1vw .1vw .7vw #cbced1,
						inset -.1vw -.1vw .9vw #ffffff;
		}
		.fields input:focus{
			box-shadow: inset.2vw .2vw 1.7vw #cbced1,
					inset -.2vw -.2vw 1.9vw #ffffff;
					}
		.fa-user-circle{
			color: red;
			font-size: 5vw;
			margin: 0 auto;
			padding-bottom: 1.5vw;
			display: flex;
			justify-content: center;
		}
		input[type="submit"]{
			outline: none !important;
			border: none;
			cursor: pointer;
			width: 100%;
			border-radius: 3vw;
			font-size: 1.3vw;
			font-weight: 500;
			color: #fff;
			text-align: center;
			background: #24cfaa;
			box-shadow: .07vw .07vw .5vw #b1b1b1,
					-.07vw -.07vw 1.9vw #ffffff;
		}
		.already{
			margin: 1vw auto;
			font-size: 1vw;
		}
		.already a{
			text-decoration: none;
		}
	
		
	</style>
	<body>
		<?php
		if(isset($_POST['submit'])){
			header('location:login.php');
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$email = mysqli_real_escape_string($con, $_POST['email']);
			$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
			$pass = password_hash($password, PASSWORD_BCRYPT);
			$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
			$emailquery = "select * from registration where email = '$email' ";
			$query = mysqli_query($con, $emailquery);
			$emailcount= mysqli_num_rows($query);
			if($emailcount>0){
		?>
		<script>
			alert('Email already Existed');
		</script>
		<?php
		}
		else{
		if($password === $cpassword){
			$insertquery = " INSERT INTO registration (username, email, mobile, password, cpassword) VALUES ('$username', '$email', '$mobile', '$pass', '$cpass') ";
			$iquery = mysqli_query($con, $insertquery);
		}
		else{
		?>
		<script>
			alert('Password didnot match');
		</script>
		<?php
		}
		}
		}
		?>
		<div class="container-fluid">
			<form action=" <?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
				<div class="row">
				<div class="col-2.8 fields">
					<i class="fas fa-user-circle"></i>
					<div class="form-group">
						<input type="text" class="" name="username" autocomplete="off" placeholder="Username">
					</div>

					<div class="form-group">
						<input type="email" class="" name="email" autocomplete="off" placeholder="E-mail">
					</div>

					<div class="form-group">
						<input type="text" class="" name="mobile" autocomplete="off" placeholder="Mobile No.">
					</div>

					<div class="form-group">
						<input type="password" id="shp" class="pass-input" name="password" autocomplete="off" placeholder="password">
					</div>

					<div class="form-group">
						<input type="password" class="pass-input" name="cpassword" autocomplete="off" placeholder="password">
					</div>
				
					<input type="submit" name="submit"> <a href=""></a>
					<p class="already">Already have an account? <a href="login.php">Login Here</a></p>
				</div>
			</div>
			</form>
		</div>
		
		<script>
		</script>
	</body>
</html>
