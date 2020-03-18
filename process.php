<?php 

$data = $_POST['row'];
$sql = 'INSERT INTO countries(country_name, city_name) VALUES ';
$x = 0;
$throw = 0;

foreach ($data as $key => $row) {
	if (! strlen(trim($row['country'])) || ! strlen(trim($row['city']))) {
		unset($data[$key]);
		$throw++;
		continue;
	}

	$sql .= "('{$row['country']}', '{$row['city']}')";
	$sql .= $x + 1 != (count($data) - $throw) ? ', ' : ';'; 
	$x++;
}

echo '<pre>', $sql;