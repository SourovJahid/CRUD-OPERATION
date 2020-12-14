	<!DOCTYPE html>
	<html>
	<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> -->
	<!-- <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->

	</head>
	<body>

	<div class="container">
	<div class="col-lg-12"> <br><br>

		<h1 class="text-warning text-center" > Display Table Data </h1>
		<br>
	<table  id="tabledata" class=" table table-striped table-hover table-bordered">

	<tr class="bg-dark text-white text-center">

	 <th> Id </th>
		<th> Username </th>
		<th> Password </th>
		<th> Delete </th>
		<th> Update </th>

	</tr >

	<?php

	include 'conn.php'; 
	$q = "select * from crudinfo";

	$query = mysqli_query($con,$q);
	while($res = mysqli_fetch_array($query)){

		?>
	<tr class="text-center">
	<td> <?php echo $res['id'];  ?> </td>
	<td> <?php echo $res['username'];  ?> </td>
	<td> <?php echo $res['password'];  ?> </td>
	<td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
	<td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

	</tr>

	<?php 
	}
	?>

	</table>  

	</div>
	</div>
	<!-- <canvas id="myChart" width="400px" height="400px"> -->
		<div id="chart_div"></div>
	</canvas>

	<script type="text/javascript">

	$(document).ready(function(){

	// var ctx = document.getElementById('myChart').getContext('2d');


	// var myChart = new Chart(ctx, {
	// type: 'bar',
	// data: {
	// labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
	// datasets: [{
	//     label: '# of Votes',
	//     data: [12, 19, 3, 5, 2, 3],
	//     backgroundColor: [
	//         'rgba(255, 99, 132, 0.2)',
	//         'rgba(54, 162, 235, 0.2)',
	//         'rgba(255, 206, 86, 0.2)',
	//         'rgba(75, 192, 192, 0.2)',
	//         'rgba(153, 102, 255, 0.2)',
	//         'rgba(255, 159, 64, 0.2)'
	//     ],
	//     borderColor: [
	//         'rgba(255, 99, 132, 1)',
	//         'rgba(54, 162, 235, 1)',
	//         'rgba(255, 206, 86, 1)',
	//         'rgba(75, 192, 192, 1)',
	//         'rgba(153, 102, 255, 1)',
	//         'rgba(255, 159, 64, 1)'
	//     ],
	//     borderWidth: 1
	// }]
	// },
	// options: {
	// scales: {
	//     yAxes: [{
	//         ticks: {
	//             beginAtZero: true
	//         }
	//     }]
	// }
	// }
	// });
	google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Copper", 8.94, "#b87333"],
        ["Silver", 10.49, "#b87333"],
        ["Gold", 19.30, "#b87333"],
        ["Platinum", 21.45, "color: #b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "ashdfadfastdfsaytdfasyt",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
      chart.draw(view, options);
  }

	}) 

	</script>

	</body>
	</html>