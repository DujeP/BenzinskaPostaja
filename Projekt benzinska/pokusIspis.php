<?php
	include('Templates/header.php');
?>

	<tr id= "pregled">
		<td id= "pregled"> 
			<table id= "pregled" style="width:100%;">
			<h3>Pregled Racuna 10 po 10 page</h3>
			<?php
include('PovezivanjeNaBazu.php');
$broj = $_GET["from"];
$sql = "SELECT * FROM racuni LIMIT $broj, 10"; //10,10, .... 20,10
$result = $db->query($sql)/* or die($db->error)*/;
while ($row=$result->/*fetch_array(MYSQLI_BOTH)*/fetch_assoc()) {
	print '<br>'.$row['id'].' '.$row['datum'].': '.$row['gorivo'].' '.$row['kolicina'].' '.$row['iznos'].' '.$row['zaposlenik'].'<br>';
}
$result->close();

			?>
            <th>
                <a href="pokusIspis.php?from=0">1&ensp;</a>
                <a href="pokusIspis.php?from=10">2&ensp;</a>
                <a href="pokusIspis.php?from=20">3&ensp;</a>
            </th>
			</table>
		</td>
	</tr>
<?php
	include('Templates/footer.php');
?>