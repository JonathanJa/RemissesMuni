<!doctype html>
<html>
	<head>
		<title>Doughnut Chart</title>
		<script src="../Chart.js"></script>
		<style>
			body{
				padding: 0;
				margin: 0;
			}
			#canvas-holder{
				width:30%;
			}
		</style>
	</head>
	<body>
		<div id="canvas-holder">
			<canvas id="chart-area" width="500" height="500"/>
		</div>



	<script>


<?php 

			$conexion= mysqli_connect("localhost","root","","remis");
			$sql = "SELECT * FROM personas INNER JOIN empresas ON personas.id=empresas.id_persona INNER JOIN habilitacion ON habilitacion.id = personas.id";
			$result = mysqli_query($conexion,$sql);
			while($row = mysqli_fetch_array($result)){

			?>
		var doughnutData = [

		
				
			
				{
					value:<?php echo $row['id']?>,
					color:"#F7464A",
					highlight: "#5AD3D1",
					label: "<?php echo $row['hab_fechaInicio']?> "
				},
				{
					value:<?php echo $row['id']?>,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "<?php echo $row['hab_fechaVnto']?> "
				}

			];
<?php

}
?>
			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
			};



	</script>
	</body>
</html>
