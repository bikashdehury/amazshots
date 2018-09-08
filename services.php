<?php include 'header.php'; ?>

<style>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
	<?php include 'style2.css'; ?>
</style>

<div class="container-fluid text-center mt-5 mb-5">
	<hr style="width: 25%; border-top: 3px double black">
	<h3 class="font-weight-bold text-dark">
		<img src="images/services.png" alt="services" style="height: 40px;width: 50px;">
		Our Services
	</h3>
	<hr style="width: 25%; border-top: 3px double black">
</div>

<div class="container-fluid">
	<div class="card-deck mx-5">
		<div class="service_card card border-dark">
			<img class="card-img-top" src="images/Service_Img/img1.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Portrait & Fashion photography</h5>
				<p class="card-text">- Portrait photography</p>
				<p class="card-text">- Portfolio & fashion photography</p>
				<p class="card-text">- Baby shoot</p>
				<p class="card-text">- Studio shoot</p>
				<a href="services_pages/services_portrait.php" class="btn btn-primary ">View details</a>
			</div>
		</div>
		
		<div class="service_card card border-dark">
			<img class="card-img-top" src="images/Service_Img/img2.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Wedding photography</h5>
				<p class="card-text">- Ring ceremoney</p>
				<p class="card-text">- Pre wedding</p>
				<p class="card-text">- Wedding</p>
				<p class="card-text">- Wedding reception</p>
				<a href="services_pages/services_wedding.php" class="btn btn-primary">View details</a>
			</div>
		</div>
		
		<div class="service_card card border-dark">
			<img class="card-img-top" src="images/Service_Img/img3.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Event photography</h5>
				<p class="card-text">- Festival gatherings</p>
				<p class="card-text">- Birthday parties</p>
				<p class="card-text">- Seminars & Conferences</p>
				<p class="card-text">- Annual function & Cultural program</p>
				
				<a href="services_pages/services_event.php" class="btn btn-primary">View details</a>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid my-5" style="padding-left: 36%;padding-right: 36%;">
	<div class="service_card card border-dark">
		<img class="card-img-top" src="images/Service_Img/img4.jpg" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Commercial & architecture photography</h5>
			<p class="card-text">- Product photography</p>
			<p class="card-text">- Architecture photography</p>
			<a href="services_pages/services_architecture.php" class="btn btn-primary">View details</a>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>