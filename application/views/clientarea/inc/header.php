<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Convert Pulsa</title>

	    <!-- Bootstrap -->
	    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
	    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.wizard.css">



 	</head>
  	<body style="background-color: ;">
   
	<!--NAVIGATION-->

	<div id="myNavbar" class="navbar-default navbar-fixed-top" role="navigation">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            
	            <a href="#" class="navbar-brand"><img src="<?php echo base_url() ?>assets/img/logo.png" style="height: 38px; width: 75px;"></a>
	        </div>
	        <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="<?php echo base_url('clientarea/home') ?>">Home</a></li>
	                <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bantuan <span class="fa fa-caret-down"></span></a>
							<ul class="dropdown-menu nav">
									<li><a href="<?php echo base_url('cara_order') ?>">Cara order</a></li>
									<li><a href="<?php echo base_url('cara_pembayaran')?>">Cara Pembayaran</a></li>
							</ul>
						</li>
	                <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
	                <li><a href="">Tentang</a></li>
	                <?php
	                	if(!$this->session->userdata('username'))
	                	{
	                ?>		
	          		<li><a href="<?php echo base_url('clientarea/login') ?>"><input type="submit" name="login" class="btn btn-default btn-sm" value="Login"></a></li>
	          		<?php
	          			}
	          		?>
	          		<?php
	          			if($this->session->userdata('username'))
	          			{
	          		?>
	          			<li><a href="<?php echo base_url('clientarea/user_logout') ?>"><input type="submit" name="logout" class="btn btn-default btn-sm" value="Logout"></a></li>
	          		<?php	
	          			}
	          		?>
	            </ul>
	        </div>
	    </div>
	</div>
	<br><br><br><br>
	<div class="container">