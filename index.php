<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>

<?php

	session_start();
	error_reporting();

	include "function.php";
	
	$koneksi = new mysqli("localhost","root","","db_rentalfajar");

	
if($_SESSION['admin'] || $_SESSION['user']) {
	

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rental Transportasi</title>
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
	     <!-- TABLE STYLES-->
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Rental Transportasi</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y H:i:s'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">		
					<?php
					session_start();
	
					if($_SESSION['admin']) {
	
					?>
					
					<li class="text-center">
					
                    <img src="assets/img/admin.png" class="user-image img-responsive"/>
					</li>
				
                    <li>
                        <a  href="index.php"><i class="fa fa-globe fa-3x"></i> Dashboard</a>
                    </li>
					
					<li>
                        <a  href="?page=peminjam"><i class="fa fa-link fa-3x"></i> Data Peminjam</a>
                    </li>
					
					<li>
                        <a  href="?page=transportasi"><i class="fa fa-random fa-3x"></i> Data Transportasi</a>
                    </li>
					
					<li>
                        <a  href="?page=transaksi"><i class="fa fa-book fa-3x"></i> Data Transaksi</a>
                    </li>
					
					<li>
                        <a  href="?page=user"><i class="fa fa-heart fa-3x"></i> Data User</a>
                    </li>
					
                    <?php } else if ($_SESSION['user']){ 
					
					?>
					
					<li class="text-center">
					
                    <img src="assets/img/user.png" class="user-image img-responsive"/>
					</li>
					
					<li>
                        <a  href="index.php"><i class="fa fa-globe fa-3x"></i> Dashboard</a>
                    </li>
					
					<li>
                        <a  href="?page=peminjam"><i class="fa fa-link fa-3x"></i> Data Peminjam</a>
                    </li>
					
					<?php } ?>
					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
					
						<?php
						
						$page = $_GET['page'];
						$aksi = $_GET['aksi'];
						
						if ($page == "transportasi") {
							if ($aksi == "") {
								include "page/transportasi/transportasi.php";
							} else if ($aksi == "tambah") {
								include "page/transportasi/tambah.php";
								
							} else if ($aksi == "ubah") {
								include "page/transportasi/ubah.php";
								
							} else if ($aksi == "hapus") {
								include "page/transportasi/hapus.php";
								
							}
							
						} else if ($page == "peminjam") {
							if ($aksi == "") {
								include "page/peminjam/peminjam.php";
							} else if ($aksi == "tambah") {
								include "page/peminjam/tambah.php";
							} else if ($aksi == "ubah") {
								include "page/peminjam/ubah.php";
							} else if ($aksi == "hapus") {
								include "page/peminjam/hapus.php";
							} 
						} else if ($page == "transaksi") {
							if ($aksi == "") {
								include "page/transaksi/transaksi.php";
							} else if ($aksi == "tambah") {
								include "page/transaksi/tambah.php";
							} else if ($aksi == "kembali") {
								include "page/transaksi/kembali.php";
							} else if ($aksi == "perpanjang") {
								include "page/transaksi/perpanjang.php";
							}
						}  else if ($page == "user") {
							if ($aksi == "") {
								include "page/user/user.php";
							} else if ($aksi == "tambah") {
								include "page/user/tambah.php";
							} else if ($aksi == "ubah") {
								include "page/user/ubah.php";
							} else if ($aksi == "hapus") {
								include "page/user/hapus.php";
							}
						} else if ($page=="") {
							
							include "home.php";
							
						}
					
					?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
	
	     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

<?php



} else {
	
	header("location:login.php");
	
}

?>
