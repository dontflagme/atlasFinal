<?php
    /**
     * Provides access to blogs in our database
     * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
     * @version 1.0
     *

        
        CREATE TABLE joined
        (  
        event_id int NOT NULL,
        member_id int NOT NULL
        );
        
        INSERT INTO joined (event_id, member_id) VALUES (1, 2)
     */
    
    //CONNECT
    class JoinedDB
    {
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
        
         
        //CREATE
         
        /**
         * Adds a blog to the collection of blog in the db.
         *
         * @access public
         * @param string $member_id the id of the blog
         * @param string $title the of the blog
         * @param string $blog_entry text for the blog
         *
         * @return true if the insert was successful, otherwise false
         */
        function addJoined($member_id, $event_id)
        {
            $insert = 'INSERT INTO joined (member_id, event_id) VALUES (:member_id, :event_id)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':member_id', $member_id, PDO::PARAM_STR);
            $statement->bindValue(':event_id', $event_id, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
         
        /**
         * Returns blogs that has the given member_id.
         *
         * @access public
         * @param int $id the id of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function joinedByEventsId($id)
        {
            $select = 'SELECT event_id, member_id FROM joined WHERE event_id=:id';
            
            $results = $this->_pdo->prepare($select);
            $results->bindValue(':id', $id, PDO::PARAM_INT);
            $results->execute();
             
            $resultsArray = array();
             
            //map each pet id to a row of data for that pet
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['event_id']] = $row;
            }
             
            return $resultsArray;
        }
}