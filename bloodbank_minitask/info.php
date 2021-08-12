<!DOCTYPE html>
<html>
<head>
	<title>	</title>
  <link href="C:\xampp\htdocs\Sitex Project1\index.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
      *{margin: 0; padding: 0; box-sizing: border-box; font-family:Arial;}
      .main-div{
      	width: 100%; height: 100vh;
      	display: flex;
      	flex-direction: column;
      	justify-content: center;
      	align-items: center;
      }
      .center-div{
      	width: 90%;
      	height: 100%;
      	
      	padding: 20px 0 0 0;
      	box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
      	border-radius: 10px;
      }
      h1{
      	font-size: 30px;
      	color:blue;
      	text-align: center;
      	

      }
      table{
      	border-collapse: collapse;
      	background-color: #fff;
      	
      	border-radius: 10px;
      	margin: auto;
      }
      th,td{
      	border:1px solid #f2f2f2;
      	padding: 5px 5px;
      	text-align: center;
      	color: grey;
      }
      th{
      	text-transform: uppercase;
      	font-weight: 1000px;

      }
      td{
      	font-size: 20px;
      }
      .email-style{
      	font-size: 14px;
      	color:grey;
      	display: inline-block;
      	background: #f2f2f2;
      	-webkit-border-radius: 2px;
      	-moz-border-radius: 2px;
      	border-radius: 2px;
      	line-height: 30px;
      	padding: 0 14px;
      }
      .post-class{
      	text-transform: uppercase;
      }
      .fa{
      	font-size: 18px;
      }
      .fa-trash{
      	color: #ff0000;
      }
      a{
      	text-decoration: none; display:flex; justify-content: center;
      }
  </style>
	</head>
<body>
	<div class="row">
		<div class="col-md-12">
<div class="main-div">
	<h1>Requestor Info</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
					    <th>ID</th>
					    <th>Name</th>
					    <th>Referal Doctor's Name</th>
					 
              <th>Doctor's Priscription</th>
					    <th>Blood Units You Need?</th>
					   
					 </tr>
					 </thead>
					 <tbody>
					 	<?php
                             include 'db.php';

                             $selectquery = "select * from request";

                             $query = mysqli_query($connection,$selectquery);

                             $nums = mysqli_num_rows($query);


                             while($res = mysqli_fetch_array($query)){
                             	?>
	                         <tr>
					 		<td><?php echo $res['id'];?></td>
					 		<td><?php echo $res['name'];?></td>
                           <td><?php echo $res['doctor_name'];?></td>
                           <td><?php echo $res['doctor_pri'];?></td>
                           <td><?php echo $res['bunit'];?></td>
					 		
					 		
					 		<td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
             <td>
                
                <a href="approve1.php?id=<?php echo $res['id'];?>" class="btn btn-primary"> Approve </a>

        </button>
              </td>
                
                  
              </td>
<!-- 
              <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="APPROVE" name="approve"><i class="fa fa-edit" aria-hidden="true"></i></a></td><i class="fa fa-trash" aria-hidden="true"></i>
            </form> -->
					 	</tr>



                        <?php
                         }

                        ?>

					 	


					 </tbody>
					 </table>
					 </div>
					 </div>
					 </div>
					</div>
				</div>


				<div class="row">
		<div class="col-md-12">
<div class="main-div">
	<h1>Donor Info</h1>
	<div class="center-div">
		<div class="table-responsive">
			<table>
				<thead>
					<tr>
					    <th>ID</th>
					    <th>Name</th>
					    <th>Where You Want To Donate</th>
					 
              <th>Blood Units You Need</th>
					   
					   
					 </tr>
					 </thead>
					 <tbody>
					 	<?php
                             include 'db.php';

                             $selectquery = "select * from donate";

                             $query = mysqli_query($connection,$selectquery);

                             $nums = mysqli_num_rows($query);


                             while($res = mysqli_fetch_array($query)){
                             	?>
	                         <tr>
					 		
					 		<td><?php echo $res['id'];?></td>
                           <td><?php echo $res['name'];?></td>
                           <td><?php echo $res['place'];?></td>
                           <td><?php echo $res['bunit'];?></td>
					 		
					 		
					 		<td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
             <td>
                
                <a href="approve1.php?id=<?php echo $res['id'];?>" class="btn btn-primary"> Approve </a>

        </button>
              </td>
                
                  
              </td>
<!-- 
              <td><a href="#" data-toggle="tooltip" data-placement="bottom" title="APPROVE" name="approve"><i class="fa fa-edit" aria-hidden="true"></i></a></td><i class="fa fa-trash" aria-hidden="true"></i>
            </form> -->
					 	</tr>



                        <?php
                         }

                        ?>

					 	


					 </tbody>
					 </table>
					 </div>
					 </div>
					 </div>
					</div>
				</div>


            

</body>
</html>