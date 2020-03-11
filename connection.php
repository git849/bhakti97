<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="script.js" charset="utf-8">

    </script>
  </head>
  <body>

  </body>
</html>

<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="my_data";

$conn=mysqli_connect($servername,$username,$passward,$dbname);

if($conn){
echo"ok";
}
else{
  die("connection failed beacouse".mysql_connect_error());
}



$nm=$_POST['fullname'];
$education=$_POST['shikshan'];
$varn=$_POST['varn'];
$vyavasay=$_POST['vyavasay'];
$raktgat=$_POST['raktgat'];
$nakshtra=$_POST['nakshatra'];
$ras=$_POST['ras'];
$email=$_POST['email'];
$nadi=$_POST['nadi'];
$varshikutpann=$_POST['varshikutpann'];
$janmsthal=$_POST['janmsthal'];
$mangal=$_POST['mangal'];
$shaikshnikthikan=$_POST['shaikshnikthikan'];
$vyavasaikthikan=$_POST['vyavasaikthikan'];
$pan=$_POST['pan'];
$nivasipatta=$_POST['nivasipatta'];
$mobile1=$_POST['mobile1'];
$vadil=$_POST['vadil'];
$aai=$_POST['aai'];
$bhau=$_POST['bhau'];
$bahini=$_POST['bahini'];
$address=$_POST['nivasipatta'];
$janmdinank=$_POST['janmdinank'];
$janmvel=$_POST['janmvel'];
$file_name=$_FILE['file'];



  $query="INSERT INTO my_data_table  VALUES('$nm','$education','$varn','$vyavasay','$raktgat','$nakshtra','$ras','$email','$nadi','$varshikutpann','$janmsthal','$mangal','$shaikshnikthikan','$vyavasaikthikan','$pan','$mobile1','$vadil','$aai','$bhau','$bahini','$address','$janmdinank','$janmvel','$file_name')";

   $data=mysqli_query($conn,$query);
  if($data){
    echo"<script>alert('Thanks for Registration')</script>";
  }
  else{
    echo"Something is wrong,please try again!!";
  }






?>
