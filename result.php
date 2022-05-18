<?php
include "api1/config1.php";
$sql_query_1 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=1";
$result_1 = mysqli_query($con,$sql_query_1);
$row_1 = mysqli_fetch_array($result_1)[0];

$sql_query_2 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=2";
$result_2 = mysqli_query($con,$sql_query_2);
$row_2 = mysqli_fetch_array($result_2)[0];

$sql_query_3 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=3";
$result_3 = mysqli_query($con,$sql_query_3);
$row_3 = mysqli_fetch_array($result_3)[0];

$sql_query_4 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=4";
$result_4 = mysqli_query($con,$sql_query_4);
$row_4 = mysqli_fetch_array($result_4)[0];

$sql_query_5 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=5";
$result_5 = mysqli_query($con,$sql_query_5);
$row_5 = mysqli_fetch_array($result_5)[0];

$sql_query_6 = "SELECT COUNT(vote_to) FROM result WHERE vote_to=6";
$result_6 = mysqli_query($con,$sql_query_6);
$row_6 = mysqli_fetch_array($result_6)[0];

$candi_1=$row_1;
$candi_2=$row_2;
$candi_3=$row_3;
$candi_4=$row_4;
$candi_5=$row_5;
$candi_6=$row_6;


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
      <h2>Voting Results</h2>
      <h1>
    <table border="" style=" text-align: center; padding: 25px;">
      <tr>
        <th>Candidate 1</th>
        <th>Candidate 2</th>
        <th>Candidate 3</th>
        <th>Candidate 4</th>
        <th>Candidate 5</th>
        <th>Candidate 6</th>
      </tr>
      <tr>
        <td><?php echo $candi_1 ?></td>
        <td><?php echo $candi_2 ?></td>
        <td><?php echo $candi_3 ?></td>
        <td><?php echo $candi_4 ?></td>
        <td><?php echo $candi_5 ?></td>
        <td><?php echo $candi_6 ?></td>
      </tr>

    </table>
    </h1>
  </center>
  </body>
</html>
