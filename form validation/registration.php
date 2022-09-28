<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="/style.css"> -->
	<style type="text/css">
		.bgimg {
    		background-image: url('./rainbow.jpg');
			height: 630px;
		}
	</style>
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div class="bgimg">
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row justify-content-center pt-4">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<div>
						<label for="firstname"><b>First Name</b></label>
						<input class="form-control" id="firstname" type="text" name="firstname" required>
					</div>

					<div>
						<label for="lastname"><b>Last Name</b></label>
						<input class="form-control" id="lastname"  type="text" name="lastname" required>
					</div>

					<div>
						<label for="email"><b>Email Address</b></label>
						<input class="form-control" id="email"  type="email" name="email" required>
					</div>

					<div>
						<label for="phonenumber"><b>Phone Number</b></label>
						<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
					</div>

					<div>
						<label for="password"><b>Password</b></label>
						<input class="form-control" id="password"  type="password" name="password" required>
					</div>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>