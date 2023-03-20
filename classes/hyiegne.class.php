<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Hyiegne{

    // Class attributes
    public $id;
    public $patient_id;
    public $name;
    public $time;
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
     function add_hyiegne(){

        $sql = "INSERT INTO monitoring_hyiegne (patient_id, name, time, status, note) VALUES 
        (:patient_id, :name, :time, :status, :note);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':time', $this->time);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':note', $this->note);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function delete_hyiegne($record_id){
        $sql = "DELETE FROM monitoring_hyiegne WHERE id = :id;";
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