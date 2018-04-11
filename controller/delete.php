<?php
require('../model/db.php');
require('../model/contactListClass.php');

$delete = new ContactList;

$delete->email = $_POST['emaildelete'];

if($delete->removeContact()){
	echo 1;
} else{
	echo 0;
}
?>