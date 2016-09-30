<?php
try {
	$db = new PDO ( '', '', '' );
} catch ( PDOException $e ) {
	echo 'Error: ' . htmlspecialchars ( $e->getMessage () );
	exit ();
}
?>