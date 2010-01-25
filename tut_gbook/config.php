<?

$dbServer = 'localhost'; # eigentlich immer localhost
$dbUser = 'root'; # Benutzername
$dbPass = ''; # Passwort
$dbDatabase = 'crap'; # Datenbank

$db = mysql_connect($dbServer, $dbUser, $dbPass);

if($db) {
	mysql_select_db($dbDatabase, $db);
}

?>