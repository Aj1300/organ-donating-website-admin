<!doctype html>
<html lang="en">
  <head>
  	<title>Login 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="public/adminassets/login1/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
						<form action="<?=base_url();?>login/signin" method="post" id="login" class="login-form">
		      		<div class="form-group">
		      			<input type="text" name="email" id="email" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	          
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="public/adminassets/login1/js/jquery.min.js"></script>
  <script src="public/adminassets/login1/js/popper.js"></script>
  <script src="public/adminassets/login1/js/bootstrap.min.js"></script>
  <script src="public/adminassets/login1/js/main.js"></script>

	</body>
</html>

