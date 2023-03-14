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



}


?>