<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Client{

    // Class attributes
    public $id;
    public $user_id;
    public $firstname;
    public $lastname;
    public $middlename;
    public $suffix;
    public $date_of_birth;
    public $gender;
    public $address;
    public $martial_status;
    public $position;
    public $status;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_client(){
        // SQL statement to add client
        $sql = "INSERT INTO client (user_id, firstname, lastname, suffix, date_of_birth, middlename, address, gender, martial_status) VALUES 
        (:user_id, :firstname, :lastname, :suffix, :date_of_birth, :middlename, :address, :gender,:martial_status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':martial_status', $this->martial_status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_client_data(){
        $sql = "SELECT * FROM client;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}


?>