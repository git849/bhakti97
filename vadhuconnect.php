
<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="my_data";

$conn=mysqli_connect($servername,$username,$passward,$dbname);

if($conn){

}
else{
  die("connection failed beacouse".mysql_connect_error());
}


 ?>
