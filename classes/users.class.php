<?php

require_once 'database.php';

// Declare the class Users
class Users{

    // Class attributes
    public $id;
    public $email;
    public $password;
    public $type;

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

}

?>