<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			
		}
		.totalmenu{
		background: red;
		color: white;
		position: absolute;
		}
		.menu a{
		text-decoration: none;
		font-size: 1.5vw;
		margin: 1vw;
		color: white;;
		}
		.menu a:before{
		content: "";
		position: relative;
		top: 0;
		left: 0;
		}
		.card{
			box-shadow: -30px 30px 200px rgba(0, 0, 0, 0.3);
		}
		.bg{
			background: #F8F5F1;
		}
		.card-header{
			font-size: 2vw;
			color: #fff;
			text-align: center;
			background: red;"
			font-family: 'Itim', cursive;
		}
		.FeedLeft{
			background: #FBF8EE;
			box-shadow: 1vw 1vw 4vw  ;
		}
	</style>
	<body>
		<?php include 'menu.php' ?>
		<div class="container ">
			<div class="card d-flex justify-content-center">
				<p style="font-size: 3vw; color: red;">Not Available Right now!!!</p>
				
			</div>
		</div>
		<br>
		
		
		
	</div>
</div>

</body>
</html>