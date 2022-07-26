<?php
	$con = mysqli_connect("localhost","root","password","mytestdb");
	if($con){
	echo "connected";
	}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Students", "Contribution", { role: "style" } ],
        <?php
			$sql = "SELECT * FROM `contribution`";
			$fire = mysqli_query($con,$sql);
			while ($result = mysqli_fetch_assoc($fire) ){
				echo"['".$result['student']."',".$result['contribution'].",'gold'],";
			}
		  ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Student and Their Contribution",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  </head>
  <body>
    <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
  </body>
</html>
