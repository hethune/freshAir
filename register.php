<?php
require_once 'lib/meekrodb.2.1.class.php';
require 'lib/functions.php';

DB::$user = 'myair';
DB::$password = '111111';
DB::$dbName = 'freshAir';

$table = 'Users';

$phone = (float)$_POST["phone"];
$email = $_POST["email"];
$wechat = (int)$_POST["wechat"];
$city = $_POST["city"];
$date = date("Y-m-d"); 

var_dump($city);

echo "fetching...</br>";

$result = DB::query("select * from Users where Phone=%d  limit 1;",$phone);

if (count($result)>0) {
	OutputDuplicatUser();
	exit(0);
}

echo "regitering...";


if (checkSanityNumber($phone) && checkSanityEmail($email) && checkSanityCity($city)) {
	echo "writing";
	$result = DB::query("INSERT INTO Users (Phone, WeChat, Email, City, RegistrationTime) Values (%d, %d, %s, %s, %s);",$phone, $wechat, $email, $city, $date);
	OutputSuccessRegistration();
}



?>