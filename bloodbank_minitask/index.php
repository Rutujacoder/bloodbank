<?php
 error_reporting(0);
$con =mysqli_connect("localhost","root","","bloodbank");
if (isset($_POST["submit"])) {
    $fn=$_POST["fname"];
    $no=$_POST["pno"];
    $em=$_POST["email"];
    $add=$_POST["address"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $zip=$_POST["zip"];
    $his=$_POST["history"];
    $bgrp=$_POST["bgroup"];
   $que="INSERT INTO `join_us`(`id`, `fname`, `no`, `email`, `address`, `city`, `state`, `zip`, `history`, `bgroup`) VALUES (NULL,'$fn','$no','$em','$add','$city','$state','$zip','$his','$bgrp')";
   $result=mysqli_query($con,$que);
}
if($result==true)
 {
  header("location:A+.php");
 }
?>
<?php
$con =mysqli_connect("localhost","root","","bloodbank");
if (isset($_POST["feedback"])){
$name=$_POST["fnm"];
$msg=$_POST["massage"];

 $query="INSERT INTO `feedback`(`id`, `name`, `massage`) VALUES (NULL,'$name','$msg')";

  $re=mysqli_query($con,$query);
}
?>
<?php
error_reporting(0);
$con =mysqli_connect("localhost","root" ,"","bloodbank");





if(isset($_POST["loginbtn"]))
{
  $user= $_POST["user"];
  $pwd1= $_POST["password"];
$qur= "SELECT * FROM `admin_login` WHERE   email ='$user' AND password ='$pwd1'";

    $re = mysqli_query($con,$qur);
    $row = mysqli_num_rows($re);
    
    if($row>0)
    {
          $data = mysqli_fetch_assoc($re);
          print_r($data);
          header('location:info.php');
    }
    else{
      ?> <script> alert("Please enter correct email or password")</script><?php
      
    }
  
  }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodbank_minitask | Anushree</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid" id="navbar-sticky">
                <a class="navbar-brand text-light" href="../index.html/index.html"><b>Blood Bank</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link  text-light active" aria-current="page"
                                href="../index.html/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="A+.php">Blood</a>
                        </li>

                    </ul>
                    <!-- modal start here -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-light btn-login" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Admin Login
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- form -->
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">User ID</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" name="user">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1 " name="password">
                                    </div>
                                    
                             <button type="submit" class="btn btn-primary" name="loginbtn">submit</button>
                                </form>
                                <!-- form end -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal end here -->


                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mt-5">
                <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/blood1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/bb3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/bb6.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6">
                <h1 class="text-center text-danger mt-5">Blood Available</h1>
                <hr>
                <div class="row blood-group">
                    <div class="col-sm-6">
                        <p class="text-dark text-center">A+</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;
                                <i class="fas fa-tint text-danger"></i></span>

                         <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='A +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">A-</p>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                            <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='A -'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">AB+</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                           <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">AB-</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                                    <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>


                         
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">B+</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                            <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">B-</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                            <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">O+</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                            <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-dark text-center">O-</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">Unit &nbsp;<i
                                    class="fas fa-tint text-danger"></i></span>
                           <?php
                             include 'db.php';

                             $selectquery = "SELECT COUNT(id) AS total From join_us WHERE bgroup='AB +'";

                             $result = mysqli_query($connection,$selectquery);
                             $values = mysqli_fetch_assoc($result);
                             $num_rows=$values['total'];
                             echo $num_rows;

                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-warning mt-5 p-5">
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="../images/bb4.jpg" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-center text-light">DONORS</h3>
                        <hr>
                        <span class="text-dark text-center p-2">“Bring a life back to power. Make blood donation
                            your responsibility”</span>
                        <hr>
                        <p class="round-percentage text-center bg-dark">98%</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="../images/bb5.jpg" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-center text-light">HOSPITALS</h3>
                        <hr>
                        <span class="text-dark text-center p-2"> “If you're a blood donor, you're a hero to someone,
                            somewhere.”</span>
                        <hr>
                        <p class="round-percentage text-center bg-dark">927+</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="../images/bb3.jpg" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-center text-light">DOCTORS</h3>
                        <hr>
                        <span class="text-dark text-center p-2">“Bring a life back to power. Make blood donation
                            your responsibility”</span>
                        <hr>
                        <p class="round-percentage text-center bg-dark">53+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center text-danger mb-5">JOIN US!</h1>
        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="inputEmail4" required name="fname">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="inputEmail4" required name="pno">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputEmail4" required name="email">
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="" required name="address">
            </div>
            
            <div class="row g-3">
                <div class="col-sm-4">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" required name="city">
                </div>
                <div class="col-sm-4">
                    <label for="inputState" class="form-label">State</label>
                    <select class="form-select" id="validationDefault04" required name="state">
                                            <option selected disabled value="">Choose...</option>
                                            <option selected>Choose...</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chhatisgarh">Chhatisgarh</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya pradesh">Madhya pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option  value="Punjab">Punjab</option>
                                            <option value=" Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                </div>
                <div class="col-sm-4">
                    <label for="inputZip" class="form-label">ZIP</label>
                    <input type="text" class="form-control" id="inputZip" required name="zip">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Any Medical History ( If Yes Then Mention Below
                        )</label>
                    <input type="text" class="form-control" id="inputEmail4" required name="history">
                </div>
                
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Hereby, I declared that above mention information is genuine at my risk.
                    </label>
                </div>
            </div>
            <div class="col-12">
                <a href="../Blood/A+.html"> <button type="submit" class="btn btn-success btn-lg" name="submit">SUBMIT</button></a>
            </div>
        </form>
    </div>
    <button type="button" class="btn btn-dark btn-lg" id="btn-feedback" data-bs-toggle="modal"
        data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Feedback</button>


    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Give Us Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="recipient-name" required name="fnm">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message</label><input type="text" class="form-control" id="recipient-name" required name="massage">
                            
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="feedback">Send</button>
                    </form>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="text-center bg-dark text-light p-4 mt-5">
            <span>Copyright &copy; Bloodbank.com</span>
        </div>
    </div>
</body>

</html>