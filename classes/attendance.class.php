<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Attendance{

    // Class attributes
    public $id;
    public $staff_id;
    public $date;
    public $time_in;
    public $time_out;
    public $status;
    public $shift_type;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_attendance(){

        $sql = "INSERT INTO attendance (staff_id, date, time_in, status, shift_type) VALUES 
        (:staff_id, :date, :time_in, :status, :shift_type);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':date', $this->date);
        $query->bindParam(':time_in', $this->time_in);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':shift_type', $this->shift_type);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function add_not_present(){

        $sql = "INSERT INTO attendance (staff_id, date, status, shift_type) VALUES 
        (:staff_id, :date, :status, :shift_type);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':date', $this->date);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':shift_type', $this->shift_type);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function staff_attendance($staff_id){
        $sql = "SELECT * FROM attendance WHERE staff_id = :staff_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $staff_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function time_out_attendance($id){
        $sql = "UPDATE attendance SET time_out = :time_out WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':time_out', $this->time_out);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function check_duplicate_date($date, $staff_id){
        $sql = "SELECT * FROM attendance WHERE date = :date AND staff_id = :staff_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':date', $date);
        $query->bindParam(':staff_id', $staff_id);

        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function attendance_admin(){
        $sql = "SELECT attendance.date, attendance.time_in, attendance.time_out, attendance.status, attendance.shift_type, staff.firstname, staff.middlename, staff.lastname FROM attendance INNER JOIN staff ON attendance.staff_id = staff.id;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}


?>