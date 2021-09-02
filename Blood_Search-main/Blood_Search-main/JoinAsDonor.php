<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<?php
include'REGdbcon.php';
if(isset($_POST['submit'])){
	?>
	<script>
		alert('Information has been uploaded.Please wait for donors response.');
	</script>
	<?php
	header('location:index.php');
	
	$name=$_POST['name'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$area=$_POST['area'];
	$bg=$_POST['bg'];
	
	$q=" INSERT INTO `donor`(`name`, `age`, `email`, `mobile`, `area`, `bg`) VALUES ('$name', '$age', '$email', '$mobile', '$area', '$bg') ";
	$query=mysqli_query($con, $q);
}
else{
	
	
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Join as Donor</title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
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
		.main-form{
			background: linear-gradient( #AEB6BF, #D0D3D4);
			font-size: 1.5vw;
		}
		footer {
		text-align: center;
		padding: 3px;
		background-color: red;
		color: white;
		font-size: 1.5vw;
		}
		.tns{
			font-family: "Times New Roman", Times, serif;
		}

	</style>
	

	<body>
		<?php include 'menu.php' ?>
		<div class="container main-form">
			<br>
			<h3 class="text-center tns" style="color: white;font-size: 2vw;"> Please fill up the form</h3>
			<h4 style="color: #FF0303; font-size: 1.5vw; font-family: 'Courgette', cursive;">*All fields are required</h4>


			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="name" placeholder="Enter your name" class="form-control" style="font-size: 1.5vw" required autocomplete="off" ;>
				</div>
				<div class="form-group">
					<input type="text" name="age" placeholder="age" class="form-control" style="font-size: 1.5vw";required autocomplete="off">
				</div>
				
				
				<div class="form-group">
					<input type="text" name="mobile" placeholder="Mobile No." class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
				</div>
				<div class="form-group">
					<input type="email" name="email" placeholder="Email" class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="BloodGroup" style="font-weight: bold; color: #fff;" required></label>
					<select id="BloodGroup" name="bg" required>
						<option>Donor's blood group</option>
						<option value="A+">A+</option>
					a	<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div>
				<div class="form-group">
					<label for="area" style="font-weight: bold; color: #fff;" required>Area</label>
					<select id="area" name="area" required>
						<option value="" ></option>
						<option value="Barguna">Barguna</option>
						<option value="Barisal">Barisal</option>
						<option value="Bhola">Bhola</option>
						<option value="Jhalokati">Jhalokati</option>
						<option value="PATUAKHALI">PATUAKHALI</option>
						<option value="PIROJPUR">PIROJPUR</option>
						<option value="BANDARBAN">BANDARBAN</option>
						<option value="BRAHMANBARIA">BRAHMANBARIA</option>
						<option value="CHANDPUR">CHANDPUR</option>
						<option value="CHITTAGONG">CHITTAGONG</option>
						<option value="COMILLA">Comilla District</option>
						<option value="COX'S BAZAR">COX'S BAZAR</option>
						<option value="FENI">FENI</option>
						<option value="KHAGRACHHARI">KHAGRACHHARI</option>
						<option value="LAKSHMIPUR">LAKSHMIPUR</option>
						<option value="NOAKHALI">NOAKHALI</option>
						<option value="RANGAMATI">RANGAMATI</option>
						<option value="DHAKA">DHAKA</option>
						<option value="FARIDPUR">FARIDPUR</option>
						<option value="GAZIPUR">GAZIPUR</option>
						<option value="GOPALGANJ">GOPALGANJ</option>
						<option value="JAMALPUR">JAMALPUR</option>
						<option value="KISHOREGONJ">KISHOREGONJ</option>
						<option value="MADARIPUR">MADARIPUR</option>
						<option value="MANIKGANJ">MANIKGANJ</option>
						<option value="MUNSHIGANJ">MUNSHIGANJ</option>
						<option value="MYMENSINGH">MYMENSINGH</option>
						<option value="NARAYANGANJ">NARAYANGANJ</option>
						<option value="NARSINGDI">NARSINGDI</option>
						<option value="NETRAKONA">NETRAKONA</option>
						<option value="RAJBARI">RAJBARI</option>
						<option value="SHARIATPUR">SHARIATPUR</option>
						<option value="SHERPUR">SHERPUR</option>
						<option value="TANGAIL">TANGAIL</option>
						<option value="BAGERHAT">BAGERHAT</option>
						<option value="CHUADANGA">CHUADANGA</option>
						<option value="JESSORE">JESSORE</option>
						<option value="JHENAIDAH">JHENAIDAH</option>
						<option value="KHULNA">KHULNA</option>
						<option value="KUSHTIA">KUSHTIA</option>
						<option value="MAGURA">MAGURA</option>
						<option value="MEHERPUR">MEHERPUR</option>
						<option value="NARAIL">NARAIL</option>
						<option value="SATKHIRA">SATKHIRA</option>
						<option value="BOGRA">BOGRA</option>
						<option value="CHAPAINABABGANJ">CHAPAINABABGANJ</option>
						<option value="JOYPURHAT">JOYPURHAT</option>
						<option value="PABNA">PABNA</option>
						<option value="NAOGAON">NAOGAON</option>
						<option value="NATORE">NATORE</option>
						<option value="RAJSHAHI">RAJSHAHI</option>
						<option value="SIRAJGANJ">SIRAJGANJ</option>
						<option value="DINAJPUR">DINAJPUR</option>
						<option value="GAIBANDHA">GAIBANDHA</option>
						<option value="KURIGRAM">KURIGRAM</option>
						<option value="LALMONIRHAT">LALMONIRHAT</option>
						<option value="NILPHAMARI">NILPHAMARI</option>
						<option value="PANCHAGARH">PANCHAGARH</option>
						<option value="RANGPUR">RANGPUR</option>
						<option value="RANGPUR">RANGPUR</option>
						<option value="HABIGANJ">HABIGANJ</option>
						<option value="MAULVIBAZAR">MAULVIBAZAR</option>
						<option value="SUNAMGANJ">SUNAMGANJ</option>
						<option value="SYLHET">SYLHET</option>
					</select>
					
				</div>
				
				
					
				<br>
				<button type="submit" name="submit" class="btn btn-success" style="font-size: 1.5vw">Join</button>
			</form>
			<br>
		</div><br>
		<br><br>
	</body>
</html>