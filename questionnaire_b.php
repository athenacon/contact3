<?php session_start(); ?>
	<!-- declaration that we use HTML 5  -->
	<!DOCTYPE html>
	<!-- declaration that we ise English language in the Web page  -->
	<html lang="en">

	<head>
		<!-- title of the browser toolbar -->
		<title>Pedestrian app user evaluation</title>
		<meta charset="utf-8">
		<!-- ensure proper rendering and touch zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="mystyle.css">
		<!-- external CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
		<style>

		</style>
	</head>
	<!-- page content -->

	<body style="background-color: lightgrey">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<?php 
                        if(isset($_SESSION['status']))
                        {
                            ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Thank you!</strong>
							<?php echo $_SESSION['status']; ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php
                        unset($_SESSION['status']);
                        
                        }
                        ?>
							<div class="card mt-5">
								<div class="card-header" style="text-align:center;">
									<h4> Questionnaire - User evaluation </h4> </div>
								<form action="code_b.php" method="POST">
									<div class="card-body">
										<div class="form-group mb-3">
											<label> Which of the following most accurately describes you? </label>
											<br>
											<input type="radio" name="gender" value="Male" /> Male
											<br>
											<input type="radio" name="gender" value="Female" /> Female
											<br>
											<input type="radio" name="gender" value="Non-binary" /> Non-binary
											<br>
											<input type="radio" name="gender" value="Prefer not to say" /> I prefer not to say
											<br> </div>
										<div class="form-group mb-3">
											<label> What is your age range? </label>
											<br>
											<input type="radio" name="age_range" value="Under 18" /> Under 18 years old
											<br>
											<input type="radio" name="age_range" value="25-34" /> 25 - 34 years old
											<br>
											<input type="radio" name="age_range" value="35-44" /> 35 - 44 years old
											<br>
											<input type="radio" name="age_range" value="45-54" /> 45 - 54 years old
											<br>
											<input type="radio" name="age_range" value="55-64" /> 55 - 64 years old
											<br>
											<input type="radio" name="age_range" value="Over 65" /> Over 65 years old
											<br> </div>
										<div class="form-group mb-3">
											<label> How familiar are you with Technology? </label>
											<br>
											<input type="radio" name="familiarity_tech" value="Not familiar at all" /> Not familiar at all
											<br>
											<input type="radio" name="familiarity_tech" value="Slightly familiar" /> Slightly familiar
											<br>
											<input type="radio" name="familiarity_tech" value="Somewhat familiar" /> Somewhat familiar
											<br>
											<input type="radio" name="familiarity_tech" value="Moderately familiar" /> Moderately familiar
											<br>
											<input type="radio" name="familiarity_tech" value="Extremely familiar" /> Extremely familiar
											<br> </div>
										<div class="form-group mb-3">
											<p>I think that I would like to use this system frequently. </p>
											<input type="range" name="myRange1" min="1" max="5" value="3" class="slider1" id="myRange1">
											<p>Value: <span id="demo1"></span></p>
										</div>
										<div class="form-group mb-3">
											<p>I found the system unnecessarily complex. </p>
											<input type="range" name="myRange2" min="1" max="5" value="3" class="slider2" id="myRange2">
											<p>Value: <span id="demo2"></span></p>
										</div>
										<div class="form-group mb-3">
											<p> I thought the system was easy to use.</p>
											<input type="range" name="myRange3" min="1" max="5" value="3" class="slider3" id="myRange3">
											<p>Value: <span id="demo3"></span></p>
										</div>
										<div class="form-group mb-3">
											<p> I think that I would need the support of a technical person to be able to use this system.</p>
											<input type="range" name="myRange4" min="1" max="5" value="3" class="slider4" id="myRange4">
											<p>Value: <span id="demo4"></span></p>
										</div>
										<div class="form-group mb-3">
											<p> I found the various functions in this system were well integrated.</p>
											<input type="range" name="myRange5" min="1" max="5" value="3" class="slider5" id="myRange5">
											<p>Value: <span id="demo5"></span></p>
										</div>
										<div class="form-group mb-3">
											<p> I thought there was too much inconsistency in this system.</p>
											<input type="range" name="myRange6" min="1" max="5" value="3" class="slider6" id="myRange6">
											<p>Value: <span id="demo6"></span></p>
										</div>
										<div class="form-group mb-3">
											<p>I would imagine that most people would learn to use this system very quickly.</p>
											<input type="range" name="myRange7" min="1" max="5" value="3" class="slider7" id="myRange7">
											<p>Value: <span id="demo7"></span></p>
										</div>
										<div class="form-group mb-3">
											<p>I found the system very cumbersome to use.</p>
											<input type="range" name="myRange8" min="1" max="5" value="3" class="slider8" id="myRange8">
											<p>Value: <span id="demo8"></span></p>
										</div>
										<div class="form-group mb-3">
											<p>I felt very confident using the system.</p>
											<input type="range" name="myRange9" min="1" max="5" value="3" class="slider9" id="myRange9">
											<p>Value: <span id="demo9"></span></p>
										</div>
										<div class="form-group mb-3">
											<p>I needed to learn a lot of things before I could get going with this system.</p>
											<input type="range" name="myRange10" min="1" max="5" value="3" class="slider10" id="myRange10">
											<p>Value: <span id="demo10"></span></p>
										</div>
										<div class="form-group mb-3">
											<label> Please specify if there is anything else you would like to add (comments, suggestions, issues). </label>
											<input type="text" name="text_box" class="form-control" /> </div>
										<div class="form-group mb-3">
											<button type="submit" name="save_radio2" class="btn btn-primary">Submit</button>
											<br> </div>
									</div>
								</form>
							</div>
				</div>
			</div>
		</div>
		<div class="mt-5 p-4 bg-dark text-center">
			<p style="color:white">You have reached the end! </div>
		<script>
		var slider1 = document.getElementById("myRange1");
		var output1 = document.getElementById("demo1");
		output1.innerHTML = slider1.value;
		slider1.oninput = function() {
			output1.innerHTML = this.value;
		}
		var slider2 = document.getElementById("myRange2");
		var output2 = document.getElementById("demo2");
		output2.innerHTML = slider2.value;
		slider2.oninput = function() {
			output2.innerHTML = this.value;
		}
		var slider3 = document.getElementById("myRange3");
		var output3 = document.getElementById("demo3");
		output3.innerHTML = slider3.value;
		slider3.oninput = function() {
			output3.innerHTML = this.value;
		}
		var slider4 = document.getElementById("myRange4");
		var output4 = document.getElementById("demo4");
		output4.innerHTML = slider4.value;
		slider4.oninput = function() {
			output4.innerHTML = this.value;
		}
		var slider5 = document.getElementById("myRange5");
		var output5 = document.getElementById("demo5");
		output5.innerHTML = slider5.value;
		slider5.oninput = function() {
			output5.innerHTML = this.value;
		}
		var slider6 = document.getElementById("myRange6");
		var output6 = document.getElementById("demo6");
		output6.innerHTML = slider1.value;
		slider6.oninput = function() {
			output6.innerHTML = this.value;
		}
		var slider7 = document.getElementById("myRange7");
		var output7 = document.getElementById("demo7");
		output7.innerHTML = slider7.value;
		slider7.oninput = function() {
			output7.innerHTML = this.value;
		}
		var slider8 = document.getElementById("myRange8");
		var output8 = document.getElementById("demo8");
		output8.innerHTML = slider8.value;
		slider8.oninput = function() {
			output8.innerHTML = this.value;
		}
		var slider9 = document.getElementById("myRange9");
		var output9 = document.getElementById("demo9");
		output9.innerHTML = slider9.value;
		slider9.oninput = function() {
			output9.innerHTML = this.value;
		}
		var slider10 = document.getElementById("myRange10");
		var output10 = document.getElementById("demo10");
		output10.innerHTML = slider10.value;
		slider10.oninput = function() {
			output10.innerHTML = this.value;
		}
		</script>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>