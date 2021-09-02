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
			background: red;"
			font-family: 'Itim', cursive;
		}
		
		.main_feed{
			box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
			border-radius: 30px;
		}
	</style>
	<body>
		<?php include 'menu.php' ?>
		<div class="container-fluid ">
			<div class="card d-flex justify-content-center">
				<div class="card-header" style="background-color:#000; color:  #fff;font-weight:bold">List of patients & details </div>
				
				<div class="card-body">
					
					<?php
						include'REGdbcon.php';
						$sq = " select * from blood ";
						$query=mysqli_query($con, $sq);
						while($res = mysqli_fetch_array($query)){
							
							?>
							
						<!-- LeftSide -->

					<div class="row main_feed">

						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 FeedLeft">
							<div style="font-size: 2vw; font-weight: bold; color: red;" >BG : <?php echo $res['rbg']; ?></div>
							<div style="font-size: 2vw; color: #2366C5;" >Reason : <?php echo $res['why']; ?></div>
						</div>



						<!-- Blank Div -->

						<div class="col-2"></div>



						


						<!-- RightSide -->

						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
							<div style="font-size: 2vw; color: #2366C5; "><i class="material-icons">person_pin</i> <?php echo $res['patient']; ?></div>
							<div style="font-size: 2vw; color: red; "><i class="material-icons">place</i> <?php echo $res['district']; ?></div>
							<div style="font-size: 2vw; color: #FF7100; "><i class="material-icons">local_mall</i> <?php echo $res['quantity']; ?> <?php if($res['quantity']==1) {echo "bag";} else{echo "bags";}   ?> </div>
							<div style="font-size: 2vw; ; "><i class="material-icons">local_hospital</i><?php echo $res['hadress']; ?></div>
							<div style="font-size: 2vw; ; "><i class="material-icons">schedule</i><?php echo $res['time']; ?></div>
							<!-- <div style="font-size: 2vw; ; "><i class="material-icons">date_range</i><?php echo $res['date']; ?></div> -->
							<div style="font-size: 2vw; color: #0DFB03;"><i class="material-icons">local_phone</i><?php echo $res['mobile']; ?></div>
						</div>

						
						
					</div>
					<br>
					<hr style="height:0.1vw;border-width:0;color:violet;background-color:violet">
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
	document.title = "Blood Requests";
</script>
</html>