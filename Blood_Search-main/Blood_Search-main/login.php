<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
		include 'REGdbcon.php';
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$emailsearch = " select * from registration where email='$email' ";
			$query = mysqli_query($con, $emailsearch);
			$email_count = mysqli_num_rows($query);
			if($email_count){
				$email_pass = mysqli_fetch_assoc($query);


				$db_pass = $email_pass['password'];
				$_SESSION['username'] = $email_pass['username'];



				$pass_decode = password_verify($password, $db_pass);
				if($pass_decode){
					?>
					<script>
						// alert('Login Successfull');
						location.replace("index.php");
					</script>
					<?php
				}

				else{
					?>
					<script>
						alert('Incerroect Password!');
					</script>
					<?php
				}
			}
			else{
				?>
					<script>
						alert('Invalid Email!');
					</script>
					<?php

			}

		}


		?>

		<div class="container-fluid">
			<form action=" <?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
				<div class="row">
				<div class="col-2.8 fields">
					<i class="fas fa-user-circle"></i>
					<div class="form-group">
						<input type="email" class="" name="email" autocomplete="off" placeholder="E-mail">
					</div>
					<div class="form-group">
						<input type="password" id="shp" class="pass-input" name="password" name="password" autocomplete="off" placeholder="password">
					</div>
					<!-- <div class="d-flex justify-content-end">
						<button onclick="showpassword();" style="font-size: .7vw; outline: none; border: none;"> <u id="sp">show password</u></button>
					</div> -->
					<!-- <a href="index.php"><input type="submit">login up<</a> -->
					<input type="submit" name="submit"> <a href=""></a>
					<p class="already">Don't have an account? <a href="signup.php">Signup Here</a></p>
				</div>
			</div>
			</form>
		</div>
		
		<script>
			// function showpassword(){
			// 	var pw = document.getElementById('shp');
			// 	var vsp = document.getElementById('sp');
			// 	if(pw.type == "password"){
			// 		pw.type = "text";
			// 		document.getElementById('sp').innerHTML = "hide password";
			// 	}
			// 	else{
			// 		pw.type = "password";
			// 		document.getElementById('sp').innerHTML = "show password";
			// 	}
			// }
		</script>
	</body>
</html>
