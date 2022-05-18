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
  <title>registration page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline "href="">WELCOME <br> <?php echo $fname ?></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" ><a href="/homepage.html">Home</a></span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li> -->
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">voting</span></a>
                        </li>
                        <!-- <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="result.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Results</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">voter name</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-lg-12 py-4 bg-light text-center ">
               <a style="    font-size: -webkit-xxx-large;
               font-family: auto; color: black;"><u style="border: 2px solid rgb(65, 63, 63);">My Profile</u></a>

            </div>
        </div>
        <div class="">
        <div class=" row mb-3 pt-5 ">
            <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label1">Name:-</label>
        </div>
        <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label"><?php echo $fname ?></label>
        </div>
        </div>
        <div class=" row mb-3 pt-5 ">
            <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label1">PAN NO :-</label>
        </div>
        <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label"><?php echo $pancard ?></label>
        </div>
        </div>
        <div class=" row mb-3 pt-5 ">
            <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label1">ADRESS:-</label>
        </div>
        <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label"><?php echo $address ?> </label>
        </div>
        </div>
        <div class=" row mb-3 pt-5 ">
            <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label1">MOB NO.:-</label>
        </div>
        <div class="col-lg-3">
            <label for="exampleInputEmail1" class="form-label"> <?php echo $mob ?> </label>
        </div>
        </div>

<center><a style="padding:15px; background-color: rgb(54, 255, 0)" href="voting.php">Click Here To Vote</a></center>
    </div>
    </div>
    </div>
</div>

</body>
