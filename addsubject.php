<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $year=$_POST['year'];
    $semester=$_POST['semester'];
    $sname=$_POST['sname'];
    $scode=$_POST['scode'];
    $lehours=$_POST['lehours'];
    $tuthours=$_POST['tuthours'];
    $labhours=$_POST['labhours'];
    $eventhours=$_POST['eventhours'];

    $sql_quary = "INSERT INTO `subject` (`id`, `year`, `semester`, `sname`, `scode`, `lehours`, `tuthours`, `labhours`, `eventhours`)
    VALUES ('0', '$year', '$semester', '$sname', '$scode', '$lehours', '$tuthours', '$labhours', '$eventhours');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
        //echo "Data inserted Successfully";
        header('location:displaySubject.php');
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
    <label class="form-label" style="font-size: 20px; color:#000000;">Offerd Year</label>
    <select name="year" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
    
    
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Offerd Semester</label>
    <select name="semester" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Subject Name</label>
    <input type="text" class="form-control" name="sname" required>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Subject Code</label>
    <input type="text" class="form-control" name="scode" required>
  </div>
  <div class="mb-3">
    <label  class="form-label" style="font-size: 20px; color:#000000;">Number Of lecture hours</label>
    <select name="lehours" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Number Of tutorial hours</label>
    <select name="tuthours" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Number Of lab hours</label> 
    <select name="labhours" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label" style="font-size: 20px; color:#000000;">Number Of evaluation hours</label> 
    <select name="eventhours" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
  </div>
  
  <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
  <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Home</a></button>
  <button class="btn btn-primary my-5"><a href="displaySubject.php" class="text-light">Display</a></button>

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