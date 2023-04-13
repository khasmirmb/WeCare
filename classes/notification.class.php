<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Notification{

    // Class attributes
    public $id;
    public $patient_id;
    public $user_id;
    public $type;
    public $subject;
    public $message;
    public $status;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
    function add_notification_by_user_patient(){
        $sql = "INSERT INTO notification (patient_id, user_id, type, subject, message, status) VALUES 
        (:patient_id, :user_id, :type, :subject, :message, :status);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':type', $this->type);
        $query->bindParam(':subject', $this->subject);
        $query->bindParam(':message', $this->message);
        $query->bindParam(':status', $this->status);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function add_notification_by_id(){
        $sql = "INSERT INTO notification (user_id, type, subject, message, status) VALUES 
        (:user_id, :type, :subject, :message, :status);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':type', $this->type);
        $query->bindParam(':subject', $this->subject);
        $query->bindParam(':message', $this->message);
        $query->bindParam(':status', $this->status);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_notification_by_user($user_id){
        $sql = "SELECT notification.type,
        notification.id AS not_id,
        notification.subject,
        notification.message,
        notification.status,
        notification.created_at FROM notification WHERE notification.user_id = :user_id AND notification.status = 0 ORDER BY notification.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_notification_by_user($user_id){
        $sql = "SELECT COUNT(*) AS notification_total FROM notification WHERE notification.user_id = :user_id AND notification.status = 0;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_notification_info($record_id){
        $sql = "SELECT * FROM notification WHERE notification.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show_all_notification_by_user($user_id){
        $sql = "SELECT * FROM notification WHERE notification.user_id = :user_id ORDER BY notification.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_appointment_notification_by_user($user_id){
        $sql = "SELECT * FROM notification WHERE notification.user_id = :user_id AND type = 'Appointment' ORDER BY notification.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_admission_notification_by_user($user_id){
        $sql = "SELECT * FROM notification WHERE notification.user_id = :user_id AND type = 'Admission' ORDER BY notification.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_payment_notification_by_user($user_id){
        $sql = "SELECT * FROM notification WHERE notification.user_id = :user_id AND type = 'Payment' ORDER BY notification.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_appointment_notification_by_user($user_id){
        $sql = "SELECT COUNT(*) AS appointment_total FROM notification WHERE notification.user_id = :user_id AND notification.status = 0 AND type = 'Appointment';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_admission_notification_by_user($user_id){
        $sql = "SELECT COUNT(*) AS admission_total FROM notification WHERE notification.user_id = :user_id AND notification.status = 0 AND type = 'Admission';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_payment_notification_by_user($user_id){
        $sql = "SELECT COUNT(*) AS payment_total FROM notification WHERE notification.user_id = :user_id AND notification.status = 0 AND type = 'Payment';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function read_notification($user_id, $id){
        $sql = "UPDATE notification SET status = 1 WHERE user_id = :user_id AND id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':id', $id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}


?>