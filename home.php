
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Welcome To Rental Transport</h2>   
                        <h5>You Can Use It Or Manage It. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->

                <div class="row">
				
				<?php
					session_start();
	
					if($_SESSION['admin']) {
	
					?>
				
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box"><a href ="?page=peminjam&aksi=""">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-link"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">001 Person</p>
                    <p class="text-muted">Data Peminjam</p>
                </div>
             </div>
			 </a>
		     </div>
			 
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box"><a href ="?page=transportasi&aksi=""">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-random"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">002 Trans</p>
                    <p class="text-muted">Data Transportasi</p>
                </div>
             </div>
			 </a>
		     </div>
			 
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box"><a href ="?page=transaksi&aksi=""">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">003 Give</p>
                    <p class="text-muted">Data Transaksi</p>
                </div>
             </div>
			 </a>
		     </div>
			 
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box"><a href ="?page=user&aksi=""">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-heart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">004 Users</p>
                    <p class="text-muted">Data Pada User</p>
                </div>
             </div>
			 </a>
		     </div>
			 
			 <?php } else if ($_SESSION['user']){ 
					
				?>
				
				<div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box"><a href ="?page=peminjam&aksi=""">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-link"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">001 Person</p>
                    <p class="text-muted">Data Peminjam</p>
                </div>
             </div>
			 </a>
		     </div>
				
				<?php } ?>
			 
			</div>