<?php include 'acc_header.php'; ?>

<style>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
	<?php include 'style1.css'; ?>
</style>

<div class="login_box mt-4">
      	<div class="row">
       	  <div class="col-12 text-center">
			 	<img class="mt-3" src="images/unlock-icon.png" alt="Login">
		  </div>
		</div>
		
		<form class="login">
		 	<div class="row">
			 	<div class="col-12 form-group">
					<label for="4email" class="text-light">Email</label>
					<input type="email" class="form-control email_box" id="4email" placeholder="Email">
				</div>
            </div>
			<div class="row">
				<div class="col-12 form-group">
					<label for="4pass" class="text-light">Password</label>
					<input type="password" class="form-control pass_box" id="4pass" placeholder="Password">
				</div>
			</div>
			
		  <div class="form-group">
			  <div class="form-check">
				  <input class="form-check-input" type="checkbox" id="signCheck">
				  <label class="form-check-label text-light" for="signCheck">
						Remember me
				  </label>
			  </div>
			</div>

			<button type="submit" class="btn btn-primary sign_in">Sign in</button>
			
			<div class="row mt-2">
				<div class="col-6">
					<div class="form-group">
						<a href="forgot_pass.php" class="text-light">Forgot password?</a>
					</div>
				</div>
				
				<div class="col-6">
					<div class="form-group text-right">
						<a href="signup.php" class="text-primary text-light">Signup</a>
					</div>
				</div>
			</div>
			
        </form>
    </div>

<?php include 'acc_footer.php'; ?>