<?php

/**
 * @author Martin Hrebe��r
 */

/**
 * creates connection to database
 * prints erroe if connection cannot be established
 */

$mysqli = new mysqli('localhost', 'hrebenar3', 'gaexe', 'hrebenar3');
if ($mysqli->connect_errno) {
	echo '<p class="chyba">FATAL ERROR: cannot connect to database. Contact system administrator about this problem.</p>';
	echo '<p class="chyba">'. $mysqli->connect_errno . ' - ' . $mysqli->connect_error . '</p>';
} else {
	$mysqli->query("SET CHARACTER SET 'utf8'");
}

?>
