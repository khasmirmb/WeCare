<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Feedback{

    // Class attributes
    public $id;
    public $user_id;
    public $subject;
    public $message;
    public $status;
    public $firstname;
    public $middlename;
    public $lastname;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
    function add_feedback_by_user(){
        $sql = "INSERT INTO feedback (user_id, subject, message, status) VALUES 
        (:user_id, :subject, :message, :status);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
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

    function show_all_feedback(){
        $sql = "SELECT feedback.id, user_id, subject, message, status, fname, mname, lname FROM feedback INNER JOIN users on feedback.user_id = users.id ORDER BY feedback.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_read_feedback(){
        $sql = "SELECT feedback.id, user_id, subject, message, status, fname, mname, lname FROM feedback INNER JOIN users on feedback.user_id = users.id WHERE status = 1 ORDER BY feedback.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_unread_feedback(){
        $sql = "SELECT feedback.id, user_id, subject, message, status, fname, mname, lname FROM feedback INNER JOIN users on feedback.user_id = users.id WHERE status = 0 ORDER BY feedback.created_at DESC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_feedback_info($record_id){
        $sql = "SELECT feedback.id, user_id, subject, message, status, fname, mname, lname FROM feedback INNER JOIN users on feedback.user_id = users.id WHERE feedback.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function read_feedback($id){
        $sql = "UPDATE feedback SET status = 1 WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
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