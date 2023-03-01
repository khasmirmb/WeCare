<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Appointment{

    // Class attributes
    public $id;
    public $staff_id;
    public $user_id;
    public $staff_schedule_id;
    public $appointment_number;
    public $purpose_for_appointment;
    public $other_purpose;
    public $appointment_date;
    public $appointment_time;
    public $status;
    public $client_came;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_appointment(){

        $sql = "INSERT INTO appointment (staff_id, user_id, staff_schedule_id, appointment_number, purpose_for_appointment, other_purpose, appointment_date, appointment_time, status, client_came) VALUES 
        (:staff_id, :user_id, :staff_schedule_id, :appointment_number, :purpose_for_appointment, :other_purpose, :appointment_date, :appointment_time, :status, :client_came);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':staff_schedule_id', $this->staff_schedule_id);
        $query->bindParam(':appointment_number', $this->appointment_number);
        $query->bindParam(':purpose_for_appointment', $this->purpose_for_appointment);
        $query->bindParam(':other_purpose', $this->other_purpose);
        $query->bindParam(':appointment_date', $this->appointment_date);
        $query->bindParam(':appointment_time', $this->appointment_time);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':client_came', $this->client_came);

        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_appointment_data(){
        $sql = "SELECT * FROM appointment;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_max_app_number(){
        $sql = "SELECT MAX(appointment_number) as appointment_number FROM appointment;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_appointment($user_id){
        $sql = "SELECT appointment.id, staff_id, user_id, staff_schedule_id, appointment_purpose.purpose, other_purpose, appointment_date, appointment_time, status FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id WHERE user_id = :user_id ORDER BY status DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
    function cancel_appointment($record_id){
        $sql = "UPDATE appointment SET status = :status WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':status', $this->status);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }


}


?>