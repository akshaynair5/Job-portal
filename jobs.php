<?php include 'header.php'
?>
<style>
  .table{
    padding-top:20px;
  }
  body{
    background-image:url('f94c2916-6a4e-4cbc-9bc1-9f0e0f4ee46c.png');
          background-size:cover;
          background-repeat:no-repeat;
  }
  .table{
    margin-top:100px;
    background-color:white;
    border-radius:30px;
  }
</style>
<div class="content">
     <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Phone number</th>
                <th scope="col">Qualifications</th>
                <th scope="col">Year Passout</th>
                <th scope="col">Position</th>
            </tr>
        </thead>
        <tbody>
        <?php
          
            $sql="Select name,qual,phone_no1,apply,year from candidates";
            $conn= mysqli_connect('localhost','root','');
            mysqli_select_db($conn,'jobs1');
            $result2=mysqli_query($conn,$sql);
            $i=0;
            if($result2->num_rows>0){
                while($rows=$result2->fetch_assoc()){
                    echo'
                    <tr>
                        <th scope="row">'.++$i.'</th>
                        <td>' .$rows['name'].'</td>
                        <td>' .$rows['phone_no1'].'</td>
                        <td>' .$rows['qual'].'</td>
                        <td>' .$rows['year'].'</td>
                        <td>' .$rows['apply'].'</td>
                    </tr>';
                }
            }
            else{
                echo"";
            }
         ?>
        <tbody>
     </table>
</div>