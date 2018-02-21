<?php 

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
?> 