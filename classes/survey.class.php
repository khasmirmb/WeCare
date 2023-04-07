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
        $sql = "INSERT INTO survey_info (user_id, survey_no, inquire) VALUES 
        (:user_id, :survey_no, :inquire);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_no', $this->survey_no);
        $query->bindParam(':inquire', $this->inquire);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch_admission_survey_info($record_id){
        $sql = "SELECT admission.id, survey_info.inquire FROM admission INNER JOIN survey_info ON admission.survey_info = survey_info.id WHERE admission.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function fetch_admission_survey_answers($record_id){
        $sql = "SELECT survey_answer.answers, survey_question.question FROM admission INNER JOIN survey_answer ON admission.admission_no = survey_answer.survey_no INNER JOIN survey_question ON survey_answer.survey_question = survey_question.id WHERE admission.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function add_survey_services(){
        $sql = "INSERT INTO survey_services (services, survey_no) VALUES 
        (:services, :survey_no);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':services', $this->services);
        $query->bindParam(':survey_no', $this->survey_no);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function fetch_survey_services($record_id){
        $sql = "SELECT * FROM survey_services WHERE survey_no = :admission_no;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':admission_no', $record_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


}


?>