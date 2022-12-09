<?php
	include('Templates/header.php');
?>

	<tr id= "pregled">
		<td id= "pregled"> 
			<table id= "pregled" style="width:100%;">
			<h3>Pregled Racuna</h3>
			<?php
include('PovezivanjeNaBazu.php');
$sql = "SELECT * FROM racuni ORDER BY datum DESC";
$result = $db->query($sql)/* or die($db->error)*/;
while ($row=$result->/*fetch_array(MYSQLI_BOTH)*/fetch_assoc()) {
	print '<br>'.$row['id'].' '.$row['datum'].': '.$row['gorivo'].' '.$row['kolicina'].' '.$row['iznos'].' '.$row['zaposlenik'].'<br>';
}
$result->close();

			?>
			</table>
		</td>
	</tr>
<?php
	include('Templates/footer.php');
?>