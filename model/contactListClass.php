<?php

class ContactList 
{
    
	public $name;
	public $lastname;
	public $email;
	public $phonenumber;

	public function confirmEmail(){
		global $db;
		$query = $db->query("  
			SELECT * FROM contacts WHERE email = '$this->email'
			");
		return $query;
	}

    public function addContacnt()
    {
    	global $db;
    	$prepare = $db->prepare("  
		INSERT INTO contacts (name, lastname, email, phonenumber) VALUES (?,?,?,?)
    		");
    	$execute = $prepare->execute(array($this->name,$this->lastname,$this->email,$this->phonenumber));
    }

    public static function selectAllContact()
    {
    	global $db;
    	$query = $db->query("  
		SELECT phonenumber FROM contacts 
    		");
    	return $query;
    }

    public static function findAllContact()
    {
    	global $db;
    	$query = $db->query("  
		SELECT * FROM contacts 
    		");
    	return $query;
    }

    public function findContact()
    {
		global $db;

		$query = $db->query("  
		SELECT * FROM contacts WHERE phonenumber = '$this->phonenumber'
			");
		return $query;
    }

    public function selectContact()
    {
    	global $db;
    	$query = $db->query("  
		SELECT * FROM contacts WHERE name = '$this->name'
    		");
    	return $query;
    }

    public function editContacnt($selectnumber)
    {
    	global $db;
    	$prepare = $db->prepare("  
			UPDATE contacts SET name = ?, lastname = ?, email = ?, phonenumber = ? WHERE phonenumber = '$selectnumber'");
    	$execute = $prepare->execute(array($this->name,$this->lastname,$this->email,$this->phonenumber));
    }
    public function removeContact()
    {
    	global $db;
    	$delete = $db->exec("
			DELETE FROM contacts WHERE email = '$this->email'
    		");
    }
}
?>