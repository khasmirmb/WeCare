<?php

class Database{
    private $host = 'localhost';
    private $username = 'u883397428_wecare';
    private $password = 'CYpVhA[^i3';
    private $database = 'u883397428_wecare';
    protected $connection;

    function connect(){
        try 
			{
				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", 
											$this->username, $this->password);
			} 
			catch (PDOException $e) 
			{
				echo "Connection error " . $e->getMessage();
			}
        return $this->connection;
    }

}

?>
