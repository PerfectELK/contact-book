<?php 
require('../model/db.php');
require('../model/contactListClass.php');

$confirmEmail = new ContactList;

$confirmEmail->email = $_POST['email'];
$check = $confirmEmail->confirmEmail();
foreach ($check as $value){
	$val = $value['email'];
}
if($val){
	echo 1;
} else{
	echo 0;
}
?>