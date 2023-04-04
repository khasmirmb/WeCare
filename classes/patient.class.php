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
    public $status;
    public $room;
    public $staff_id;
    public $services;

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
        $sql = "INSERT INTO patient_info (user_id, firstname, middlename, lastname, suffix, date_of_birth, place_of_birth, gender, province, street, barangay, city, postal, background_history, doctors_diagnosis, allergies, picture, patient_info_no) VALUES 
        (:user_id, :firstname, :middlename, :lastname, :suffix, :date_of_birth, :place_of_birth, :gender, :province, :street, :barangay, :city, :postal, :background_history, :doctors_diagnosis, :allergies, :picture, :patient_info_no);";

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
        $query->bindParam(':street', $this->street);
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

    function fetch_admission_patient_info($record_id){
        $sql = "SELECT admission.admission_no, admission.id, patient_info.firstname AS p_firstname, patient_info.lastname AS p_lastname, patient_info.middlename AS p_middlename, patient_info.suffix AS p_suffix, patient_info.date_of_birth AS p_date_of_birth, patient_info.place_of_birth AS p_place_of_birth, patient_info.gender AS p_gender, patient_info.province AS p_province, patient_info.street AS p_street, patient_info.barangay AS p_barangay, patient_info.city AS p_city, patient_info.background_history, patient_info.doctors_diagnosis, patient_info.allergies, patient_info.picture AS p_picture FROM admission INNER JOIN patient_info ON patient_info = patient_info.id WHERE admission.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function add_patient(){
        // SQL statement to add patient
        $sql = "INSERT INTO patient (staff_id, fname, mname, lname, suffix, date_birth, place_birth, gender, province, street, barangay, city, postal, background_history, doctors_diagnosis, allergies, image, status, room, services) VALUES 
        (:staff_id, :firstname, :middlename, :lastname, :suffix, :date_of_birth, :place_of_birth, :gender, :province, :street, :barangay, :city, :postal, :background_history, :doctors_diagnosis, :allergies, :picture, :status, :room, :services);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':place_of_birth', $this->place_of_birth);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':province', $this->province);
        $query->bindParam(':street', $this->street);
        $query->bindParam(':barangay', $this->barangay);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':postal', $this->postal);
        $query->bindParam(':background_history', $this->background_history);
        $query->bindParam(':doctors_diagnosis', $this->doctors_diagnosis);
        $query->bindParam(':allergies', $this->allergies);
        $query->bindParam(':picture', $this->picture);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':room', $this->room);
        $query->bindParam(':services', $this->services);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_patient_data(){
        $sql = "SELECT * FROM patient ORDER BY lname ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_patient_staff($id){
        $sql = "SELECT * FROM patient WHERE staff_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_patient_info($record_id, $staff_id){
        $sql = "SELECT * FROM patient WHERE id = :id AND staff_id = :staff_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':staff_id', $staff_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function fetch_patient_data($record_id){
        $sql = "SELECT * FROM patient WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

}


?>