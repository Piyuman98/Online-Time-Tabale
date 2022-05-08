<?php
include 'connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Subjects veiew</title>
  </head>
  <body>
  <div class="mainbluesurface" id="mainbluesurface">
    <div class="container">
    <h1 style="font-size: 40px; color: #290066;"><center><b>Subject Table</b></center></h1>
        <button class="btn btn-primary my-5"><a href="index0.php" class="text-light">Add Lecture</a></button>
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Home</a></button>
        <button class="btn btn-primary my-5"><a href="addsubject.php" class="text-light">Add Subject</a></button>

    <table class="table">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Subject Code</th>
      <th scope="col">Offerd Year</th>
      <th scope="col">Offerd Semester</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $sql_quary="SELECT * FROM `subject`";
    $result=mysqli_query($con,$sql_quary);
    if($result){

        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $sname=$row['sname'];
            $scode=$row['scode'];
            $year=$row['year'];
            $semester=$row['semester'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$sname.'</td>
            <td>'.$scode.'</td>
            <td>'.$year.'</td>
            <td>'.$semester.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" style="font-size: 15px; color: #ffffff;">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? delet='.$id.'" style="font-size: 15px; color: #ffffff;">Delete</a></button>
        </td>
          </tr>';

        }

    }





    ?>

  </tbody>
</table>
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