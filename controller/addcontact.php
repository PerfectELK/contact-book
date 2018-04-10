<?php
require('../model/db.php');
require('../model/contactListClass.php');

$contact = new ContactList;

$contact->name = $_POST['name'];
$contact->lastname = $_POST['lastname'];
$contact->email = $_POST['email'];
$contact->phonenumber = $_POST['phonenumber'];

$contact->addContacnt();

if($contact->addContacnt()){
	echo 1;
} else{
	echo 2;
}
?>