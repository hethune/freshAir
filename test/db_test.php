<?php 
require_once '../lib/meekrodb.2.1.class.php';
DB::$user = 'myair';
DB::$password = '111111';
DB::$dbName = 'freshAir';

$results = DB::query("SELECT * from AirQuality");

foreach ($results as $row) {
  echo "City: " . $row['City']." ";
  echo "API: " . $row['API'] . " ";
  echo "Pollutant: " . $row['Pollutant'] . "</br>";
  echo "-------------</br>";
}

?>