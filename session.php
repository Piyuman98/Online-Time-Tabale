<?php
include 'connect.php';


if(isset($_POST['submit'])){

    $tag=$_POST['tag'];
    $lename=$_POST['lename'];
    $sucode=$_POST['sucode'];
    $suname=$_POST['suname'];
    $groupid=$_POST['groupid'];
    $duration=$_POST['duration'];
    $noofstudent=$_POST['noofstudent'];
   
    $sql_quary = "INSERT INTO `session` (`tag`, `ID`, `lename`, `sucode`, `suname`, `groupid`, `duration`, `noofstudent`)
    VALUES ('$tag', '0', '$lename', '$sucode', '$suname', '$groupid', '$duration', '$noofstudent');";

    $result=mysqli_query($con,$sql_quary);

    if($result){
       // echo "Data inserted Successfully";
        header('location:displaysession.php');
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

  <label class="form-label" style="font-size: 20px; color:#000000;">Select Lecture(s)</label>
  <select name="lename" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php

    $sql_quary="SELECT * FROM `lecture`";
    $result=mysqli_query($con,$sql_quary);
    if($result){

        while( $row=mysqli_fetch_assoc($result)){
           
            $Name=$row['Name'];
           
            echo '
           
            <option>'.$Name.'</option>';

        }

    }


    ?>
  </select>

    <label class="form-label" style="font-size: 20px; color:#000000;">Select Tag(s)</label>
    <select name="tag" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="Lecture">Lecture</option>
  <option value="Lab">Lab</option>
  <option value="Tutorial">Tutorial</option>
</select>

<label class="form-label" style="font-size: 20px; color:#000000;">Select Group</label>
    <select name="groupid" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="1.2">1.2</option>
  <option value="2">2</option>
  <option value="2.1">2.1</option>
  <option value="3">3</option>
  <option value="3.1">3.1</option>
</select>

    <label class="form-label" style="font-size: 20px; color:#000000;">No. OF Student</label>
    <input type="Text" class="form-control" name="noofstudent"  required>

    <label class="form-label" style="font-size: 20px; color:#000000;">Select Subject</label>
  <select name="suname" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php

    $sql_quary="SELECT * FROM `subject`";
    $result=mysqli_query($con,$sql_quary);
    if($result){

        while( $row=mysqli_fetch_assoc($result)){
           
            $sname=$row['sname'];
           
            echo '
           
            <option>'.$sname.'</option>';

        }

    }


    ?>
  </select>
  <label class="form-label" style="font-size: 20px; color:#000000;">Select Subject Code</label>
  <select name="sucode" class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <?php

    $sql_quary="SELECT * FROM `subject`";
    $result=mysqli_query($con,$sql_quary);
    if($result){

        while( $row=mysqli_fetch_assoc($result)){
           
            $scode=$row['scode'];
           
            echo '
           
            <option>'.$scode.'</option>';

        }

    }


    ?>
  </select>
  
  <label class="form-label" style="font-size: 20px; color:#000000;">Duration(hrs)</label>
    <input type="Text" class="form-control" name="duration"  required>

  <button type="submit" class="btn btn-primary"  name="submit">Next</button>
  <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Home</a></button>
 

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