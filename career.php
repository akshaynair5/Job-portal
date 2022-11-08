<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Career</title>
    <style>

      body{
          background-image:url('f94c2916-6a4e-4cbc-9bc1-9f0e0f4ee46c.png');
          background-size:cover;
          background-repeat:no-repeat;
        }
      .row{
        padding-left:200px;
        border-radius:50px;
        
      }
      .row .jobs{
        border-style:solid;
        text-align:center;
        background-color:#E1EBEE;
        border-radius:50px;
        
      }
      .lead{
        font-weight:bold;
      }
      .row .lead{
        text-shadow: white 0-5px;
        font-size:50px;
        color:black;
        font-style:italic;
      }
 

	</style>
 <body>
 <div>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed";>
  <div class="container-fluid">
    <a class="navbar-brand"><img src="th (4).jpg" width="160px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">Admin Dashboard</a>
        </li>
        

      </ul>
    </div>
  </div>
</nav>

<div class="sidebar">
	<a href="jobs.php">candidates applied</a>
	<a href ="career.php">Jobs</a>
  <a href="index.php">Post Jobs</a>
	<a href="about.php">About</a>
</div>
     </div>

    </div>
<div class="row">
    <div class="col-12">
        <div c;ass="jumbotron jumbotron-fluid" style="background-image:url('');background-size:cover;">
        <div class="container">
            <h1 class="display-4">Job Portal</h1>
            <b><p class="lead">Best Jobs available matching your skillset</p></b>
</div>
</div>
</div>
</div>
<div class="row">

    <?php
    $conn= mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'jobs1');
    $sql12="SELECT cname,position,Jdesc,CTC,skills from jobvac";
    $result12=mysqli_query($conn,$sql12);
    if($result12->num_rows>0){
        while($rows=$result12->fetch_assoc()){
            echo'
            <div class="col-md-4">
            <div class="jobs">
            <h3 style="text-align: centre;">'.$rows['position'].'</h3>
            <h4 style="text-align:centre;">'.$rows['cname'].'</h4>
            
            <p style="color:black;"><b>Skills Required: </b>'.$rows['skills'].'</p>
            <p style="color:black;"><b>CTC: </b>'.$rows['CTC'].'</p>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
            Apply now
            </button>
            </div>
            </div>';
        }
    }
  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="applicationconfig.php" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Phone number</label>
            <input type="text" class="form-control" name="phone_no1"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input class="form-control" name="apply"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Qualfication</label>
            <input type="text" class="form-control" name="qual"></input>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year"></input>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit1" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>



</div>
<div class="collapse" id="collapseExample">
		<div class="card card-body">
		<form action ="jdeskconfig.php" method="POST">
			<div class="mb-3">
				<label for="Company name" class="form-label">Company Name</label>
				<input type="text" class="form-control" id="company name" name="cname">
			</div>
			<div class="mb-3">
				<label for="Position" class="form-label">Position</label>
				<input type="text" class="form-control" id="position" name="pos">
			</div>
			<div class="mb-3">
				<label for="Job description" class="form-label">Job description</label>
				<input type="text" class="form-control" id="job description" name="Jdesc">
			</div>
			<div class="mb-3">
				<label for="Skills" class="form-label">Skills</label>
				<input type="text" class="form-control" id="skills" name="skills">
			</div>
			<div class="mb-3">
				<label for="CTC" class="form-label">CTC</label>
				<input type="text" class="form-control" id="CTC" name="CTC">
			</div>
			<button type="submit" class="btn btn-primary">Submit </button>
</div>
</div>
</form> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>