<?php
include 'connect.php';

if(isset($_GET['delet'])){
    $Employee_ID=$_GET['delet'];

    $sql="DELETE FROM `lecture` where Employee_ID=$Employee_ID ";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Delete successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    

}





?>
