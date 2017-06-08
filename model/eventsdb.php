<?php
    /**
     * Provides access to blogs in our database
     * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
     * @version 1.0
     *

        
        CREATE TABLE events
        (  
        event_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        member_id int NOT NULL,
        title varchar(255),
        event_details varchar(500),
        date DATE,
        time TIME
        );
     */
    
    //CONNECT
    class EventsDB
    {
        private $_pdo;
        
        function __construct()
        {
            //Require configuration file
            require_once '/home/knguyen/atlas_config.php';
            
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
         * Adds a event to the collection of event in the db.
         *
         * @access public
         * @param string $member_id the id of the blog
         * @param string $title the of the blog
         * @param string $blog_entry text for the blog
         *
         * @return true if the insert was successful, otherwise false
         */
        function addEvent($member_id, $title, $event_details, $date, $time)
        {
            $insert = 'INSERT INTO events (member_id, title, event_details, date, time) VALUES (:member_id, :title, :event_details, :date, :time)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':member_id', $member_id, PDO::PARAM_STR);
            $statement->bindValue(':title', $title, PDO::PARAM_STR);
            $statement->bindValue(':event_details', $event_details, PDO::PARAM_STR);
            $statement->bindValue(':date', $date, PDO::PARAM_STR);
            $statement->bindValue(':time', $time, PDO::PARAM_STR);
            
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
        function eventsByMemberId($id)
        {
            $select = 'SELECT event_id, member_id, title, event_details, date, time FROM events WHERE member_id=:id ORDER BY event_id';
            
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
        
        /**
         * Returns blogs that has the given blog_id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function eventsByEventId($id)
        {
            $select = 'SELECT event_id, member_id, title, , event_details, date, time FROM events WHERE event_id=:id';
            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * updates blog that has the given id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function updateEvent($id, $title, $event_details)
        {
            $select = 'UPDATE events SET title=:title, event_details=:event_details, date=:date, time=:time WHERE event_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->bindValue(':title', $title, PDO::PARAM_STR);
            $statement->bindValue(':event_details', $event_details, PDO::PARAM_STR);
            $statement->bindValue(':date', $date, PDO::PARAM_INT);
            $statement->bindValue(':time', $time, PDO::PARAM_STR);
            $statement->execute();
             
            //return $this->_pdo->lastInsertId();
        }
        
        /**
         * updates blog that has the given id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function removeEvent($id)
        {
            $select = 'DELETE FROM events WHERE event_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            //return $this->_pdo->lastInsertId();
        }
}