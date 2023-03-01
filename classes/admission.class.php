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
    public $staff_id;
    public $admission_no;
    public $status;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_admission(){

        $sql = "INSERT INTO admission (user_id, survey_info, patient_info, relative_info, staff_id,  admission_no, status) VALUES 
        (:user_id, :survey_info, :patient_info, :relative_info, :staff_id, :admission_no, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_info', $this->survey_info);
        $query->bindParam(':patient_info', $this->patient_info);
        $query->bindParam(':relative_info', $this->relative_info);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':admission_no', $this->admission_no);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_user_admission_survey_info($user_id, $admission_no){
        $sql = "SELECT * FROM survey_info WHERE survey_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission_patient_info($user_id, $admission_no){
        $sql = "SELECT * FROM patient_info WHERE patient_info_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission_relative_info($user_id, $admission_no){
        $sql = "SELECT * FROM relative_info WHERE relative_info_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission($user_id){
        $sql = "SELECT admission.status, admission.admission_no, survey_info.inquire, patient_info.firstname, patient_info.lastname, relative_info.firstname AS r_firstname, relative_info.lastname AS r_lastname FROM admission INNER JOIN survey_info ON survey_info = survey_info.id  INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id WHERE admission.user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }



}
?>