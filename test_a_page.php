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
	<script src="java.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<style>
	.header {
		font-weight: bold;
		font-size: 30px;
		text-align: center;
		line-height: 1.5em;
		padding-top: 10px;
		padding-bottom: 0px;
		font-family: "Playfair Display", serif;
		text-transform: uppercase;
		letter-spacing: 2px;
		color: rgb(143, 128, 128);
	}
	
	#progressbar {
		/* Remove default bullets */
		color: black;
		font-size: xx-large;
		text-align: center;
		list-style: none;
	}
	</style>
</head>
<!-- page content -->

<body onload="startTimer();" style="background-color: lightgrey">
	<form action="test_a.php" name="form" method="POST">
		<!-- progressbar -->
		<ul id="progressbar">
			<li class="header">Photo 1</li>
			<li class="header">Photo 2</li>
			<li class="header">Photo 3</li>
			<li class="header">Photo 4</li>
			<li class="header">Photo 5</li>
			<li class="header">Photo 6</li>
			<li class="header">Photo 7</li>
			<li class="header">Photo 8</li>
			<li class="header">Photo 9</li>
			<li class="header">Photo 10</li>
		</ul>
		<!-- error messages --><span class="fs-error"></span>
		<div class="container">
			<div class="row">
				<div class="col-7" style="font-size:large">
					<div class="slider"> <img src="imagess/a.jpg" alt="Barrier / Obstacle in Nicosia" class="slider-img" style="width:85%"> </div>
				</div>
				<div class="col" style="font-size:large">
					<!-- fieldsets -->
					<fieldset> <b> Please select the appropriate obstacle type: </b>
						<input type="hidden" name="test_a_1_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_1" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_1" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_1" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_1" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_1" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_1" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_1" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_1" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_1" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_1" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_1" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_1" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_1" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_1" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_1" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_1" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_1" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_1" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_1" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_1" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_1" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_1" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_1" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_1" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_1" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_1" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_1" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_1" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_1" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_1" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_1" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_2_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_2" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_2" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_2" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_2" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_2" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_2" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_2" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_2" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_2" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_2" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_2" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_2" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_2" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_2" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_2" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_2" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_2" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_2" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_2" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_2" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_2" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_2" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_2" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_2" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_2" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_2" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_2" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_2" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_2" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_2" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_2" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_3_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_3" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_3" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_3" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_3" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_3" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_3" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_3" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_3" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_3" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_3" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_3" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_3" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_3" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_3" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_3" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_3" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_3" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_3" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_3" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_3" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_3" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_3" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_3" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_3" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_3" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_3" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_3" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_3" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_3" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_3" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_3" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_4_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_4" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_4" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_4" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_4" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_4" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_4" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_4" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_4" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_4" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_4" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_4" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_4" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_4" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_4" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_4" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_4" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_4" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_4" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_4" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_4" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_4" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_4" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_4" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_4" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_4" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_4" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_4" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_4" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_4" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_4" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_4" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_5_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_5" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_5" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_5" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_5" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_5" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_5" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_5" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_5" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_5" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_5" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_5" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_5" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_5" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_5" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_5" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_5" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_5" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_5" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_5" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_5" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_5" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_5" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_5" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_5" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_5" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_5" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_5" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_5" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_5" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_5" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_5" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_6_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_6" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_6" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_6" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_6" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_6" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_6" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_6" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_6" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_6" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_6" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_6" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_6" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_6" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_6" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_6" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_6" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_6" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_6" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_6" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_6" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_6" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_6" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_6" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_6" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_6" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_6" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_6" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_6" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_6" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_6" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_6" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_7_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_7" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_7" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_7" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_7" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_7" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_7" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_7" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_7" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_7" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_7" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_7" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_7" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_7" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_7" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_7" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_7" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_7" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_7" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_7" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_7" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_7" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_7" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_7" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_7" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_7" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_7" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_7" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_7" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_7" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_7" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_7" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_8_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_8" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_8" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_8" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_8" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_8" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_8" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_8" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_8" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_8" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_8" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_8" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_8" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_8" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_8" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_8" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_8" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_8" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_8" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_8" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_8" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_8" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_8" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_8" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_8" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_8" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_8" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_8" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_8" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_8" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_8" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_8" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_9_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_9" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_9" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_9" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_9" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_9" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_9" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_9" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_9" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_9" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_9" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_9" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_9" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_9" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_9" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_9" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_9" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_9" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_9" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_9" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_9" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_9" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_9" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_9" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_9" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_9" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_9" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_9" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_9" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_9" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_9" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_9" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="NEXT" /> </fieldset>
					<fieldset>
						<br><b> Please select the appropriate obstacle type:   </b>
						<input type="hidden" name="test_a_10_reaction_time" value="1.1">
						<br>
						<input type="radio" name="test_a_10" value="Crack" /> Crack
						<br>
						<input type="radio" name="test_a_10" value="Hole/Pot-hole" /> Hole/Pot-hole
						<br>
						<input type="radio" name="test_a_10" value="Paver (broken)" /> Paver (broken)
						<br>
						<input type="radio" name="test_a_10" value="Narrow pavement" /> Narrow pavement
						<br>
						<input type="radio" name="test_a_10" value="No pavement" /> No pavement
						<br>
						<input type="radio" name="test_a_10" value="Bench" /> Bench
						<br>
						<input type="radio" name="test_a_10" value="Light" /> Light
						<br>
						<input type="radio" name="test_a_10" value="Bin" /> Bin
						<br>
						<input type="radio" name="test_a_10" value="Parking meter" /> Parking meter
						<br>
						<input type="radio" name="test_a_10" value="Plant pot" /> Plant pot
						<br>
						<input type="radio" name="test_a_10" value="Tree" /> Tree
						<br>
						<input type="radio" name="test_a_10" value="Shrub" /> Shrub
						<br>
						<input type="radio" name="test_a_10" value="Flower" /> Flower
						<br>
						<input type="radio" name="test_a_10" value="Parking prevention barrier" /> Parking prevention barrier
						<br>
						<input type="radio" name="test_a_10" value="Mail box" /> Mail box
						<br>
						<input type="radio" name="test_a_10" value="Public art - Statue" /> Public art - Statue
						<br>
						<input type="radio" name="test_a_10" value="Bus stop" /> Bus stop
						<br>
						<input type="radio" name="test_a_10" value="Kiosk" /> Kiosk
						<br>
						<input type="radio" name="test_a_10" value="Play area" /> Play area
						<br>
						<input type="radio" name="test_a_10" value="4 wheel" /> 4 wheel
						<br>
						<input type="radio" name="test_a_10" value="2 wheel" /> 2 wheel
						<br>
						<input type="radio" name="test_a_10" value="Scaffolding" /> Scaffolding
						<br>
						<input type="radio" name="test_a_10" value="Boulder" /> Boulder
						<br>
						<input type="radio" name="test_a_10" value="Safety sign" /> Safety sign
						<br>
						<input type="radio" name="test_a_10" value="Fence" /> Fence
						<br>
						<input type="radio" name="test_a_10" value="Traffic cone" /> Traffic cone
						<br>
						<input type="radio" name="test_a_10" value="Litter" /> Litter
						<br>
						<input type="radio" name="test_a_10" value="Chair" /> Chair
						<br>
						<input type="radio" name="test_a_10" value="Table" /> Table
						<br>
						<input type="radio" name="test_a_10" value="Advertisement sign" /> Advertisement sign
						<br>
						<input type="radio" name="test_a_10" value="Crowded pavement" /> Crowded pavement
						<br>
						<input type="button" name="next" class="next action-button" value="Submit and redirect to the questionnaire" />
						<button type="submit" id="mysubmitbtn" name="test_a_radio" hidden></button>
					</fieldset>
				</div>
			</div>
		</div>
	</form>
	<script>
	var slider_img = document.querySelector('.slider-img');
	var images = ['a.jpg', 'b.jpg', 'c.jpg', 'd.jpg', 'e.jpg', 'f.jpg', 'g.jpg', 'h.jpg', 'i.jpg', 'k.jpg'];
	var i = 0;
	var startTimerOnlyFirst, startTime, endTime;
	window.onload = function StartTimer() {
		// it runs only the first time when the page is loaded! not after each fieldset/tab
		startTime = new Date().getTime();
	}

	function next() {
		if(i <= images.length) {
			i++;
			endTime = new Date().getTime();
			var seconds = (endTime - startTime) / 1000; //in ms 
			// get seconds 
			var roundedseconds = Math.round(seconds);
			console.log(seconds + " seconds");
			startTime = new Date().getTime();
			if(i === 1) {
				document.querySelector('input[name="test_a_1_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 2) {
				document.querySelector('input[name="test_a_2_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 3) {
				document.querySelector('input[name="test_a_3_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 4) {
				document.querySelector('input[name="test_a_4_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 5) {
				document.querySelector('input[name="test_a_5_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 6) {
				document.querySelector('input[name="test_a_6_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 7) {
				document.querySelector('input[name="test_a_7_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 8) {
				document.querySelector('input[name="test_a_8_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 9) {
				document.querySelector('input[name="test_a_9_reaction_time"]').value = seconds;
				return setImg();
			} else if(i === 10) {
				document.querySelector('input[name="test_a_10_reaction_time"]').value = seconds;
				document.getElementById('mysubmitbtn').click();
			} else {
				console.log("error")
			}
		}
	}

	function setImg() {
		return slider_img.setAttribute('src', "imagess/" + images[i]);
	}
	$(document).ready(function() {
		$(".next").click(function(event) {
			var current_index = $(this).parent().index("fieldset");
			if(validateStep(current_index)) {
				next();
				makeStepActive(current_index + 1);
			} else {
				event.preventDefault();
			}
		});
		makeStepActive(0);
	});

	function makeStepActive(index) {
		var step = $("#progressbar li:eq(" + index + ")");
		var feildset = $("fieldset:eq(" + index + ")");
		if(step.length) {
			$("#progressbar li").hide();
			$("fieldset").hide();
			step.show();
			feildset.slideDown(500);
		}
	}

	function validateStep(step) {
		switch(step) {
			case 0:
				if(($("input[name='test_a_1']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
				break;
			case 1:
				if(($("input[name='test_a_2']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 2:
				if(($("input[name='test_a_3']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 3:
				if(($("input[name='test_a_4']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 4:
				if(($("input[name='test_a_5']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 5:
				if(($("input[name='test_a_6']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 6:
				if(($("input[name='test_a_7']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 7:
				if(($("input[name='test_a_8']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 8:
				if(($("input[name='test_a_9']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
			case 9:
				if(($("input[name='test_a_10']:checked").length === 0)) {
					alert('Please select any!');
					return false;
				}
				return true;
				break;
		}
	}
	</script>
</body>

</html>