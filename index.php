<?php include 'header.php'
?>
<style>
		body{
			background-image:url('f94c2916-6a4e-4cbc-9bc1-9f0e0f4ee46c.png');
          background-size:cover;
          background-repeat:no-repeat;
			}
		.table{
			background-color:white;
			margin-top:50px;
			border-radius:30px;
		}
		.btn btn-primary{
			padding-top:100px;
		}
		.nav{
			margin-bottom:20px;
		}

</style>

<div class="content">
		<p>
</br>
</br>
		</p>
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
</form>
		</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.I</th>
      <th scope="col">Company name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
   <?php
    $sql="select cname,position,CTC from jobvac";
	$conn= mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'jobs1');
	$result12=mysqli_query($conn,$sql);
	$i=0;
	if($result12->num_rows>0){
		while($rows=$result12->fetch_assoc()){
			
	echo '
	<tbody>
	   
      	<td>'.++$i.'</td>
		<td>'.$rows['cname'].'</td>
		<td>'.$rows['position'].'</td>
		<td>'.$rows['CTC'].'</td>';
		}}
		else{
			echo"";
		}
   ?>
  </tbody>
</table>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					Post job
		</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>