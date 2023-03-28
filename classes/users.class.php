<?php

require_once 'database.php';

// Declare the class Users
class Users{

    // Class attributes
    public $id;
    public $unique_id;
    public $firstname;
    public $middlename;
    public $lastname;
    public $email;
    public $phone;
    public $password;
    public $verification_status;
    public $otp;
    public $type;
    public $image;
    

     // protected property to store the database connection
    protected $db;

     // Class constructor to initialize the database connection
    function __construct()
    {
        $this->db = new Database();
    }

    // Method to log a user in
    function sign_in(){

         // SQL statement to retrieve the user with the matching email and password
        $sql = "SELECT * FROM users WHERE BINARY email = :email AND BINARY password = :password;";

        // Prepare the SQL statement for execution
        $query=$this->db->connect()->prepare($sql);

        // Bind the parameters to the SQL statement
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);

         // Execute the SQL statement
        if($query->execute()){
             // Check if the user was found
            if($query->rowCount()>0){
                // Return true if the user was found
                return true;
            }
        }
        // Return false if the user was not found
        return false;
    }

    // Method to retrieve the user's account information
    function get_user_info($id=0){
        // Check if the id parameter was provided
        if($id == 0){
            // SQL statement to retrieve the user with the matching email and password
            $sql = "SELECT * FROM users WHERE BINARY email = :email AND BINARY password = :password;";

            // Prepare the SQL statement for execution
            $query=$this->db->connect()->prepare($sql);

            // Bind the parameters to the SQL statement
            $query->bindParam(':email', $this->email);
            $query->bindParam(':password', $this->password);
        }else{
            // SQL statement to retrieve the user with the matching id
            $sql = "SELECT * FROM users WHERE id = :id;";

             // Prepare the SQL statement for execution
            $query=$this->db->connect()->prepare($sql);

            // Bind the parameter to the SQL statement
            $query->bindParam(':id', $id);
        }
         // Execute the SQL statement
        if($query->execute()){
            // Fetch the data
            $data = $query->fetchAll();
        }
        // Return the data
        return $data;
    }

    function show_users_admin(){
        $sql = "SELECT * FROM users WHERE type != 'staff' AND type != 'admin';";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function fetch_user_information($user_id){
        $sql = "SELECT * FROM users WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $user_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function check_for_duplicate_email($email){
        $sql = "SELECT email FROM users WHERE email = :email;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $email);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function add_user(){
        // SQL statement to add user
        $sql = "INSERT INTO users (unique_id, fname, lname, mname, email, phone, image, password, otp, verification_status, type) VALUES 
        (:unique_id, :firstname, :lastname, :middlename, :email, :phone, :image, :password, :otp, :verification_status, :type);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':unique_id', $this->unique_id);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':phone', $this->phone);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':image', $this->image);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':otp', $this->otp);
        $query->bindParam(':verification_status', $this->verification_status);
        $query->bindParam(':type', $this->type);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch_user_email($email){
        $sql = "SELECT * FROM users WHERE email = :email;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $email);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }


}

?>