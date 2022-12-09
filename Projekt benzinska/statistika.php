<?php
	include('Templates/header.php');
?>
<?php
include('PovezivanjeNaBazu.php');

$prodanaKolicinaBenzin=$prodanaKolicinaDizel=0;
$records1 = mysqli_query($db,"select * from gorivo where idGoriva = 1"); 
while($rows = mysqli_fetch_array($records1))
{
    $prodanaKolicinaBenzin = $rows['prodanaKolicina'];
}

$records2 = mysqli_query($db,"select * from gorivo where idGoriva = 2"); 
while($rows = mysqli_fetch_array($records2))
{
    $prodanaKolicinaDizel = $rows['prodanaKolicina'];
}
?>
	<tr>
		<td id="statistika">
			<h3>Statistika </h3>
			<table>
				<tr>
					<td id="graf"> 
					<div id="test"></div>
						<script>
							var data = [{
								x: ['Benzin', 'Dizel'],
								y: [<?php echo $prodanaKolicinaBenzin; ?>, <?php echo $prodanaKolicinaDizel; ?>],
							type: 'bar'
							}];
							var layout = {font: {size: 18}};
							var config = {responsive: true};
							TESTER = document.getElementById('test');
							Plotly.newPlot(TESTER, data, layout, config);
    					</script>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<?php
	include('Templates/footer.php');
?>