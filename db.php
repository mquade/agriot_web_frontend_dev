<?php

try {
	$db = new PDO("mysql:host=agriot-dev-1.cjzfegknb3zi.eu-central-1.rds.amazonaws.com;dbname=agriot_productive", 'dbroot', 'MnPiss!R00t');
} catch (PDOException $e) {
	echo 'Error: ' . htmlspecialchars($e->getMessage());
	exit();
	
}

$sql = "SELECT * FROM agriot_productive.users";
$result = $db->query($sql);
echo "<ul>";
	foreach ($result as $row){
		echo	"<li>" . htmlspecialchars($row["id"]) .
				": " . htmlspecialchars($row["firstName"]) . "</li>";
		
		
	}
	echo "</ul>";
?>