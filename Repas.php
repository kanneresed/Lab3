<?php
// Connection a la base de donner
$base = mysql_connect('localhost', 'root', 'admin123');
mysql_select_db('repas', $base) ;
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="content-type" content="text/html; UTF-8" />
    <title>Inscription d'un repas</title>
</head>
<body>
<?php
//Requete pour choisir un Pays
$sql = "SELECT pays FROM Pays" ;
$req = mysql_query($sql) ;
while($result = mysql_fetch_assoc($req))
{
    echo '<option value='.$result['pays'].'>'.$result['pays'].'</option>';
}
?>
<?php
$sql = "SELECT type FROM Type" ;
$req = mysql_query($sql);
echo '<select>';
while($result = mysql_fetch_assoc($req))
{
    echo '<option value='.$result['type'].'>'.$result['type'].'</option>';
}
mysql_close();
?>
</body>
</html>