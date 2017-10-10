<?php

class Comments{
    
            private $_pdo;
        
        function __construct()
        {
            //Require configuration file
            require_once '/home/knguyen/config.php';
            
            try {
                //Establish database connection
                $this->_pdo = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
                
                //Keep the connection open for reuse to improve performance
                $this->_pdo->setAttribute( PDO::ATTR_PERSISTENT, true);
                
                //Throw an exception whenever a database error occurs
                $this->_pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch (PDOException $e) {
                die( "Error!: " . $e->getMessage());
            }
        }
    public static function getComments()
    {
        
    }
    
    public static function insert($comment_txt, $userId)
    {
        //Insert data to the database
        $std = new stdClass();
        $std->comment_id = null;
        $std->comment = $comment_txt;
        $std->userId = (int)$userId;
        
        return $std;
    }
    
    public static function update($data)
    {
        
    }
    
    public static function delete($data)
    {
        
    }
}