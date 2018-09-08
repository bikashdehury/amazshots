<?php include 'header.php'; ?>

<style>
	<?php include 'style2.css'; ?>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
	body {
		background-image: url(images/drop.jpg);
		background-repeat: no-repeat;
		background-size: 100% auto;
		background-attachment: fixed;
	}
</style>

<h2 class="text-center my-4 text-light" style="text-shadow: 0px 0px 20px black;">Book for rent</h2>

<div class="container-fluid mb-5 text-light" style="background-color: rgba(27,46,72,0.50); width: 50%; border: 1px solid white; border-radius: 3%; box-shadow: 0px 0px 100px 2px black;">

	<form action="rent_info.php" method="" id="form2" class="p-5">

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

		<div class="row">
			<div class="col-6">
				<label for="dob" class="col-form-label">Date of birth</label>
				<input type="date" class="form-control" id="dob">
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-6">
					<label for="add1_job" class="col-form-label">Address line 1</label>
					<input type="text" class="form-control" id="add1_job" placeholder="House no./Colony/Street">
				</div>
				<div class="col-6">
					<label for="add2_job" class="col-form-label">Address line 2</label>
					<input type="text" class="form-control" id="add2_job" placeholder="Area/Locality">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-6">
					<label for="city_job" class="col-form-label">City</label>
					<input type="text" class="form-control" id="city_job" placeholder="City/District">
				</div>
				<div class="col-6">
					<label for="zip_job" class="col-form-label">Zip Code</label>
					<input type="text" class="form-control" id="zip_job" placeholder="Zip Code">
				</div>
			</div>
		</div>

		<div class="pt-2 text-right">
			<button type="submit" class="btn btn-primary w-25">Proceed</button>
			<button type="reset" class="btn btn-outline-light">Reset</button>
		</div>

	</form>

</div>

<?php include 'footer.php'; ?>
