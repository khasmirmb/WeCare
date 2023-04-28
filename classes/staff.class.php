<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Staff{

    // Class attributes
    public $id;
    public $user_id;
    public $firstname;
    public $lastname;
    public $middlename;
    public $suffix;
    public $date_of_birth;
    public $address;
    public $degree;
    public $position;
    public $status;
    public $day;
    public $staff_id;
    public $schedule_id;
    public $shift_type;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_staff(){
        // SQL statement to add staff
        $sql = "INSERT INTO staff (user_id, firstname, lastname, suffix, date_of_birth, middlename, address, degree, position, status) VALUES 
        (:user_id, :firstname, :lastname, :suffix, :date_of_birth, :middlename, :address, :degree, :position, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':suffix', $this->suffix);
        $query->bindParam(':date_of_birth', $this->date_of_birth);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':degree', $this->degree);
        $query->bindParam(':position', $this->position);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_staff_data(){
        $sql = "SELECT * FROM staff;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_staff_schedule($day){
        $sql = "SELECT * FROM staff_schedule WHERE day = :day;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':day', $day);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function staff_user_info($user_id){
        $sql = "SELECT staff.id, staff.user_id FROM staff INNER JOIN users ON staff.user_id = users.id WHERE user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_staff_on_admin(){
        $sql = "SELECT staff.id, staff.user_id, staff.firstname, staff.lastname, staff.middlename, users.phone, users.email, staff.status, staff.position FROM staff INNER JOIN users ON staff.user_id = users.id;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function staff_schedule(){
        $sql = "SELECT staff_schedule.id as sched_id, staff.firstname, staff.lastname, staff.middlename, staff_schedule.day, staff_schedule.shift_type, staff_schedule.status FROM staff_schedule INNER JOIN staff ON staff_schedule.staff_id = staff.id;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_staff_by_staff_id($staff_id){
        $sql = "SELECT * FROM staff_schedule WHERE staff_id = :staff_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $staff_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function add_staff_schedule(){
        // SQL statement to add staff
        $sql = "INSERT INTO staff_schedule (staff_id, day, shift_type, status) VALUES 
        (:staff_id, :day, :shift_type, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':day', $this->day);
        $query->bindParam(':shift_type', $this->shift_type);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function delete_staff_schedule($record_id){
        $sql = "DELETE FROM staff_schedule WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }


}


?>