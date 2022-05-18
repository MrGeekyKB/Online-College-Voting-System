<?php
include "api1/config1.php";

$fname=$_SESSION["fname"];
$bday=$_SESSION["bday"];
$pancard=$_SESSION["pancard"];
$mob=$_SESSION["mob"];
$address=$_SESSION["address"];
$role=$_SESSION["role"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>boating votes </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 2px solid rgb(26, 25, 25);
    padding: 36px;
    wi
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: rgb(19, 76, 197);}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4f96e8;
    color: rgb(202, 51, 5);
    background:;

  }
  input[type=radio] {
    width: 30%;
    height: 1em;
}
.text{
    font-size: xx-large;
}
  </style>
</head>

<body>
    <div><img src="bg3..jpg"width="120%;" ></div>
    <div class="container " style="margin-top: -55pc;    margin-right: 47px; ">
<div class="text text-center p-5">
   <u> Vote The Student</u>.......
</div>
<form class="" action="" method="post">
    <table id="customers">
        <tr>
          <th>Student Name</th>
          <th>POST</th>
          <th>Status</th>
        </tr>
        <td>Nilam haode</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="1"></td>
    <tr height="50">
    <td>Janvi Sonkusre</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="2"></td>
  </tr>
  <tr style="height:15px;">
    <td>Rohit Meshram</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="3"></td>
  </tr>
  <tr>
    <td>Ankita Barapatre</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="4"></td>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="5"></td>
  </tr>
  <tr>
    <td>Poonam Rajurkar</td>
    <td>President</td>
    <td>  <input type="radio" id="html" name="vote_to" value="6"></td>
  </tr>
        </table>

        <div class="container bg-light">
            <div class="col-md-12 text-center">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                <button type="button" class="btn btn-danger"onclick="document.location='votingprofile.php'">Cancel</button>
            </div>
        </div>
    </div>
    </form>
</body>

<?php
if (isset($_POST['submit'])) {
  $vote_to = $_POST['vote_to'];
  $status = "1";
  if ($vote_to!=" ") {
    $insert = mysqli_query($con,"insert into `result`(`fname`, `pancard`, `vote_to`, `status`) values('$fname','$pancard','$vote_to','$status')");
     if($insert){
        echo '<script>
                alert("Voting successfull!");
                window.location = "votingprofile.php";
            </script>';
    }
  }
  else {
    echo '<script>
            alert("Voting Error!");
            window.location = "votingprofile.php";
        </script>';
  }
}

 ?>
