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
			font-family: "Times New Roman", Times, serif;
			
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
			background: green;"
			font-family: 'Itim', cursive;
		}
		.FeedLeft{
			background: #FBF8EE;
			/*box-shadow: 1vw 1vw 10vw  ;*/
		}
		.search_btn{
			background: black!important;
			color: white!important;
			font-weight: bold;
		}
	</style>
	<body>
		<div class="container-fluid totalmenu">
		<?php include 'menu.php' ?>
		<?php
						include'REGdbcon.php';
						if(isset($_POST['search']) && isset($_POST['search1'])){
							$searchKey = $_POST['search'];
							$searchKey1 = $_POST['search1'];
							$sq = " select * from donor where area like '%$searchKey%' and bg like '%$searchKey1%' ";
						}
						else{
							$sq = " select * from donor ";
							$searchKey = "";
							$searchKey1 = "";
						}
						$query=mysqli_query($con, $sq);
						?>
		<div class="container-fluid">
			<form action="" method="POST">
				<div class="row">
					<div class="col-5">
						<input type="text" name="search" class="form-control" placeholder="Search by Area" value="<?php echo $searchKey ?>"  style="font-size: 2vw;">
						<br>
					</div>
					<div class="col-5">
						<input type="text" name="search1" class="form-control" placeholder="Search by Blood Group"    value="<?php echo $searchKey1 ?>"  style="font-size: 2vw;" >
					</div>
					<div class="col-2 search">
						<button class="btn search_btn">Search</button>
					</div>
					<br><br>
				</div>
			</form>
		</div>



		<br><br>


		<div class="container-fluid">
			<div class="card d-flex justify-content-center">
				<div class="card-header" style="font-size: 2vw; background: green; color: white;">List of Donors </div>
				
				<div class="card-body">
					<?php while($res = mysqli_fetch_array($query)){
							
		?>


					
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 FeedLeft">
							<div style="font-size: 2vw; font-weight: bold; color: red;" >BG : <?php echo $res['bg']; ?></div>
							<div style="font-size: 2vw; color: #0DFB03;"><i class="material-icons">local_phone</i><?php echo $res['mobile']; ?></div>
							
						</div>




						<div class="col-2"> </div>






						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div style="font-size: 1.5vw; color: black;" ><b>Name : </b> <?php echo $res['name']; ?></div>
							<div style="font-size: 1.5vw; color: black;" ><b>Age : </b> <?php echo $res['age']; ?></div>
							<div style="font-size: 1.5vw; color: black;" ><b>Email : </b> <?php echo $res['email']; ?></div>
							<div style="font-size: 1.5vw; color: black;" ><b>Area : </b> <?php echo $res['area']; ?></div>
							
						</div>
						
						
					</div>
					<br>
					<hr style="height:0.5vw;border-width:0;color:red;background-color:red;">
					<br>
					<?php
					
					}
					?>
				</div>
			</div>
			<br>
			
			
			
		</div>
	</div>
	
</body>
<script>
	document.title = "Donors' List";
</script>
</html>