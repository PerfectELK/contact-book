<?php
require('../model/db.php');
require('../model/contactListClass.php');

$contact = new ContactList;

$contact->name = "Андрей";
$contact->lastname = "Лосев";
$contact->email = "PerfectELK@mail.ru";
$contact->phonenumber = 89103099760;

$contact->addContacnt();
?>