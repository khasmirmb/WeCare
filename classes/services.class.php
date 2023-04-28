<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Services{

    // Class attributes
    public $id;
    public $services;
    public $price;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
    function add_services(){
        $sql = "INSERT INTO services (services, price) VALUES 
        (:services, :price);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':services', $this->services);
        $query->bindParam(':price', $this->price);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function delete_service($record_id){
        $sql = "DELETE FROM services WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function edit_services($record_id){
        $sql = "UPDATE services SET services = :services, price = :price WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':services', $this->services);
        $query->bindParam(':price', $this->price);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }


}


?>