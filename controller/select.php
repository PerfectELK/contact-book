<?php
require('../model/db.php');
require('../model/contactListClass.php');

$select = new ContactList;
$select->phonenumber = $_POST['phonenumber'];

$find = $select->findContact();

foreach ($find as $value) {
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