 <?php

$Register= $_REQUEST['register'];
$Email= $_REQUEST['mail'];

 if(empty($Register) || empty($Email)){
   echo"Please fill all the fields";
 }
 else{
   mail("bhaktilokhande97@gmail.com" ,"Website Form" ,$mail,"from: $Register <$Email>");
   echo"<script type=text/javascript>alert('your signup is successfuly');
   window.history.log(-1);
   </script>";
 }


 }
