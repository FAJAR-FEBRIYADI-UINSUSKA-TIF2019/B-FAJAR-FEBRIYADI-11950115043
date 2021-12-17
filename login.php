<?php
	
	ob_start();
	session_start();

	$koneksi = new mysqli("localhost","root","","db_rentalfajar");
	
	if($_SESSION) {
		
		header("location:index.php");
		
	} else {

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Transport Login</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- ICON WEB -->
	<link rel="shortcut icon" href="assets/img/transportation-flaticon.png">
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <style>
   
   body {
	background-image: url("assets/img/imageslog.jpg");
	background-repeat: no-repeat;
	background-size:cover

	}

	</style>

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Log In Rental App</h2>
               
                <h5>Tugas Pengembangan Web Fajar Febriyadi TIF 4B</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Please Insert Username and Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST">
                                       <br />
                                     	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />
                                        </div>
                                            <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
									
									 <input type="submit" name="login" value="Login" class="btn btn-primary ">

                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>

<?php

if(isset($_POST['login'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = $koneksi->query("select * from tb_user where username='$username' and password='$password'");
	$data = $sql->fetch_assoc();
	$jumpa = $sql->num_rows;
	
	if($jumpa >= 1){
		
		session_start();
		
		if($data['level'] == "admin"){
			
			$_SESSION['admin'] = $data['id'];
			header("location:index.php");
			
		} else if($data['level'] == "user"){
			
			$_SESSION['user'] = $data['id'];
			header("location:index.php");
			
		}  
		
		
	} else {
			
			?>

				<script type="text/javascript">
					alert("Gagal Melakukan Login, Harap Periksa Username Dan Password")
				</script>
				
			<?php
			
		}
	
	}

	}

?>
