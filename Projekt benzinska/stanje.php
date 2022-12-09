<?php
	include('Templates/header.php');
?>
<?php
include('PovezivanjeNaBazu.php');
?>
	<tr>
		<td>
			<div id="stanje">
					<table id="stanjetab">
						<tr id="stanjetrtd">
							<th id="stanjeth"></th>
							<th id="stanjeth">Trenutno Stanje Spremnika(l)</th>
							<th id="stanjeth">Maksimalno Stanje Spremnika(l)</th>
							<th id="stanjeth">Prodana kolicina</th>
						</tr>
						<tr id="stanjetrtd">
							<th id="stanjetrtd">Benzin</th>
							<td id="stanjetrtd">
								<?php $sql="SELECT kolicinaUSpremniku FROM gorivo WHERE idGoriva=1";
								$result = $db->query($sql);

								if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo $row["kolicinaUSpremniku"];
								}} ?>
							</td>
							<td id="stanjetrtd">20000</td>
							<td id="stanjetrtd">
							<?php $sql="SELECT prodanaKolicina FROM gorivo WHERE idGoriva=1";
								$result = $db->query($sql);

								if (/*$result !== false && */$result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo $row["prodanaKolicina"];
								}} ?>
							</td>
						</tr>
						<tr id="stanjetrtd">
							<th id="stanjetrtd">Dizel</th>
							<td id="stanjetrtd"><?php $sql="SELECT kolicinaUSpremniku FROM gorivo WHERE idGoriva=2";
								$result = $db->query($sql);

								if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo $row["kolicinaUSpremniku"];
								}} ?></td>
							<td id="stanjetrtd">20000</td>
							<td id="stanjetrtd">
							<?php $sql="SELECT prodanaKolicina FROM gorivo WHERE idGoriva=2";
								$result = $db->query($sql);

								if (/*$result !== false && */$result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo $row["prodanaKolicina"];
								}} ?>
							</td>
						</tr>
					</table>
			</div>
		</td>
	</tr>
<?php
	include('Templates/footer.php');
?>