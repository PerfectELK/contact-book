<?php
require("../model/db.php");
require("../model/contactListClass.php");

$edit = new ContactList;

$edit->name = $_POST['name'];
$edit->lastname = $_POST['lastname'];
$edit->email = $_POST['email'];
$edit->phonenumber = $_POST['phonenumber'];
$selectnumber = $_POST['phonenumber'];

if($edit->editContacnt($selectnumber)){
	echo 1;
} else {
	echo 0;
}
?>