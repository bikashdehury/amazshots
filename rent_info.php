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

	<form action="" method="" id="form2" class="p-5">

		<div class="form-row">
			<div class="form-group col-6">
				<label for="camera_rent1" class="col-form-label">Camera 1</label>
				<select name="camera_rent1" id="camera_rent1" class="form-control">
					<option value="nik_750">Nikon D750</option>
					<option value="nik_7100">Nikon D7100</option>
					<option value="nik_5300">Nikon D5300</option>
					<option value="nik_3400">Nikon D3400</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="camera_rent2" class="col-form-label">Camera 2</label>
				<select name="camera_rent2" id="camera_rent2" class="form-control">
					<option value="can_7d">Canon EOS 7D Mark II</option>
					<option value="can_5d">Canon EOS 5D Mark IV</option>
					<option value="can_1300">Canon EOS 1300D</option>
					<option value="can_3000">Canon EOS 3000D</option>
				</select>
			</div>
		</div>
		
		<hr style="border: 0.5px solid white;">
		
		<div class="form-row">
			<div class="form-group col-6">
				<label for="lens_rent1" class="col-form-label">Lens 1</label>
				<select name="lens_rent1" id="lens_rent1" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="lens_rent2" class="col-form-label">Lens 2</label>
				<select name="lens_rent2" id="lens_rent2" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-6">
				<label for="lens_rent3" class="col-form-label">Lens 3</label>
				<select name="lens_rent3" id="lens_rent3" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="lens_rent4" class="col-form-label">Lens 4</label>
				<select name="lens_rent4" id="lens_rent4" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-6">
				<label for="lens_rent5" class="col-form-label">Lens 5</label>
				<select name="lens_rent5" id="lens_rent5" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="lens_rent6" class="col-form-label">Lens 6</label>
				<select name="lens_rent6" id="lens_rent6" class="form-control">
					<option value="nik_50mm">Nikkor AF-S DX 50mm</option>
					<option value="nik_70_300mm">Nikkor AF-P DX 70-300mm</option>
					<option value="nik_35mm">Nikkor AF-S DX 35mm</option>
					<option value="nik_10_20mm">Nikkor AF-P DX 10-20mm</option>
					<option value="can_50mm">Canon EF 50mm</option>
					<option value="can_70_200mm">Canon EF 70-200mm</option>
					<option value="can_10_18mm">Canon EF-S 10-18mm</option>
					<option value="can_22mm">Canon EF-M 22mm</option>
				</select>
			</div>
		</div>
		
		<hr style="border: 0.5px solid white;">
		
		<div class="form-row">
			<div class="form-group col-6">
				<label for="acc_rent1" class="col-form-label">Accessories 1</label>
				<select name="acc_rent1" id="acc_rent1" class="form-control">
					<option value="yongnuo_flash">Yongnuo YN560-IV Flash</option>
					<option value="osaka_flash">Osaka TTL DF860 Flash</option>
					<option value="stablizer">DSLR Stablizer</option>
					<option value="tripod">Tripod</option>
					<option value="flash_softbox">Flash with soft box</option>
					<option value="backdrop_screen">Backdrop screen</option>
					<option value="reflector">Reflector</option>
					<option value="umbrella">Light umbrellas with stand</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="acc_rent2" class="col-form-label">Accessories 2</label>
				<select name="acc_rent2" id="acc_rent2" class="form-control">
					<option value="yongnuo_flash">Yongnuo YN560-IV Flash</option>
					<option value="osaka_flash">Osaka TTL DF860 Flash</option>
					<option value="stablizer">DSLR Stablizer</option>
					<option value="tripod">Tripod</option>
					<option value="flash_softbox">Flash with soft box</option>
					<option value="backdrop_screen">Backdrop screen</option>
					<option value="reflector">Reflector</option>
					<option value="umbrella">Light umbrellas with stand</option>
				</select>
			</div>
		</div>
		
		<div class="form-row">
			<div class="form-group col-6">
				<label for="acc_rent3" class="col-form-label">Accessories 3</label>
				<select name="acc_rent3" id="acc_rent3" class="form-control">
					<option value="yongnuo_flash">Yongnuo YN560-IV Flash</option>
					<option value="osaka_flash">Osaka TTL DF860 Flash</option>
					<option value="stablizer">DSLR Stablizer</option>
					<option value="tripod">Tripod</option>
					<option value="flash_softbox">Flash with soft box</option>
					<option value="backdrop_screen">Backdrop screen</option>
					<option value="reflector">Reflector</option>
					<option value="umbrella">Light umbrellas with stand</option>
				</select>
			</div>
			
			<div class="form-group col-6">
				<label for="acc_rent4" class="col-form-label">Accessories 4</label>
				<select name="acc_rent4" id="acc_rent4" class="form-control">
					<option value="yongnuo_flash">Yongnuo YN560-IV Flash</option>
					<option value="osaka_flash">Osaka TTL DF860 Flash</option>
					<option value="stablizer">DSLR Stablizer</option>
					<option value="tripod">Tripod</option>
					<option value="flash_softbox">Flash with soft box</option>
					<option value="backdrop_screen">Backdrop screen</option>
					<option value="reflector">Reflector</option>
					<option value="umbrella">Light umbrellas with stand</option>
				</select>
			</div>
		</div>
		
		<div class="pt-2 row">
			<div class="col-6">
				<a href="rent_person.php" class="font-weight-bold text-light">Back</a>
			</div>
			<div class="col-6 text-right">
				<button type="submit" class="btn btn-primary w-50">Apply</button>
				<button type="reset" class="btn btn-outline-light">Reset</button>
			</div>
		</div>

	</form>

</div>

<?php include 'footer.php'; ?>
