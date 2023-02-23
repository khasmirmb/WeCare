<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Patient{

    // Class attributes
    public $id;
    public $user_id;
    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $date_of_birth;
    public $place_of_birth;
    public $gender;
    public $province;
    public $street;
    public $barangay;
    public $city;
    public $postal;
    public $background_history;
    public $doctors_diagnosis;
    public $allergies;
    public $picture;
    public $patient_info_no;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_patient_info(){
        // SQL statement to add patient
        $sql = "INSERT INTO patient_info (user_id, firstname, middlename, lastname, suffix, date_of_birth, place_of_birth, gender, province, barangay, city, postal, background_history, doctors_diagnosis, allergies, picture, patient_info_no) VALUES 
        (:user_id, :firstname, :middlename, :lastname, :suffix, :date_of_birth, :place_of_birth, :gender, :province, :barangay, :city, :postal, :background_history, :doctors_diagnosis, :allergies, :picture, :patient_info_no);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':place_of_birth', $this->place_of_birth);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':province', $this->province);
        $query->bindParam(':barangay', $this->barangay);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':postal', $this->postal);
        $query->bindParam(':background_history', $this->background_history);
        $query->bindParam(':doctors_diagnosis', $this->doctors_diagnosis);
        $query->bindParam(':allergies', $this->allergies);
        $query->bindParam(':picture', $this->picture);
        $query->bindParam(':patient_info_no', $this->patient_info_no);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }


}


?>