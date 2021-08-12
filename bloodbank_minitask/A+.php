<?php
$con=mysqli_connect("localhost","root","","bloodbank");
if (isset($_POST["submit"])){
    $nm=$_POST["name"];
    $dnm=$_POST["dname"];

    $bu=$_POST["bunit"];


    $file = $_FILES["file"];
$filename=$file["name"];
$filepath=$file["tmp_name"];
$fileerror=$file["error"];
if($fileerror==0)
{
    $destfile='dbimages/'.$filename;
    move_uploaded_file($filepath, $destfile);
    


}

    $query="INSERT INTO `request`(`id`, `name`, `doctor_name`, `doctor_pri`, `bunit`) VALUES (NULL,'$nm','$dnm','$destfile','$bu')";
    $result=mysqli_query($con,$query);
}

?>
<?php
$con=mysqli_connect("localhost","root","","bloodbank");
if (isset($_POST["send"])){
    $na=$_POST["dnm"];
     $p=$_POST["checkbox"];
    $dbu=$_POST["dbunit"];

    $que="INSERT INTO `donate`(`id`, `name`, `place`, `bunit`) VALUES (NULL,'$na', '$p','$dbu')";
    $re=mysqli_query($con,$que);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloodbank-minitask || Anushree</title>
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
                            <a class="nav-link text-secondary" aria-current="page"
                                href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light active" href="A+.php">Blood</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row mt-5">
            
            <div class="col-sm-6">
                <img src="../images/requester_new.png" style="height: 50%;" alt="">
                <br>
                <h1 class="text-danger">For Request Blood</h1>
                <hr>
                <button type="button" class="btn btn-danger" id="btn-feedback" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Request</button>


                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Why You Need A Blood?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" enctype="multipart/form-data"> 
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name</label>
                                        <input type="text" class="form-control" id="recipient-name" required name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Referal Doctor's Name</label>
                                        <input type="text" class="form-control" id="recipient-name" required name="dname">
                                        
                                    </div>
                                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Blood Group</label>
                    <select id="inputState" class="form-select" name="bgroup">
                        <option selected>Choose...</option>
                        <option value="A +">A +</option>
                        <option value="A -">A -</option>
                        <option value="B +">B +</option>
                        <option value="B -">B -</option>
                        <option value="AB +">AB +</option>
                        <option value="AB -">AB -</option>
                        <option value="O +">O +</option>
                        <option value="O -">O -</option>
                    </select>
                </div>
                                    <div class="input-group">
                                        <label for="message-text" class="col-form-label">Doctor's Priscription</label>
                                        <input type="file" name="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                      </div>
                                      <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Blood Units You Need?</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroupPrepend2">Unit</span>
                                            <input type="text" class="form-control" id="validationDefaultUsername"
                                                aria-describedby="inputGroupPrepend2" required name="bunit">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-6">
                <img src="../images/donor_new.png" style="height: 50%;"  alt="">
                <br>
                <h1 class="text-success">For Donate Blood</h1>
                <hr>
                <button type="button" class="btn btn-success" id="btn-feedback" data-bs-toggle="modal"
                    data-bs-target="#exampleModal3" data-bs-whatever="@mdo">Donate</button>


                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Brilliant!</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name</label>
                                        <input type="text" class="form-control" id="recipient-name" required name="dnm">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Where You Want To Donate?</label>
                                       <select name="checkbox" id="radio">
                                           <option value="home">HOME</option>
                                           <option value="hospital">HOSPITAL</option>
                                       </select>
                                       
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPassword4" class="form-label">Blood Units You Need?</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroupPrepend2">Unit</span>
                                            <input type="text" class="form-control" id="validationDefaultUsername"
                                                aria-describedby="inputGroupPrepend2" required name="dbunit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                    <label for="inputState" class="form-label">Blood Group</label>
                    <select id="inputState" class="form-select" name="bgroup">
                        <option selected>Choose...</option>
                        <option value="A +">A +</option>
                        <option value="A -">A -</option>
                        <option value="B +">B +</option>
                        <option value="B -">B -</option>
                        <option value="AB +">AB +</option>
                        <option value="AB -">AB -</option>
                        <option value="O +">O +</option>
                        <option value="O -">O -</option>
                    </select>
                </div>
                                   <hr>
                                   <h1 class="text-center text-primary">Congratulations!</h1>
                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="send">Send</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                            </div>
                        </div>
                    </div>
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