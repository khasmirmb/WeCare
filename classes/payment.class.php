<?php

// Not Finalize
require_once 'database.php';

// Declare Class
class Payment{

    // Class attributes
    public $id;
    public $patient_id;
    public $date;
    public $services_total;
    public $services;
    public $fee_total;
    public $total_amount;
    public $status;
    public $payment_method;
    public $payment_date;
    public $receipt;
    public $payment_no;
    public $type;
    public $quantity;
    public $amount;

     // protected property to store the database connection
     protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

     //Methods
     function add_payment(){
        $sql = "INSERT INTO payment (patient_id, date, services, services_total, fee_total, total_amount, payment_no, status) VALUES 
        (:patient_id, :date, :services,:services_total, :fee_total, :total_amount, :payment_no, :status);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':date', $this->date);
        $query->bindParam(':services', $this->services);
        $query->bindParam(':services_total', $this->services_total);
        $query->bindParam(':fee_total', $this->fee_total);
        $query->bindParam(':total_amount', $this->total_amount);
        $query->bindParam(':payment_no', $this->payment_no);
        $query->bindParam(':status', $this->status);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show_payment_list_by_patient($patient_id){
        $sql = "SELECT patient.id AS p_id,
        fname,
        mname,
        lname,
        suffix,
        payment.id AS pay_id,
        payment.date,
        payment.services_total,
        payment.fee_total,
        payment.total_amount,
        payment.status,
        payment.created_at FROM payment INNER JOIN patient ON payment.patient_id = patient.id WHERE patient_id = :patient_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $patient_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_payment_list_by_relative($user_id){
        $sql = "SELECT payment.id,
        fname,
        mname,
        lname,
        suffix,
        payment.date,
        payment.services_total,
        payment.fee_total,
        payment.total_amount,
        payment.status,
        payment.created_at FROM payment INNER JOIN patient ON payment.patient_id = patient.id INNER JOIN relative ON relative.patient_id = patient.id WHERE relative.user_id = :user_id ORDER BY payment.status ASC, payment.created_at ASC;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_recent_due_date_by_user($user_id){
        $sql = "SELECT MAX(end_due) AS recent_date FROM payment INNER JOIN relative ON relative.patient_id = payment.patient_id WHERE relative.user_id = :user_id AND status = 'Not Paid' LIMIT 1;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_recent_total_by_user($user_id){
        $sql = "SELECT SUM(total_amount) AS total FROM payment INNER JOIN relative ON relative.patient_id = payment.patient_id WHERE relative.user_id = :user_id AND status = 'Not Paid' LIMIT 1;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $user_id);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_payment_relative($record_id){
        $sql = "SELECT * FROM payment WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function paid_payment($id){
        $sql = "UPDATE payment SET payment_method = :payment_method, payment_date = :payment_date, status = :status, receipt = :receipt WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':payment_method', $this->payment_method);
        $query->bindParam(':payment_date', $this->payment_date);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':receipt', $this->receipt);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function add_payment_fee(){
        $sql = "INSERT INTO payment_fee (payment_no, patient_id, type, quantity, amount) VALUES 
        (:payment_no, :patient_id, :type, :quantity, :amount);";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':patient_id', $this->patient_id);
        $query->bindParam(':payment_no', $this->payment_no);
        $query->bindParam(':type', $this->type);
        $query->bindParam(':quantity', $this->quantity);
        $query->bindParam(':amount', $this->amount);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

}


?>