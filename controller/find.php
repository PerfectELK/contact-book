<?php
require('../model/db.php');
require('../model/contactListClass.php');

$find = new ContactList;

$find->name = $_POST['namefind'];

$findcontact = $find->selectContact();

foreach ($findcontact as $value) {
	$name = $value['name'];
	$lastname = $value['lastname'];
	$email = $value['email'];
	$phonenumber = $value['phonenumber'];
}
$arr = [
	'name' => $name,
	'lastname' => $lastname,
	'email' => $email,
	'phonenumber' => $phonenumber
];
$json = json_encode($arr);

echo $json;
?>