<?php
	 include('templates\header.php');
 ?>
<tr>
<td>
<?php
include('PovezivanjeNaBazu.php');
?>

<form id ="izdajform" method="post">
<select name="izborGoriva" id="izborGoriva">
    <option value="0">Odaberite tip goriva</option>
    <option value="1">Benzin</option>
	<option value="2">Diesel</option><br><br>        
  </select>

<label for="kolicinaGoriva"><br></br>Unesite kolicinu goriva:</label><br>
<input type="text" id="kolicinaGoriva" name="kolicinaGoriva"><br><br>
<label for="zaposlenik">Unesite zaposlenika:</label><br>
<input type="text" id="zaposlenik" name="zaposlenik"><br><br>
<input class="btn" type="submit" name="submit"  class="submit" value="Posalji"/><br><br><br><br>	

<?php
if(isset($_POST['submit'])) {
$kolicinaUSpremniku=$prodanaKolicina=0;	
$ErrorArrays = array (); //Skupina errora za provjeru da li ih ima na kraju K.
$datum = date('Y-m-d H:i:s');	
$kolicinaGoriva = $_POST['kolicinaGoriva']??'';
$zaposlenik = $_POST['zaposlenik']??'';
$izborGoriva = $_POST['izborGoriva']??'';
$records2 = mysqli_query($db,"select * from gorivo where idGoriva = '$izborGoriva'"); 
while($rows = mysqli_fetch_array($records2))
{
    $tipGoriva =$rows['tipGoriva'];
	$cijena = $rows['cijena'];
	$kolicinaUSpremniku = $rows['kolicinaUSpremniku'];
	$prodanaKolicina = $rows['prodanaKolicina'];
}
	$kolicinaUSpremnikuUpdate= $kolicinaUSpremniku - (int)$kolicinaGoriva;
	$prodanaKolicinaUpdate= $prodanaKolicina + (int)$kolicinaGoriva;
?>

<?php
if(!empty($_POST['izborGoriva'])) {
	} else {
		$ErrorArrays[]='Molim Vas izaberite gorivo';
		}
if ($kolicinaGoriva<5)
	{
		$ErrorArrays[] = "Molim Vas unesite vise od 5L";
	}
if ($kolicinaGoriva>$kolicinaUSpremniku)
	{
		$ErrorArrays[] = "Molim Vas unesite manje od kolicine koje imamo u spremniku: " . $kolicinaUSpremniku;
	}
if (empty($kolicinaGoriva))
	{
		$ErrorArrays[] = "Molim Vas unesite kolicnu goriva";
	}
if (empty($zaposlenik))
	{
		$ErrorArrays[] = "Molim Vas unesite vase ime";
	}
if (count($ErrorArrays) == 0)
	{	
			$sql = "INSERT INTO racuni (datum, gorivo, kolicina, iznos, zaposlenik)
			VALUES ('$datum', '$tipGoriva', '$kolicinaGoriva', '$cijena', '$zaposlenik')";
			$sql1 = "UPDATE gorivo SET kolicinaUSpremniku='$kolicinaUSpremnikuUpdate' WHERE idGoriva='$izborGoriva'";
			$sql2 = "UPDATE gorivo SET prodanaKolicina='$prodanaKolicinaUpdate' WHERE idGoriva='$izborGoriva'";
	
		
if(mysqli_query($db, $sql)){
   		echo "Racun je uspjesno kreiran.<br><br>";
	} else{
		echo "Greska: naredba nije bila uspjesna $sql. " . mysqli_error($db);
	}

	if(mysqli_query($db, $sql1)){
		echo "Kolicina u spremniku uspjesno promjenjena.<br><br>";
 } else{
	 echo "Greska: naredba nije bila uspjesna $sql1. " . mysqli_error($db);
 }

 if(mysqli_query($db, $sql2)){
	echo "Prodana kolicina uspjesno promjenjena.<br><br>";
} else{
 echo "Greska: naredba nije bila uspjesna $sql2. " . mysqli_error($db);
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




