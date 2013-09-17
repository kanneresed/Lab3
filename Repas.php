<?php
// Connection a la base de donner
$base = mysql_connect('localhost', 'root', 'admin123');
mysql_select_db('repas', $base) ;
?>
<html>
<head>
    <title>Inscription d'un repas</title>
</head>
<body>
<?php
$sql = "SELECT 'pays' FROM 'Pays' WHERE 1" ;
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error()) ;


?>
</body>
</html>