<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Appointment{

    // Class attributes
    public $id;
    public $firstname;
    public $lastname;
    public $middlename;
    public $email;
    public $phone;
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

    function show_assigned_staff_appointment($user_id, $staff_id){
        $sql = "SELECT appointment.id, staff_id, appointment_purpose.purpose, other_purpose, appointment_date, appointment_time, appointment.status, client_came, users.fname, users.mname, users.lname FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN staff ON staff_id = staff.id INNER JOIN users ON appointment.user_id = users.id WHERE staff_id = :staff_id AND staff.user_id = :user_id AND appointment.status = 'Accepted';";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $staff_id);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function staff_action_appointment($record_id){
        $sql = "UPDATE appointment SET status = :status, client_came = :client_came WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':client_came', $this->client_came);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function show_appointment_admin(){
        $sql = "SELECT appointment.user_id AS user_iden, appointment.id, users.fname, users.mname, users.lname, appointment_purpose.purpose, appointment.other_purpose, appointment_date, appointment_time, appointment.status, appointment.client_came, staff.firstname AS s_fname, staff.middlename AS s_mname, staff.lastname AS s_lname, staff.id AS staff_iden FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN users ON appointment.user_id = users.id INNER JOIN staff ON appointment.staff_id = staff.id WHERE appointment.status = 'Pending' ORDER BY appointment_date DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function accepted_appointment_admin(){
        $sql = "SELECT appointment.id, users.id as user_id, users.fname, users.mname, users.lname, appointment_purpose.purpose, appointment.other_purpose, appointment_date, appointment_time, appointment.status, appointment.client_came, staff.firstname AS s_fname, staff.middlename AS s_mname, staff.lastname AS s_lname, staff.id AS staff_iden FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN users ON appointment.user_id = users.id INNER JOIN staff ON appointment.staff_id = staff.id WHERE appointment.status = 'Accepted' ORDER BY appointment_date DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function noshow_appointment_admin(){
        $sql = "SELECT appointment.id, users.fname, users.mname, users.lname, appointment_purpose.purpose, appointment.other_purpose, appointment_date, appointment_time, appointment.status, appointment.client_came, staff.firstname AS s_fname, staff.middlename AS s_mname, staff.lastname AS s_lname, staff.id AS staff_iden FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN users ON appointment.user_id = users.id INNER JOIN staff ON appointment.staff_id = staff.id WHERE appointment.status = 'No-Show' ORDER BY appointment_date DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function completed_appointment_admin(){
        $sql = "SELECT appointment.id, users.fname, users.mname, users.lname, appointment_purpose.purpose, appointment.other_purpose, appointment_date, appointment_time, appointment.status, appointment.client_came, staff.firstname AS s_fname, staff.middlename AS s_mname, staff.lastname AS s_lname, staff.id AS staff_iden FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN users ON appointment.user_id = users.id INNER JOIN staff ON appointment.staff_id = staff.id WHERE appointment.status = 'Completed' ORDER BY appointment_date DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_appointment($record_id){
        $sql = "SELECT appointment.id, users.fname, users.mname, users.lname, users.email, users.phone, appointment_purpose.purpose, appointment.other_purpose, appointment_date, appointment_time, appointment.status, appointment.client_came FROM appointment INNER JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id INNER JOIN users ON appointment.user_id = users.id WHERE appointment.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function staff_assign_appointment($record_id){
        $sql = "UPDATE appointment SET status = :status, staff_id = :staff_id, client_came = :client_came WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':client_came', $this->client_came);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    function delete_appointment($record_id){
        $sql = "DELETE FROM appointment WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function reschedule_appointment($record_id){
        $sql = "UPDATE appointment SET appointment_date = :appointment_date, appointment_time = :appointment_time, status = :status, client_came = :client_came WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
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

    function show_appointment_notification(){
        $sql = "SELECT COUNT(*) AS appointment_total FROM appointment WHERE status = 'Pending' OR status = 'Completed';";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>