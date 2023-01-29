<?php

require_once 'database.php';

class Patient{
    //attributes

    public $id;
    public $firstname;
    public $lastname;
    public $middlename;
    public $suffix;
    public $date_of_birth;
    public $place_of_birth;
    public $province;
    public $gender;
    public $street;
    public $barangay;
    public $city;
    public $postal;
    public $background_history;
    public $doctor_diagnosis;
    public $allergies;


    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }


    function add(){
        $sql = "INSERT INTO patient (firstname, lastname, middlename, suffix, date_of_birth, place_of_birth, province, gender, street, barangay, city, postal, background_history, doctor_diagnosis, allergies, image) VALUES
        (:firstname, :lastname, :middlename, :suffix, :date_of_birth, :place_of_birth, :province, :gender, :street, :barangay, :city, :postal, :background_history, :doctor_diagnosis, :allergies, :image);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':place_of_birth', $this->place_of_birth);
        $query->bindParam(':province', $this->province);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':street', $this->street);
        $query->bindParam(':barangay', $this->barangay);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':postal', $this->postal);
        $query->bindParam(':background_history', $this->background_history);
        $query->bindParam(':doctor_diagnosis', $this->doctor_diagnosis);
        $query->bindParam(':allergies', $this->allergies);
        $query->bindParam(':image', $this->image);


        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function edit(){
        $sql = "UPDATE patient SET firstname=:firstname, lastname=:lastname, middlename=:middlename,suffix=:suffix, date_of_birth=:date_of_birth, place_of_birth=:place_of_birth, province=:province, gender=:gender, street=:street, barangay=:barangay, city=:city, postal=:postal, background_history=:background_history, doctor_diagnosis=:doctor_diagnosis, allergies=:allergies, image=:image WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':place_of_birth', $this->place_of_birth);
        $query->bindParam(':province', $this->province);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':street', $this->street);
        $query->bindParam(':barangay', $this->barangay);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':postal', $this->postal);
        $query->bindParam(':background_history', $this->background_history);
        $query->bindParam(':doctor_diagnosis', $this->doctor_diagnosis);
        $query->bindParam(':allergies', $this->allergies);
        $query->bindParam(':image', $this->image);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM patient;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete($record_id){
        $sql = "DELETE FROM patient WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch($record_id){
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