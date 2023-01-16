<?php // session_start(); 
?>
<?php include('./admin/db_con.php'); ?>
<html>

<head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="./css/style.css">

	<link href="login.php">
</head>
<form class="row g-3 needs-validation" novalidate method="POST">


	<section class="section-1">
		<div class="container" id="book_flights">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="pray">
						<img src="./photos/w.jpg" alt="" class="" />
					</div>
				</div>

				<div class="col-md-6 col-12">
					<div class="panel">
						<div class="container">
							<div class="title">
								<h2>Book Your Flight</h2>

							</div>

							<div class="row">
								<div class="col">
									<input type="radio" class="form-check-input" id="validationFormCheck1" name="radio-stacked" value="r1" required>
									<label class="form-check-label" for="validationFormCheck1">Round Trip</label>
								</div>

								<div class="col">
									<input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="r2" required>
									<label class="form-check-label" for="validationFormCheck2">One Way</label>

								</div>

								<div class="row">
									<div class="col-md-8">
										<label for="validationCustom04" class="form-label">Airlines</label>
										<select class="form-control" name="airlinename" required>
											<option selected disabled value="">Airline</option>
											<option>Air India</option>
											<option>Indigo</option>
										</select>

									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Flying From</label>
										<select class="form-select" id="validationCustom04" name="att" required>
											<option selected disabled value="">From</option>
											<?php $s =  mysqli_query($con, "select * from airport_list");
											while ($r = mysqli_fetch_array($s)) {
											?>

												<option><?php echo $r['airport']; ?></option>
											<?php } ?>
										</select>


										</select>
										<div class="invalid-feedback">
											Please select a valid state.
										</div>
									</div>
									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Flying To</label>
										<select class="form-select" id="validationCustom04" name="atl" required>
											<option selected disabled value="">To</option>
											<?php $s =  mysqli_query($con, "select * from airport_list");
											while ($r = mysqli_fetch_array($s)) {
											?>

												<option><?php echo $r['location']; ?></option>
											<?php } ?>
										</select>

										<div class="invalid-feedback">
											Please select a valid state.
										</div>
									</div>

								</div>



								<div class="row">
									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Check In</label>
										<input class="form-select" id="validationCustom04" type="text" name="dd" placeholder="Check In" required onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'">
										<div class="invalid-feedback">
											Please select a valid Date
										</div>

									</div>

									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Check Out</label>
										<input class="form-select" id="validationCustom04" type="text" name="ad" placeholder="Check Out" required onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'">

										<div class="invalid-feedback">
											Please select a valid Date
										</div>

									</div>

								</div>
								<div class="row">
									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Travel Class</label>
										<select class="form-select" id="validationCustom04" name="tc" required>
											<option selected disabled value="">Class</option>
											<option>Economy Class</option>
											<option>Business Class</option>
											<option>First Class</option>
										</select>
										<div class="invalid-feedback">
											Please select a valid class
										</div>
									</div>


									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Adults(18+)</label>
										<select class="form-select" id="validationCustom04" name="adults" required>
											<option selected disabled value="">Choose...</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										<div class="invalid-feedback">
											Please select a valid Number
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-5">
										<label for="validationCustom04" class="form-label">Children</label>
										<select class="form-select" id="validationCustom04" name="ch" required>
											<option selected disabled value="">Choose...</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
										<div class="invalid-feedback">
											Please select a valid Number
										</div>
									</div>
								</div>

								<div class="form-group" hidden>
									<label>Date</label>
									<input type="date" id="date1" name="date1" placeholder="Date" required>
								</div>



								<div class="col-12">
									<?php if (isset($_SESSION['username'])) {
									?>

										<button class="btn btn-primary " type="submit" name="bf" data-bs-toggle="modal" data-bs-target="#flightaddModal">Book Flight</button>
									<?php
									} else {

									?>
										<a class="btn btn-primary" name="bf" data-bs-toggle="modal" data-bs-target="#lrmodal">Book Flight</a>
									<?php
									}
									?>
								</div>
							</div>
</form>



<div class="modal fade" id="lrmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="POST" action="">
				<div class="modal-body">



					<h6>Login Required</h6>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>

				</div>
			</form>



		</div>
	</div>
</div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function(form) {
				form.addEventListener('submit', function(event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	})()

	//for radio disabled


	let textboxes = document.querySelectorAll('input[name=d2]');

	document.querySelectorAll('input[name=radio-stacked]')
		.forEach(function(radio) {
			radio.addEventListener('change', function(e) {
				let value = e.target.value;

				if (value === 'r1') {
					textboxes
						.forEach(function(textbox) {
							textbox.disabled = false;
						});
				} else if (value === 'r2') {
					textboxes
						.forEach(function(textbox) {
							textbox.disabled = true;
						});
				}
			});
		});
</script>


</div>
</div>
</div>
</div>
</section>


</html>



<?php



if (isset($_POST['bf'])) {


	$airline_nm = $_POST['airlinename'];
	$airport_tt = $_POST['att'];
	$airport_tl = $_POST['atl'];
	$departure_d = $_POST['dd'];
	$arrival_d = $_POST['ad'];
	$tc = $_POST['tc'];
	$ch = $_POST['ch'];
	$adults = $_POST['adults'];


	$seats = $_POST['ch'] + $_POST['adults'];

	$pseats = rand(1, 100);

	$email = $_SESSION['username'];

	$date1 = $_POST['date1'];
	$s = mysqli_query($con, "select * from s_user where email='$email'");
	while ($r = mysqli_fetch_array($s)) {
		$mno = $r['mno'];

		$name = $r['name'];


		$address = $r['address'];
	}



	$p = mysqli_query($con, "select plane_no from flight_list");
	while ($t = mysqli_fetch_array($p)) {
		$plane_no = $t['plane_no'];
		$price = $t['price'];
	}


	$query = mysqli_query($con, "insert into booked_flight(flight_name,airport_from,airport_to,depture_d,arrival_d,seats,date,children,adults,travel_class,email,contact,p_seats,name,address,plane_no,price)
            values('$airline_nm','$airport_tt','$airport_tl','$departure_d','$arrival_d','$seats','$date1','$ch','$adults','$tc','$email','$mno','$pseats','$name','$address','$plane_no','$price	')");


	if ($query) {
		echo "<script>alert('Flight Booked');</script>";
	} else {
		echo "<script>alert('Flight Not Booked');</script>";
	}
}
?>