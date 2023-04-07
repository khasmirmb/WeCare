<?php

require_once 'database.php';

class Reference{

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function get_appointment_purpose(){
        $sql = "SELECT * FROM appointment_purpose;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_relationship(){
        $sql = "SELECT * FROM relationship;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_refcitymun(){
        $sql = "SELECT * FROM refcitymun ORDER BY citymunDesc ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_refprovince(){
        $sql = "SELECT * FROM refprovince ORDER BY provDesc ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_rooms(){
        $sql = "SELECT * FROM rooms;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function get_services(){
        $sql = "SELECT * FROM services;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}