<?php
    include("config1.php");

    $name = $_POST['fname'];
    $pancard = $_POST['pancard'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $mob = $_POST['mob'];
    $add = $_POST['address'];
    $dob = $_POST['bday'];
    $role = $_POST['role'];
    $status = "0";
    $votes = "0";
    $imgsrc="uploads/";
    if ($cpass==$pass) {
      $insert = mysqli_query($con,"insert into `voters`(`fname`, `bday`, `pancard`, `pass`, `mob`, `address`, `role`, `imgsrc`) values('$name','$dob','$pancard','$pass','$mob','$add','$role','$imgsrc')");
       if($insert){
          echo '<script>
                  alert("Registration successfull!");
                  window.location = "../homepage.html";
              </script>';
      }
    }
    else {
      echo '<script>
              alert("Password Did not Matched!");
              window.location = "../registration.html";
          </script>';
    }




?>
