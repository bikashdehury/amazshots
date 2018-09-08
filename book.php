<?php include 'header.php'; ?>

<style>
	<?php include 'style2.css'; ?>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
	body {
		background-image: url(images/wallpaper1234.jpg);
		background-repeat: no-repeat;
		background-size: 150% 100%;
	}
</style>

<h2 class="text-center my-4 text-light" style="text-shadow: 0px 0px 20px black;">Book Now</h2>

<div class="container-fluid mb-5 text-light" style="background-color: rgba(0,0,0,0.5); width: 50%; border: 1px solid #9B9B9B; border-radius: 3%; box-shadow: 0px 0px 100px 2px black;">

	<form action="" method="" id="form1" class="p-5">
		
		<div class="form-group">
			<label for="name" class="col-form-label">Full Name</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Full Name">
		</div>
		
		<div class="form-group">
			<label for="phone" class="col-form-label">Phone</label>
			<input type="text" class="form-control" id="phone" placeholder="e.g. 9876543210">
		</div>
		
		<div class="form-group">
			<label for="email" class="col-form-label">E-mail</label>
			<input type="email" class="form-control" id="email" placeholder="e.g abc@example.com">
		</div>


		<div class="form-row">
			<div class="form-group col-3">
				<label for="gender">Gender</label>
				<select name="gender" id="gender" class="form-control">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-6">
				<label for="service" class="col-form-label">Choose Plan</label>
				<select name="service" id="service" class="form-control">
					<option value="portrait">Portrait</option>
					<option value="portfolio">Porfolio &amp; Fashion</option>
					<option value="baby_shoot">Baby shoot</option>
					<option value="studio_shoot">Studio shoot</option>
					<option value="wedding_eco">Wedding-ECONOMY</option>
					<option value="wedding_pre">Wedding-PREMIUM</option>
					<option value="wedding_ulpre">Wedding-ULTRA PREMIUM</option>
					<option value="event">Event Photography</option>
					<option value="product">Product Photography</option>
					<option value="architecture">Architecture photography</option>
					<option value="other">Other</option>
				</select>
				<small>For more details see <a target="_blank" href="services.php" style="text-decoration: underline">Services</a></small>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<label for="service_date" class="col-form-label">Choose Start-Date</label>
				<input type="date" class="form-control" id="service_date">
			</div>
			<div class="col-6">
				<label for="days_no" class="col-form-label">No. of days for the shoot</label>
				<input type="number" class="form-control" id="days_no" placeholder="e.g 2">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-6">
					<label for="add1" class="col-form-label">Address line 1</label>
					<input type="text" class="form-control" id="add1" placeholder="House no./Colony/Street">
				</div>
				<div class="col-6">
					<label for="add2" class="col-form-label">Address line 2</label>
					<input type="text" class="form-control" id="add2" placeholder="Area/Locality">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-6">
					<label for="city" class="col-form-label">City</label>
					<input type="text" class="form-control" id="city" placeholder="City/District">
				</div>
				<div class="col-6">
					<label for="zip" class="col-form-label">Zip Code</label>
					<input type="text" class="form-control" id="zip" placeholder="Zip Code">
				</div>
			</div>
		</div>
		
		<div class="pt-2 text-right">
			<button type="submit" class="btn btn-primary w-25">Submit</button>
			<button type="reset" class="btn btn-outline-light">Reset</button>
		</div>
		
	</form>

</div>

<?php include 'footer.php'; ?>