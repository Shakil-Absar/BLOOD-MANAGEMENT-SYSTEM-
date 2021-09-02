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
	
	$patient=$_POST['patient'];
	$district=$_POST['district'];
	$upazilla=$_POST['upazilla'];
	$rbg=$_POST['rbg'];
	$quantity=$_POST['quantity'];
	$mobile=$_POST['mobile'];
	$time=$_POST['time'];
	$hadress=$_POST['hadress'];
	$ward=$_POST['ward'];
	$bed=$_POST['bed'];
	$floor=$_POST['floor'];
	$why=$_POST['why'];
	$q=" INSERT INTO `blood`(`patient`, `district`, `upazilla`, `rbg`, `quantity`, `mobile`, `time`, `hadress`, `ward`, `bed`, `floor`, `why`) VALUES ('$patient', '$district', '$upazilla', '$rbg', '$quantity', '$mobile', '$time', '$hadress', '$ward', '$bed', '$floor', '$why') ";
	$query=mysqli_query($con, $q);
}
else{
	
	
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Request for blood</title>
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
			background: linear-gradient( #FFC300, #ff4000);
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
		<div class="container">
			<p class="d-flex justify-content-center" style="font-size: 1.5vw;">Blood Request Form</p>
		</div>
		<div class="container main-form">
			<br>
			<h3 class="text-center tns" style="color: white;font-size: 2vw;"> Please fill up the form</h3>
			<h4 style="color: #FF0303; font-size: 1.5vw; font-family: 'Courgette', cursive;">*All fields are required</h4>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="patient" placeholder="Patient Name" class="form-control" style="font-size: 1.5vw" required autocomplete="off" ;>
				</div>
				<div class="form-group">
					<label for="district" style="font-weight: bold; color: #fff;" required>District</label>
					<select id="district" name="district" required>
						<option value="" >Select your District</option>
						<option value="BANDARBAN">BANDARBAN</option>
						<option value="Barguna">Barguna</option>
						<option value="Barisal">Barisal</option>
						<option value="Bhola">Bhola</option>
						<option value="BRAHMANBARIA">BRAHMANBARIA</option>
						<option value="CHANDPUR">CHANDPUR</option>
						<option value="CHITTAGONG">CHITTAGONG</option>
						<option value="COMILLA">Comilla District</option>
						<option value="COX'S BAZAR">COX'S BAZAR</option>
						<option value="DHAKA">DHAKA</option>
						<option value="FARIDPUR">FARIDPUR</option>
						<option value="FENI">FENI</option>

						<option value="Jhalokati">Jhalokati</option>
						<option value="PATUAKHALI">PATUAKHALI</option>
						<option value="PIROJPUR">PIROJPUR</option>
						
						
						
						
						<option value="KHAGRACHHARI">KHAGRACHHARI</option>
						<option value="LAKSHMIPUR">LAKSHMIPUR</option>
						<option value="NOAKHALI">NOAKHALI</option>
						<option value="RANGAMATI">RANGAMATI</option>
						
						
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
				<div class="form-group">
					<input type="text" name="upazilla" placeholder="Upazilla" class="form-control" style="font-size: 1.5vw";required autocomplete="off">
				</div>
				<div class="form-group">
					<label for="BloodGroup" style="font-weight: bold; color: #fff;" required>Required Blood Group</label>
					<select id="BloodGroup" name="rbg" required>
						<option>Patient's blood group</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div>
				<div class="form-group">
					<label for="quantity" style="color: white; font-weight: bold"; required>Quantity (between 1 and 5):</label>
					<input type="number" id="quantity" name="quantity" min="1" max="5">
				</div>
				
				<div class="form-group">
					<input type="text" name="mobile" placeholder="Mobile No." class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
				</div>
				
					<div class="form-group">
						<!-- <label for="Blood_Needed_Time" style="color: white; font-weight: bold"; required>Time</label>
						<input type="datetime-local" id="Blood_Needed_Time" name="time"> -->
						<input type="text" name="time" placeholder="Time(a.m./p.m.) & date(dd-mm-yyyy)" class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
					</div>
					
				
				<br>
				<div class="form-group">
					<textarea class="form-control" name="hadress" placeholder="Hospital Name & Address" style="font-size: 1.5vw"; required autocomplete="off"></textarea>
				</div>
				
				
				<div class="form-inline justify-content-between">
					<div class="form-group">
						<input type="text" name="ward" placeholder="Ward No." class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
					</div>
					<div class="form-group">
						<input type="text" name="bed" placeholder="Bed No." class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
					</div>
					<div class="form-group">
						<input type="text" name="floor" placeholder="Floor No." class="form-control" style="font-size: 1.5vw"; required autocomplete="off">
					</div>
				</div>
				<br>
				<div class="form-group">
					<textarea class="form-control" name="why" placeholder="Why do u need blood?" style="font-size: 1.5vw"; required autocomplete="off"></textarea>
				</div>
				<br>
				<button type="submit" name="submit" class="btn btn-success" style="font-size: 1.5vw">Request</button>
			</form>
			<br>
		</div><br>
		<br><br>
	</body>
</html>