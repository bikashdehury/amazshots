<?php include 'acc_header.php'; ?>

<style>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
	<?php include 'style1.css'; ?>
</style>

<div class="signup_box mt-4">
		<div class="row pt-3 pb-1">
			<div class="col-12 text-center">
				<img class="rounded-circle img-fluid" style="border: 3px solid black;box-shadow: 0px 0px 80px -5px white;height: 100px;width: 100px;padding: 15px;background-color: whitesmoke;" src="images/signup.png" alt="Signup">
			</div>
		</div>
		
	  <form class="signup">
		  <div class="form-row">
			  <div class="col form-group">
				  <label for="f_name" class="text-light">First Name</label>
				  <input type="text" class="form-control fst_name" id="f_name" placeholder="First Name">
			  </div>
			  <div class="col form-group">
				  <label for="l_name" class="text-light">Last Name</label>
				  <input type="text" class="form-control lst_name" id="l_name" placeholder="Last Name">
			  </div>
		  </div>
		  
		  <div class="form-row">
		    <div class="col form-group">
				  <label for="s_email" class="text-light">Email</label>
				  <input type="email" class="form-control sgn_email" id="s_email" placeholder="e.g. abc@gmail.com">
			  </div>
		  </div>
		  
		  <div class="form-row">
			  <div class="col form-group">
				  <label for="s_pass" class="text-light">Password</label>
			    <input type="password" class="form-control sgn_pass" id="s_pass" placeholder="Password">
			  </div>
			  <div class="col form-group">
				  <label for="s_confpass" class="text-light">Confirm Password</label>
				  <input type="password" class="form-control sgn_confpass" id="s_confpass" placeholder="Retype password">
			  </div>
		  </div>
		  
		  <div class="form-row">
			  <div class="col form-group">
				  <div class="form-check-inline">
					  <input type="radio" class="form-check-input" id="s_male" name="gender_btn">
					  <label class="form-check-label text-light" for="s_male">Male</label>
				  </div>
				  <div class="form-check-inline">
					  <input type="radio" class="form-check-input" id="s_female" name="gender_btn">
					  <label class="form-check-label text-light" for="s_female">Female</label>
				  </div>
			  </div>
		  </div>
		  
		  <div class="row">
			  <div class="col-6">
				  <button type="submit" class="btn btn-primary px-4">Signup</button>
			  </div>
			  <div class="col-6 text-right">
				  <a href="login.php" class="text-primary"><b>Login</b></a>
			  </div>
		  </div>
		  
		</form>
    </div>

<?php include 'acc_footer.php'; ?>