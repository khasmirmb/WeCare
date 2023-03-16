<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Monitoring{

    // Class attributes Patient
    public $id;
    public $patient_id;
    public $staff_id;
    public $user_id;
    public $firstname;
    public $middlename;
    public $lastname;
    public $suffix;
    public $date_of_birth;
    public $place_of_birth;
    public $gender;
    public $province;
    public $street;
    public $barangay;
    public $city;
    public $postal;
    public $background_history;
    public $doctors_diagnosis;
    public $allergies;
    public $picture;
    public $patient_info_no;
    public $relative_id;
    public $room;
    public $relationship;
    public $image;
    // Moitoring Inputs
    public $health_status;
    public $detail_bp;
    public $detail_con1;
    public $detail_con2;
    public $detail_con3;
    public $detail_lastchecked;
    public $detail_datechecked;
    public $detail_observation;
    public $app_detail_time_start;
    public $app_detail_time_end;
    public $app_detail_date;
    public $app_detail_problem;
    // Staff Data
    public $s_fname;
    public $s_mname;
    public $s_lname;
    public $s_email;
    public $s_phone;
    public $s_image;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

    function get_relative_monitoring($relative_id, $user_id){
        $sql = "SELECT monitoring.id, patient.fname, patient.mname, patient.lname, relative.relationship, staff.firstname, staff.middlename, staff.lastname, patient.status, patient.room FROM monitoring
        INNER JOIN patient ON monitoring.patient_id = patient.id
        INNER JOIN relative ON monitoring.relative_id = relative.id
        INNER JOIN staff ON monitoring.staff_id = staff.id 
        WHERE relative.id = :id AND relative.user_id = :user_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $relative_id);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_info($id){
        $sql = "SELECT monitoring.id,
        patient.id AS p_id,
        patient.fname AS p_fname,
        patient.mname AS p_mname,
        patient.lname AS p_lname,
        patient.suffix AS p_suffix,
        patient.date_birth AS p_bday,
        patient.gender AS p_gender,
        patient.image AS p_image,
        relative.relationship,
        staff.id AS s_id,
        patient.status, 
        patient.room FROM monitoring
        INNER JOIN monitoring_input ON monitoring.input_id = monitoring_input.id
        INNER JOIN patient ON monitoring.patient_id = patient.id
        INNER JOIN relative ON monitoring.relative_id = relative.id
        INNER JOIN staff ON monitoring.staff_id = staff.id 
        WHERE monitoring.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function fetch_monitoring_input_details_patient($patient_id){
        $sql = "SELECT monitoring_input.id,
        monitoring_input.health_status,
        monitoring_detail.blood_pressure AS detail_bp,
        monitoring_detail.condition_1 AS detail_con1,
        monitoring_detail.condition_2 AS detail_con2,
        monitoring_detail.condition_3 AS detail_con3,
        monitoring_detail.last_checked AS detail_lastchecked,
        monitoring_detail.checked_date AS detail_datechecked,
        monitoring_detail.observation AS detail_observation,
        monitoring_app_detail.time_start AS app_detail_time_start,
        monitoring_app_detail.time_end AS app_detail_time_end,
        monitoring_app_detail.date AS app_detail_date,
        monitoring_app_detail.current_problem AS app_detail_problem FROM monitoring_input
        INNER JOIN monitoring_detail ON monitoring_input.detail_id = monitoring_detail.id
        INNER JOIN monitoring_app_detail ON monitoring_input.app_detail_id = monitoring_app_detail.id
        WHERE monitoring_input.patient_id = :id AND monitoring_detail.patient_id = :id AND monitoring_app_detail.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function fetch_monitoring_records_patient($patient_id){
        $sql = "SELECT monitoring_report.report_type AS report_type,
        monitoring_report.date AS report_date,
        monitoring_report.details AS report_details FROM monitoring_report
        WHERE monitoring_report.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_medecine_patient($patient_id){
        $sql = "SELECT monitoring_medecine.name AS medecine_name,
        monitoring_medecine.dose AS medecine_dose,
        monitoring_medecine.status AS medecine_status,
        monitoring_medecine.note AS medecine_note,
        monitoring_medecine.started_at AS medecine_started FROM monitoring_medecine
        WHERE monitoring_medecine.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_nutrition_patient($patient_id){
        $sql = "SELECT monitoring_nutrition.name AS nutrition_name,
        monitoring_nutrition.type AS nutrition_type,
        monitoring_nutrition.time AS nutrition_time,
        monitoring_nutrition.status AS nutrition_status,
        monitoring_nutrition.note AS nutrition_note FROM monitoring_nutrition
        WHERE monitoring_nutrition.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_photo_update_patient($patient_id){
        $sql = "SELECT monitoring_photo_update.image AS photo_image,
        monitoring_photo_update.title AS photo_title,
        monitoring_photo_update.detail AS photo_detail FROM monitoring_photo_update
        WHERE monitoring_photo_update.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_hygiene_patient($patient_id){
        $sql = "SELECT monitoring_hyiegne.name AS hyiegne_name,
        monitoring_hyiegne.time AS hyiegne_time,
        monitoring_hyiegne.status AS hyiegne_status,
        monitoring_hyiegne.note AS hyiegne_note FROM monitoring_hyiegne
        WHERE monitoring_hyiegne.patient_id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_monitoring_staff_info($staff_id){
        $sql = "SELECT staff.firstname AS s_fname,
        staff.middlename AS s_mname,
        staff.lastname AS s_lname,
        users.email AS s_email,
        users.image AS s_image,
        users.phone AS s_phone FROM staff
        INNER JOIN users ON staff.user_id = users.id WHERE staff.id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $staff_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

}


?>