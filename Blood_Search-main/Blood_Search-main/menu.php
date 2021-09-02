<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <?php include'links.css' ?>
<style>
* {
    font-family: "Times New Roman", Times, serif;
  }
  .navbar-expand-lg{
    color: #fff;
    background-color: crimson;
    font-size : 1.5vw;
    margin-bottom: 2vw;
  }
</style>
<body>
  <nav class="navbar navbar-expand-lg" >
  <a class="navbar-brand" href="index.php"  style="color:white">Blood Search</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="BloodRequest.php" style="color:white" style="color:white">Blood Request</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Feed.php" style="color:white">Request lists</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="JoinAsDonor.php" style="color:white">Join As Donor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="DonorList.php" style="color:white" style="color:white">Donor List</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="BloodBank.php" style="color:white">Blood Bank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color:white">Logout</a>
      </li>
    </ul>
    
  </div>
</nav>

</body>


</html>