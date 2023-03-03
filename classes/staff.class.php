<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Staff{

    // Class attributes
    public $id;
    public $firstname;
    public $lastname;
    public $middlename;
    public $suffix;
    public $date_of_birth;
    public $address;
    public $degree;
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
     function add_staff(){
        // SQL statement to add staff
        $sql = "INSERT INTO staff (firstname, lastname, suffix, date_of_birth, middlename, address, degree, position, status) VALUES 
        (:firstname, :lastname, :suffix, :date_of_birth, :middlename, :address, :degree, :position, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':degree', $this->degree);
        $query->bindParam(':position', $this->position);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_staff_data(){
        $sql = "SELECT * FROM staff;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_staff_schedule(){
        $sql = "SELECT * FROM staff_schedule;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function staff_user_info($user_id){
        $sql = "SELECT staff.id, staff.user_id FROM staff INNER JOIN users ON staff.user_id = users.id WHERE user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}


?>