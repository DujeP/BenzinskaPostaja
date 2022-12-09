<?php
	 include('templates\header.php');
 ?>
<tr>
<td>
<form id ="izdajform" method="post">
<select name="izborGoriva" id="izborGoriva">
    <option value="0">Odaberite tip goriva</option>
    <option value="1">Benzin</option>
	<option value="2">Diesel</option><br><br>        
  </select>

<label for="kolicinaGoriva"><br></br>Unesite kolicinu goriva:</label><br>
<input type="text" id="kolicinaGoriva" name="kolicinaGoriva"><br><br>
<input class="btn" type="submit" name="submit"  class="submit" value="Posalji"/><br><br><br><br>	

<?php
include('PovezivanjeNaBazu.php');
if(isset($_POST['submit'])) {
$kolicinaUSpremniku=0;	
$ErrorArrays = array (); //Skupina errora za provjeru da li ih ima na kraju K.
$datum = date('Y-m-d H:i:s');	
$kolicinaGoriva = $_POST['kolicinaGoriva']??'';
$izborGoriva = $_POST['izborGoriva']??'';

$records2 = mysqli_query($db,"select * from gorivo where idGoriva = '$izborGoriva'"); 
while($rows = mysqli_fetch_array($records2))
{
    $tipGoriva =$rows['tipGoriva'];
	$cijena = $rows['cijena'];
	$kolicinaUSpremniku = $rows['kolicinaUSpremniku'];
	
}

$kolicinaUSpremnikuUpdate= $kolicinaUSpremniku + (int)$kolicinaGoriva;

if(!empty($_POST['izborGoriva'])) {
	} else {
		$ErrorArrays[]='Molim Vas izaberite gorivo';
		}
if ($kolicinaUSpremnikuUpdate>20000)
	{
		$ErrorArrays[] = "Spremnik nema dovoljno kapaciteta(20000)";
	}
	if ($kolicinaGoriva<1000)
	{
		$ErrorArrays[] = "Minimalna kolicina za unos je 1000l";
	}
if (empty($kolicinaGoriva))
	{
		$ErrorArrays[] = "Molim Vas unesite kolicnu goriva";
	}
if (count($ErrorArrays) == 0)
	{	
			$sql1 = "UPDATE gorivo SET kolicinaUSpremniku='$kolicinaUSpremnikuUpdate' WHERE idGoriva='$izborGoriva'";
    
	if(mysqli_query($db, $sql1)){
		echo "Kolicina u spremniku uspjesno promjenjena.<br><br>";
 } else{
	 echo "Greska: naredba nije bila uspjesna $sql1. " . mysqli_error($db);
 }
}
else
{
	foreach ($ErrorArrays AS $Errors)
	{
		echo "<font color='red'><b>".$Errors."</font></b><br>";
	}
}
mysqli_close($db);
}
?>


</form>    
</td>
</tr>


<?php
	include('templates\footer.php');
?>    




