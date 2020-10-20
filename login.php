<?php 
	require('user/controllers/authController.php');
	require'header.php';
		//verify if user not logged in
		// if(!isset($_SESSION['firstname'])){
		// 	header('location: login.php');
		// 	exit();
		// }
?>
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">	
<!-- STYLE CSS -->
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<div class="wrapper" style="background-image: url('');">
			<div class="inner">
				<form action="login.php" method="POST">
					<h3>Login Form</h3>

					<?php if(count($errors)>0):?>
						<div class="alert alert-danger">
							<?php foreach($errors as $error):?>
								<li><?php echo $error;?></li>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="text" class="form-control" name="email">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>

					<div class="form-wrapper">
					<button type="submit" class="btn btn-default" name="login-btn">Login</button>
					</div>

					<div class="form-wrapper">
						<p class="text-center">Not yet registred? <a href="signup.php">Register Here</a></p>
					</div>
						
					 
				</form>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>