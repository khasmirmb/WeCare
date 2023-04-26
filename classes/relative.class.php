<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Relative{

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
    public $relationship;
    public $phone;
    public $telephone;
    public $email;
    public $picture;
    public $relative_info_no;
    public $patient_id;
    public $proof;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_relative_info(){
        // SQL statement to add patient
        $sql = "INSERT INTO relative_info (user_id, firstname, middlename, lastname, suffix, date_of_birth, place_of_birth, gender, province, street, barangay, city, postal, relationship, phone, telephone, email, picture, relative_info_no) VALUES 
        (:user_id, :firstname, :middlename, :lastname, :suffix, :date_of_birth, :place_of_birth, :gender, :province, :street, :barangay, :city, :postal, :relationship, :phone, :telephone, :email, :picture, :relative_info_no);";

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
        $query->bindParam(':relationship', $this->relationship);
        $query->bindParam(':phone', $this->phone);
        $query->bindParam(':telephone', $this->telephone);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':picture', $this->picture);
        $query->bindParam(':relative_info_no', $this->relative_info_no);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch_admission_relative_info($record_id){
        $sql = "SELECT admission.id, relative_info.firstname AS r_firstname, relative_info.lastname AS r_lastname, relative_info.middlename AS r_middlename, relative_info.suffix AS r_suffix, relative_info.date_of_birth AS r_date_of_birth, relative_info.place_of_birth AS r_place_of_birth, relative_info.gender AS r_gender, relative_info.province AS r_province, relative_info.street AS r_street, relative_info.barangay AS r_barangay, relative_info.city AS r_city, relative_info.picture AS r_picture, relative_info.email, relative_info.phone, relative_info.telephone, relative_info.relationship FROM admission INNER JOIN relative_info ON relative_info = relative_info.id WHERE admission.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function relative_user_info($user_id){
        $sql = "SELECT relative.id, relative.user_id FROM relative INNER JOIN users ON relative.user_id = users.id WHERE user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_relative_request(){
        $sql = "SELECT relative.id,
        relative.user_id AS user_iden,
        relative.relationship,
        relative.proof,
        relative.patient_fname,
        relative.patient_mname,
        relative.patient_lname,
        relative.patient_suffix,
        relative.patient_id,
        users.fname,
        users.mname,
        users.lname
        FROM relative INNER JOIN users ON relative.user_id = users.id WHERE relative.patient_id = 0;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_relative_request_by_user($user_id){
        $sql = "SELECT relative.id,
        relative.user_id,
        relative.relationship,
        relative.proof,
        relative.patient_fname,
        relative.patient_mname,
        relative.patient_lname,
        relative.patient_suffix,
        relative.patient_id,
        users.fname,
        users.mname,
        users.lname
        FROM relative INNER JOIN users ON relative.user_id = users.id WHERE relative.patient_id = 0 AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete_relative_request($record_id){
        $sql = "DELETE FROM relative WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function add_relative_request(){

        $sql = "INSERT INTO relative (user_id, relationship, proof, patient_fname, patient_mname, patient_lname, patient_suffix, patient_id) VALUES 
        (:user_id, :relationship, :proof, :patient_fname, :patient_mname, :patient_lname, :patient_suffix, :patient_id);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':relationship', $this->relationship);
        $query->bindParam(':proof', $this->proof);
        $query->bindParam(':patient_fname', $this->firstname);
        $query->bindParam(':patient_lname', $this->lastname);
        $query->bindParam(':patient_mname', $this->middlename);
        $query->bindParam(':patient_suffix', $this->suffix);
        $query->bindParam(':patient_id', $this->patient_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function admin_accept_request($record_id){
        $sql = "UPDATE relative SET patient_id = :patient_id WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':patient_id', $this->patient_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch_relative_by_patient($patient_id){
        $sql = "SELECT * FROM relative WHERE patient_id = :patient_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function add_relative_admission(){

        $sql = "INSERT INTO relative (user_id, relationship, proof, patient_fname, patient_mname, patient_lname, patient_suffix, patient_id) VALUES 
        (:user_id, :relationship, :proof, :patient_fname, :patient_mname, :patient_lname, :patient_suffix, :patient_id);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':relationship', $this->relationship);
        $query->bindParam(':proof', $this->proof);
        $query->bindParam(':patient_fname', $this->firstname);
        $query->bindParam(':patient_lname', $this->lastname);
        $query->bindParam(':patient_mname', $this->middlename);
        $query->bindParam(':patient_suffix', $this->suffix);
        $query->bindParam(':patient_id', $this->patient_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch_relative_info($user_id){
        $sql = "SELECT * FROM relative WHERE user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function count_relative_requests(){
        $sql = "SELECT COUNT(*) AS request FROM relative WHERE relative.patient_id = 0;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_patient_relative($patient_id){
        $sql = "SELECT users.image, users.fname, users.mname, users.lname, relative.relationship, users.phone FROM relative INNER JOIN users ON relative.user_id = users.id WHERE patient_id = :patient_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}


?>