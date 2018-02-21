<!doctype html>
<html>
<head>
	<title>Elevage PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// $cnx = new mysqli("localhost","root","","mydb");

?>
<form id="formulaire" method="POST" action="index.php"> 
<label for="requete">Veuillez entrer votre requete : </label><textarea name="requete" rows="10" cols="75"></textarea><br>
<input type="submit" value="Valider"/> 
</form>

<?php 
if (isset($_POST["requete"]))
{
$cnx = new mysqli("localhost","root","","Elevage");

$requete = $cnx->query($_POST['requete']);

$toto=mysqli_fetch_fields($requete);
$nb = count($toto);
// var_dump ($toto);
echo "<table>";
echo "<tr>";
for ($i = 0; $i < $nb; $i ++)
{	echo "<td>".$toto[$i]->name."</td>";
}
echo "</tr>";

while($ligne = $requete->fetch_array()){
	echo "<tr>";
	for ($i = 0; $i < $nb; $i ++){
		echo "<td>".$ligne[$i]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
$cnx->close(); 
}
?> 

</body>
</html>