<?php
include('db.php');

//Add A User
$data = [
	'name' => 'example',
	'surname' => 'example',
	'age'	=> 32,
	'phoneNumber' => 54332121
];

$sql 	= "INSERT INTO ogrenciler (adi, soyadi, yasi, telefonNumarasi) VALUES (:adi, :soyadi, :yasi, :telefonNumarasi)";
$query 	= $db->prepare($sql)->execute($data);

?>

//you can change these examples. also you should connect your code to database.