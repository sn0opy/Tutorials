<?

if(isset($_POST['submit'])) {
	$name = mysql_real_ecape_string($_POST['name']);
	$email = mysql_real_ecape_string($_POST['email']);
	$text = mysql_real_ecape_string($_POST['text']);
	$date = time(); # Gibt den aktuellen UNIX Time Stamp (Wiki) aus.
	
	$qry = mysql_query('INSERT INTO `gbook_entries` SET entryName = "' .$name. '", entryEmail = "' .$email. '", entryDate = "' .$date. '", entryText = "' .$text. '", ');
} else {
	include 'tpl/add.tpl.php';
}

?>