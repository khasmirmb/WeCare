<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Admission{

    // Class attributes
    public $id;
    public $user_id;
    public $survey_info;
    public $patient_info;
    public $relative_info;
    public $staff_id;
    public $admission_no;
    public $status;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_admission(){

        $sql = "INSERT INTO admission (user_id, survey_info, patient_info, relative_info, staff_id,  admission_no, status) VALUES 
        (:user_id, :survey_info, :patient_info, :relative_info, :staff_id, :admission_no, :status);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':survey_info', $this->survey_info);
        $query->bindParam(':patient_info', $this->patient_info);
        $query->bindParam(':relative_info', $this->relative_info);
        $query->bindParam(':staff_id', $this->staff_id);
        $query->bindParam(':admission_no', $this->admission_no);
        $query->bindParam(':status', $this->status);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_user_admission_survey_info($user_id, $admission_no){
        $sql = "SELECT * FROM survey_info WHERE survey_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission_patient_info($user_id, $admission_no){
        $sql = "SELECT * FROM patient_info WHERE patient_info_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission_relative_info($user_id, $admission_no){
        $sql = "SELECT * FROM relative_info WHERE relative_info_no = :admission_no AND user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':admission_no', $admission_no);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_user_admission($user_id){
        $sql = "SELECT admission.status, admission.admission_no, survey_info.inquire, patient_info.firstname, patient_info.lastname, relative_info.firstname AS r_firstname, relative_info.lastname AS r_lastname FROM admission INNER JOIN survey_info ON survey_info = survey_info.id  INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id WHERE admission.user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_assigned_staff_admission($user_id, $staff_id){
        $sql = "SELECT admission.id, admission.status, admission.admission_no, survey_info.inquire, patient_info.firstname AS p_firstname, patient_info.lastname AS p_lastname, patient_info.middlename AS p_middlename, relative_info.middlename AS r_middlename, relative_info.firstname AS r_firstname, relative_info.lastname AS r_lastname, users.fname, users.mname, users.lname FROM admission INNER JOIN survey_info ON survey_info = survey_info.id  INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id INNER JOIN staff ON staff_id = staff.id INNER JOIN users ON admission.user_id = users.id WHERE staff_id = :staff_id AND staff.user_id = :user_id AND admission.status = 'Pending';";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':staff_id', $staff_id);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function staff_admission_action($record_id){
        $sql = "UPDATE admission SET status = :status WHERE id = :id;";
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

    function show_admission_admin(){
        $sql = "SELECT admission.created_at,
        admission.id,
        admission.status,
        admission.admission_no,
        survey_info.inquire,
        patient_info.firstname AS p_firstname,
        patient_info.lastname AS p_lastname,
        patient_info.middlename AS p_middlename,
        patient_info.suffix AS p_suffix,
        patient_info.date_of_birth AS p_date_of_birth,
        patient_info.place_of_birth AS p_place_of_birth,
        patient_info.gender AS p_gender,
        patient_info.province AS p_province,
        patient_info.street AS p_street,
        patient_info.barangay AS p_barangay,
        patient_info.city AS p_city,
        patient_info.postal AS p_postal,
        patient_info.background_history AS p_background_history,
        patient_info.doctors_diagnosis AS p_doctors_diagnosis,
        patient_info.allergies AS p_allergies,
        patient_info.picture AS p_picture,
        relative_info.firstname AS r_firstname, relative_info.lastname AS r_lastname, users.fname, users.lname, users.mname, staff.firstname AS s_fname, staff.middlename AS s_mname, staff.lastname AS s_lname, staff.id AS staff_iden FROM admission INNER JOIN survey_info ON survey_info = survey_info.id INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id INNER JOIN users ON admission.user_id = users.id INNER JOIN staff ON admission.staff_id = staff.id WHERE admission.status != 'Accepted' AND admission.status != 'Canceled' ORDER BY created_at DESC;";

        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function accepted_admission_admin(){
        $sql = "SELECT admission.created_at,
        admission.id,
        admission.status,
        admission.admission_no,
        survey_info.inquire,
        patient_info.firstname AS p_firstname,
        patient_info.lastname AS p_lastname,
        patient_info.middlename AS p_middlename,
        users.fname,
        users.lname,
        users.mname,
        staff.firstname AS s_fname,
        staff.middlename AS s_mname,
        staff.lastname AS s_lname,
        staff.id AS staff_iden FROM admission INNER JOIN survey_info ON survey_info = survey_info.id INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id INNER JOIN users ON admission.user_id = users.id INNER JOIN staff ON admission.staff_id = staff.id WHERE admission.status = 'Accepted' ORDER BY created_at DESC;";

        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function canceled_admission_admin(){
        $sql = "SELECT admission.created_at,
        admission.id,
        admission.status,
        admission.admission_no,
        survey_info.inquire,
        patient_info.firstname AS p_firstname,
        patient_info.lastname AS p_lastname,
        patient_info.middlename AS p_middlename,
        users.fname,
        users.lname,
        users.mname,
        staff.firstname AS s_fname,
        staff.middlename AS s_mname,
        staff.lastname AS s_lname,
        staff.id AS staff_iden FROM admission INNER JOIN survey_info ON survey_info = survey_info.id INNER JOIN patient_info ON patient_info = patient_info.id INNER JOIN relative_info ON relative_info = relative_info.id INNER JOIN users ON admission.user_id = users.id INNER JOIN staff ON admission.staff_id = staff.id WHERE admission.status = 'Canceled' ORDER BY created_at DESC;";

        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function staff_assign_admission($record_id){
        $sql = "UPDATE admission SET status = :status, staff_id = :staff_id WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        $query->bindParam(':staff_id', $this->staff_id);
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