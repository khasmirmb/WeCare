<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Survey{

    // Class attributes
    public $id;
    public $user_id;
    public $survey_question;
    public $answers;
    public $survey_no;
    public $inquire;
    public $services;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_survey_answer(){

        $sql = "INSERT INTO survey_answer (user_id, survey_question, answers, survey_no) VALUES 
        (:user_id, :survey_question, :answers, :survey_no);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_question', $this->survey_question);
        $query->bindParam(':answers', $this->answers);
        $query->bindParam(':survey_no', $this->survey_no);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function add_survey_info(){
        $sql = "INSERT INTO survey_info (user_id, survey_no, inquire, services) VALUES 
        (:user_id, :survey_no, :inquire, :services);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_no', $this->survey_no);
        $query->bindParam(':inquire', $this->inquire);
        $query->bindParam(':services', $this->services);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }


}


?>