<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $faclty=$_POST['faclty'];
    $department=$_POST['department'];
    $center=$_POST['center'];
    $bulding=$_POST['bulding'];
    $lavel=$_POST['lavel'];
    $rank=$_POST['rank'];

    $sql_quary = "INSERT INTO `lecture` (`Name`, `Employee_ID`, `Faculty`, `Department`, `Center`, `Bulding`, `Level`, `Rank`)
    VALUES ('$name', '0', '$faclty', '$department', '$center', '$bulding', '$lavel', '$rank');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       // echo "Data inserted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  

    <title>Time_table</title>
  </head>
  

  <body>
  <div class="mainbluesurface" id="mainbluesurface">
    <br><br>
      <div class="container">
  <form method="POST">
  <div class="mb-3">
  <h1 style="font-size: 40px; color: #290066;"><center><b>Time Table Management</b></center></h1>
    <label class="form-label" style="font-size: 20px; color:#000000;">Lecture Name</label>
    <input type="Text" class="form-control" name="name"  required>
    
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Faclty</label>
    <input type="text" class="form-control" name="faclty"   required>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Department</label>
    <input type="text" class="form-control" name="department" required>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Center</label>
    <input type="text" class="form-control" name="center" required>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Bulding</label>
    <input type="text" class="form-control" name="bulding" required>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Lavel</label>
    <input type="number" class="form-control" name="lavel" required>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Rank</label>
    <input type="number" class="form-control" name="rank" required>
  </div>
  
  <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
  <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Home</a></button>
  <button class="btn btn-primary my-5"><a href="display.php" class="text-light">Display</a></button>

</form>


      </div>
      <style>
        body {
  background-color:	 #0f0f3d;
  font-family: Arial, Helvetica, sans-serif;
}

.mainbluesurface {
  background-color: #cccccc;
  height: 800px;
  width: 1429px;
  border-radius: 20px;
  margin-top: 86px;
  margin-left: auto;
  margin-right: auto;
}
</style>
  </body>
</html>