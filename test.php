< ? php 

try {
	$pdo = new PDO("mysql:host=localhost;dbname=Mydb", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	die("ERROR: Could not connect. ".$e->getMessage());
}

try {
	$sql = "SELECT * FROM Data LIMIT 2";
	$res = $pdo->query($sql);
	if ($res->rowCount() > 0) {
		echo "<table>";
		echo "<tr>";
		echo "<th>Firstname</th>";
		echo "<th>Lastname</th>";
		echo "<th>Age</th>";
		echo "</tr>";
		while ($row = $res->fetch()) {
			echo "<tr>";
			echo "<td>".$row['Firstname']."</td>";
			echo "<td>".$row['Lastname']."</td>";
			echo "<td>".$row['Age']."</td>";
			echo "</tr>";
		}
		echo "</table>";
		unset($res);
	}
	else {
		echo "No matching records are found.";
	}
}
catch (PDOException $e) {
	die("ERROR: Could not able to execute $sql. ".$e->getMessage());
}

unset($pdo);

? >
