<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Medicine{

    // Class attributes
    public $id;
    public $patient_id;
    public $name;
    public $dose;
    public $frequency;
    public $started_at;
    public $status;
    public $note;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_medicine(){

        $sql = "INSERT INTO monitoring_medecine (patient_id, name, dose, frequency, started_at, status, note) VALUES 
        (:patient_id, :name, :dose, :frequency, :started_at, :status, :note);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':dose', $this->dose);
        $query->bindParam(':frequency', $this->frequency);
        $query->bindParam(':started_at', $this->started_at);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':note', $this->note);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function delete_medicine($record_id){
        $sql = "DELETE FROM monitoring_medecine WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}


?>