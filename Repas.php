<?php
// Connection a la base de donner
$repas=$_REQUEST['Repas'];
$pays=$_REQUEST['Listepays'];
$type=$_REQUEST['Listetype'];
$vege=$_REQUEST['Vege'];
$prix=$_REQUEST['Prix'];
$base = mysql_connect('localhost', 'root', 'admin123');
mysql_select_db('repas', $base) ;
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <title>Inscription d'un repas</title>
</head>
<body>
<?php
    if (isset($_REQUEST['OK'])) {
        if(isset($repas) && is_numeric($prix) && isset($vege)){
            $inserer = "INSERT INTO `Repas`(`idPays`, `idType`, `repas`, `vege`, `prix`) VALUES ($pays,$type,'$repas',$vege,$prix)";
            $result = mysql_query($inserer) ;
        }
}
?>
<form method="post" action="Repas.php">
<?php
//Requete pour choisir un Pays
$payselect = "SELECT * FROM Pays WHERE 1" ;
$reqpays = mysql_query($payselect) ;
$resultpays = mysql_fetch_array($reqpays);
echo '<select name = "Listepays">' ;
while($resultpays = mysql_fetch_array($reqpays))
{
    echo '<option value="'.$resultpays['* idpays'].'">'.$resultpays['pays'].'</option>';
}
echo '</select>' ;


$typeselect = "SELECT * FROM Type" ;
$reqtype = mysql_query($typeselect);
echo "<br>";
echo '<select name = "Listetype">' ;
while($resulttype = mysql_fetch_array($reqtype))
{
    echo '<option value="'.$resulttype['* idType'].'">'.$resulttype['type'].'</option>';
}
echo '</select>';
?>
    <br>
    Repas
    <label>
        <input type='text' name='Repas' size="20">
        <br> Vege
        <Input type = 'Radio' Name ='Vege' value= '0'>Oui
        <Input type = 'Radio' Name ='Vege' value= '1'>Non
        <br> Prix
        <input type='text' name='Prix' size='20'>
        <br>
        <input type='submit' name='OK' value='Envoyer' />
    </label>
<?php
mysql_close();
?>
    </form>
</body>
</html>