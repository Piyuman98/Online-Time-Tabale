<?php
include 'connect.php';
$Employee_ID=$_GET['updateid'];
$sql="SELECT * from `lecture` where Employee_ID=$Employee_ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$faclty=$row['Faculty'];
$department=$row['Department'];
$center=$row['Center'];
$bulding=$row['Bulding'];
$lavel=$row['Level'];
$rank=$row['Rank'];


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $faclty=$_POST['faclty'];
    $department=$_POST['department'];
    $center=$_POST['center'];
    $bulding=$_POST['bulding'];
    $lavel=$_POST['lavel'];
    $rank=$_POST['rank'];

    $sql_quary = "UPDATE `lecture` set  Employee_ID=$Employee_ID,
    Name='$name',Faculty='$faclty',Department='$department',Center='$center',Bulding='$bulding',Level=$lavel,Rank=$rank
    where Employee_ID=$Employee_ID";
    
    $result=mysqli_query($con,$sql_quary);

    if($result){
        //echo "Update inserted Successfully";
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
  <body>
  <div class="mainbluesurface" id="mainbluesurface">
      <div class="container">
  <form method="POST">
  <div class="mb-3"><br><br>
  <h1 style="font-size: 40px; color: #290066;"><center><b>Update Time Table Management</b></center></h1>
    <label class="form-label" style="font-size: 20px; color:#000000;">Lecture Name</label>
    <input type="Text" class="form-control" name="name" value=<?php echo $name;?>>

    
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Faclty</label>
    <input type="text" class="form-control" name="faclty" value=<?php echo $faclty;?>>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Department</label>
    <input type="text" class="form-control" name="department" value=<?php echo $department;?>>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Center</label>
    <input type="text" class="form-control" name="center" value=<?php echo $center;?>>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Bulding</label>
    <input type="text" class="form-control" name="bulding" value=<?php echo $bulding;?>>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Lavel</label>
    <input type="number" class="form-control" name="lavel" value=<?php echo $lavel;?>>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Rank</label>
    <input type="number" class="form-control" name="rank" value=<?php echo $rank;?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
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