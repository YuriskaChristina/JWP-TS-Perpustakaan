<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Form</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
                    <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class=" btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
						<div class="img">
                        <center><img src="<?= base_url('assets/image/logo.png');?>" width="400" alt=""></center>
                        </div>
						<div class="login-wrap p-3 p-md-4">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-3">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="<?php echo base_url('Login/auth')?>" method="POST" enctype="multipart/form-data" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="email" class="form-control" name="email" required>
			      		<label class="form-control-placeholder" for="email"  >Email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="password" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
                        <label for="remember" class="text-info"><span>Remember me</span> <span><input id="remember" name="remember" type="checkbox"></span></label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="">Register</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

