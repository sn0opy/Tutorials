<?

include 'config.php';

$qry = mysql_query('SELECT * FROM `gbook_entries` ORDER BY entryDate DESC');

while($result = mysql_fetch_assoc($qry)) {
	include 'tpl/entry.tpl.php';
}

?>