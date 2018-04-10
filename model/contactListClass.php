<?php

class ContactList 
{
    
	public $name;
	public $lastname;
	public $email;
	public $phonenumber;


    public function addContacnt()
    {
    	global $db;
    	$prepare = $db->prepare("  
		INSERT INTO contacts (name, lastname, email, phonenumber) VALUES (?,?,?,?)
    		");
    	$execute = $db->execute(array($this->name,$this->lastname,$this->email,$this->phonenumber));
    }

    public static function selectContact($name)
    {
    	global $db;
    	$query = $db->query("  
		SELECT * FROM contacts WHERE name = '$name'
    		");
    	return $query;
    }

    public function editContacnt($name,$lastname,$mail,$phonenumber,$selectnumber)
    {
    	global $db;
    	$prepare = $db->prepare("  
			UPDATE contacts SET name = ?, lastname = ?, $mail = ?, phonenumber = ? WHERE phonenumber = '$selectnumber'");
    	$execute = $db->execute(array($name,$lastname,$mail,$phonenumber));
    }
    public function removeContact($email)
    {
    	global $db;
    	$delete = $db->exec("
			DELETE FROM contacts WHERE email = '$email'
    		");
    }
}
?>