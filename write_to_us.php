<?php include 'header.php'; ?>

<style>
	<?php include 'style2.css'; ?>
	<?php include 'bootstrap/css/bootstrap.min.css'; ?>
</style>

<div class="container-fluid text-center mb-5 mt-5">
	<h1>Write us</h1>
	<hr style="width: 30%; border-top: 1px solid black;">
</div>

<div class="container-fluid mb-5" style="padding-left: 30%;padding-right: 30%;">
	<form id="form2" class="p-5" style="border: 1px solid black; box-shadow: 0px 0px 300px 1px black;background-color: #000000">
		<div class="form-group">
			<label for="name" class="text-light">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="email" class="text-light">Email</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="subject" class="text-light">Subject</label>
			<input type="text" class="form-control" id="subject" placeholder="Enter name">
		</div>
		<div class="form-group">
			<label for="textarea1" class="text-light">Message</label>
			<textarea class="form-control" id="textarea1" rows="4"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php include 'footer.php'; ?>