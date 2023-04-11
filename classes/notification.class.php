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
     function add_notification(){
        $sql = "INSERT INTO notification (patient_id, type, subject, message, status) VALUES 
        (:patient_id, :type, :subject, :message, :status);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
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

    function add_notification_appointment(){
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
        notification.created_at FROM notification INNER JOIN relative ON notification.patient_id = relative.patient_id WHERE relative.user_id = :user_id AND notification.status = 0 ORDER BY notification.created_at ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_notification_by_user($user_id){
        $sql = "SELECT COUNT(*) AS notification_total FROM notification INNER JOIN relative ON notification.patient_id = relative.patient_id WHERE relative.user_id = :user_id AND notification.status = 0;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_notification_by_user_appointment($user_id){
        $sql = "SELECT notification.type,
        notification.id AS not_id2,
        notification.subject,
        notification.message,
        notification.status,
        notification.created_at FROM notification WHERE notification.user_id = :user_id AND notification.status = 0 ORDER BY notification.created_at ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function count_notification_by_user_appointment($user_id){
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

}


?>