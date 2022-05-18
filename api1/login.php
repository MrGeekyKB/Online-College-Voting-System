<?php
include "config1.php";
 ?>
<?php
    $email = $_POST['uname'];
    $password = $_POST['pswd'];
   if ($email != "" && $password != ""){

        $sql_query = "SELECT * FROM `voters` WHERE pancard='".$email."' and pass='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_assoc($result);
		if($row!=0){
			do
			{
				$fname=$row['fname'];
        $bday=$row['bday'];
        $pancard=$row['pancard'];
        $mob=$row['mob'];
        $address=$row['address'];
        $role=$row['role'];
					$_SESSION["fname"]=$fname;
          $_SESSION["bday"]=$bday;
          $_SESSION["pancard"]=$pancard;
          $_SESSION["mob"]=$mob;
          $_SESSION["address"]=$address;
          $_SESSION["role"]=$role;
						    ?>  <script>

              window.location.href = "../votingprofile.php";
               </script>
			<?php

			}while($row = mysqli_fetch_assoc($result));
			}

		else{
            ?>  <script>

               alert("Invalid ID or Password");
               window.location.href = "../loginpaage.html";
               </script>
			<?php

		}

    }
      else{
		       echo "Username or Password missing !";

	  }
 ?>
