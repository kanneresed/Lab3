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
$sqlpays = "SELECT pays FROM Pays" ;
$req = mysql_query($sqlpays) or die('Erreur SQL !<br />'.$sqlpays.'<br />'.mysql_error()) ;


?>
</body>
</html>