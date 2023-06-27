<style>
	.custom-menu {
		z-index: 1000;
		position: absolute;
		background-color: #ffffff;
		border: 1px solid #0000001c;
		border-radius: 5px;
		padding: 8px;
		min-width: 13vw;
	}

	a.custom-menu-list {
		width: 100%;
		display: flex;
		color: #4c4b4b;
		font-weight: 600;
		font-size: 1em;
		padding: 1px 11px;
	}

	span.card-icon {
		position: absolute;
		font-size: 3em;
		bottom: .2em;
		color: #ffffff80;
	}

	.file-item {
		cursor: pointer;
	}

	a.custom-menu-list:hover,
	.file-item:hover,
	.file-item.active {
		background: #80808024;
	}

	table th,
	td {
		border-left: 1px solid gray;
	}

	a.custom-menu-list span.icon {
		width: 1em;
		margin-right: 5px
	}

	.candidate {
		margin: auto;
		width: 23vw;
		padding: 0 10px;
		border-radius: 20px;
		margin-bottom: 1em;
		display: flex;
		border: 3px solid #00000008;
		background: #8080801a;

	}

	.candidate_name {
		margin: 8px;
		margin-left: 3.4em;
		margin-right: 3em;
		width: 100%;
	}

	.img-field {
		display: flex;
		height: 8vh;
		width: 4.3vw;
		padding: .3em;
		background: #80808047;
		border-radius: 50%;
		position: absolute;
		left: -.7em;
		top: -.7em;
	}

	.candidate img {
		height: 100%;
		width: 100%;
		margin: auto;
		border-radius: 50%;
	}

	.vote-field {
		position: absolute;
		right: 0;
		bottom: -.4em;
	}

	.progress-bar {
		width: 100px;
		height: 100px;
		border-radius: 50%;
		background:
			radial-gradient(closest-side, white 79%, transparent 80% 100%),
			conic-gradient(hotpink 75%, pink 0);
	}
</style>


<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			<div class="card col-md-4 offset-2 bg-info float-left">
				<div class="card-body text-white">
					<h4>
						<b>Booking</b>
					</h4>
					<hr>
					<span class="card-icon"><i class="fa fa-users"></i></span>
					<h3 class="text-right"><b></b></h3>
				</div>
			</div>
			<div class="card col-md-4 offset-2 bg-primary ml-4 float-left">
				<div class="card-body text-white">
					<h4><b>Rooms</b></h4>
					<hr>
					<span class="card-icon"><i class="fa fa-user-tie"></i></span>
					<h3 class="text-right"><b></b></h3>
				</div>
			</div>
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<?php //var_dump($_SESSION)
					$con = mysqli_connect("localhost", "root", "", "hotel_db");
					if ($con) {
						echo "connect";
					}
					?>
					<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {
							'packages': ['corechart']
						});
						google.charts.setOnLoadCallback(drawChart);

						function drawChart() {

							var data = google.visualization.arrayToDataTable([
								['room', 'category_id'],
								<?php
								$sql = "SELECT * FROM checked, room";
								$fire = mysqli_query($con, $sql);
								while ($result = mysqli_fetch_assoc($fire)) {
									echo "['" . $result[''] . "'," . $result['room_id'] . "],";
								}
								?>

							]);

							var options = {
								title: 'My Daily Activities'
							};

							var chart = new google.visualization.PieChart(document.getElementById('piechart'));

							chart.draw(data, options);
						}
					</script>
					<div id="piechart" style="width: 900px; height: 500px;"></div>


				</div>
			</div>

		</div>
	</div>
</div>

</div>

<script>
</script>