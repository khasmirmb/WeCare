<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Patients{

    // Class attributes
    public $id;
    public $firstname;
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

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_patient(){
        // SQL statement to add patient
        $sql = "INSERT INTO patient (firstname, lastname, suffix, date_of_birth, place_of_birth, gender, province, barangay, city, postal, background_history, doctors_diagnosis, allergies) VALUES 
        (:firstname, :lastname, :suffix, :date_of_birth, :place_of_birth, :gender, :province, :barangay, :city, :postal, :background_history, :doctors_diagnosis, :allergies);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':place_of_birth', $this->place_of_birth);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':province', $this->province);
        $query->bindParam(':barangay', $this->barangay);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':background_history', $this->background_history);
        $query->bindParam(':doctors_diagnosis', $this->doctors_diagnosis);
        $query->bindParam(':allergies', $this->allergies);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_patient_data(){
        $sql = "SELECT * FROM patient;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}


?>