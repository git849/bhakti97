
<?php
include("vadhuconnect.php");
$data="SELECT * From my_data_table;";
$result=mysql_query($data);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Signup to Bhoivivah</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
  <script src="index.js" charset="utf-8"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <li class="navnav">
    <button id="navNondani" onclick="navinNavNondani()" class="button0 btn-sm btn-outline-warning">नवीन नाव नोंदणी</button>
  </li>

    <img class="symbol" src="favicon.ico" alt="" height="38" width="38">

    <a class="navbar-brand" href="">भोई विवाह</a><br>
    <h6 class="tagline">नवीन जीवनाची आनंदी सुरुवात</h6>

    <ul class="navbar-nav  ml-auto">
      <form class="" action="index.php" method="post">
        <li class="button">
          <button id="mukhya"  class="button1 btn-lg btn-outline-warning">मुख्य पान</button>
        </li>
      </form>
      <form class="" action="vadhu.php" method="post">
        <li class="button">
          <button id="vadhu" onclick="myVadhu()" class="button2 btn-lg btn-outline-warning">वधू</button>
        </li>
      </form>
      <form class="" action="var.php" method="post">
        <li class="button">
          <button class="button3 btn-lg btn-outline-warning" href="वध.html">वर</button>
        </li>
      </form>

       <form class="" action="punervivah.php" method="post">
         <li class="button">
           <button onclick="myPunervivah()" class="dropbtn  btn-lg btn-outline-warning">पुनर्विवाह</button>
         </li>
       </form>

        <form class="" action="shodh.php" method="post">
          <li class="button">
            <button class="button5 btn-lg btn-outline-warning">शोध</button>
          </li>
        </form>
       <form class="" action="niyam.php" method="post">
         <li class="button">
           <button class="button6 btn-lg btn-outline-warning">नियम</button>
         </li>
       </form>
         <form class="" action="sampark.php" method="post">
           <li class="button">
             <button class="button7 btn-lg btn-outline-warning" href="संपर्क.html">संपर्क</button>
           </li>
         </form>

    </ul>
  </nav>


<table>
  <th>
    Name
  </th>
  <th>
    Education
  </th>
  <th>
    Income
  </th>

  <?php
while($rows=mysql_fetch_assoc($result))
{
  ?>
  <tr>
<td><?php echo rows.['Name']; ?></td>
<td><?php echo rows.['Education']; ?></td>
<td><?php echo rows.['Income']; ?></td>

  </tr>



  <?php
}
?>
</table>



</body>
