<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Admission{

    // Class attributes
    public $id;
    public $user_id;
    public $survey_info;
    public $patient_info;
    public $relative_info;
    public $admission_no;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_admission(){

        $sql = "INSERT INTO admission (user_id, survey_info, patient_info, relative_info, admission_no) VALUES 
        (:user_id, :survey_info, :patient_info, :relative_info, :admission_no);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_info', $this->survey_info);
        $query->bindParam(':patient_info', $this->patient_info);
        $query->bindParam(':relative_info', $this->relative_info);
        $query->bindParam(':admission_no', $this->admission_no);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }
}
?>