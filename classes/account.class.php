<?php

require_once 'database.php';

class Users{

    public $id;
    public $email;
    public $firstname;
    public $lastname;
    public $gender;
    public $picture;
    public $verifiedEmail;
    public $type;
    public $password;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function sign_in(){
        $sql = "SELECT * FROM users WHERE BINARY email = :email AND BINARY password = :password;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    function get_account_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM users WHERE BINARY email = :email;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->email);
        }else{
            $sql = "SELECT * FROM users WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
        }
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function add_user(){
        $sql = "INSERT INTO users (email, firstname, lastname, gender, picture, verifiedEmail, type) VALUES
        (:email, :firstname, :lastname, :gender, :picture, :verifiedEmail, :type);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':gender', $this->gender);
        $query->bindParam(':picture', $this->picture);
        $query->bindParam(':verifiedEmail', $this->verifiedEmail);
        $query->bindParam(':type', $this->type);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}

?>