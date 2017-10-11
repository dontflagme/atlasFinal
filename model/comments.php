<?php

class CommentDB{
    
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
        /**
         * Adds a event to the collection of event in the db.
         *
         * test entries
         * INSERT INTO comments (comment, userID, profilePicture, event_id) VALUES ("Test Comment", "39", "IMG_0885.PNG", "23")
         *
         * @access public
         * @param string $member_id the id of the blog
         * @param string $title the of the blog
         * @param string $blog_entry text for the blog
         *
         * @return true if the insert was successful, otherwise false
         */
        function addComment($comment, $userId, $profilePicture, $event_id)
        {
            $insert = 'INSERT INTO comments (comment, userId, profilePicture, event_id) VALUES (:comment, :userId, :profilePicture, :event_id)';

             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':comment', $comment, PDO::PARAM_STR);
            $statement->bindValue(':userId', $userId, PDO::PARAM_STR);
            $statement->bindValue(':profilePicture', $profilePicture, PDO::PARAM_STR);
            $statement->bindValue(':event_id', $event_id, PDO::PARAM_STR);

            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
        
        /**
         * Returns blogs that has the given blog_id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         *
         *events sql statement SELECT events.event_id, events.member_id, events.title, events.event_details, events.date, events.time, events.firstname, events.lastname, events.postersProfilePicture, events.rating FROM joined LEFT JOIN events ON events.member_id = joined.member_id
         *joined sql statement SELECT events.event_id, events.member_id, events.title, events.event_details, events.date, events.time, events.firstname, events.lastname, events.postersProfilePicture, events.rating FROM events, joined WHERE events.event_id = joined.event_id
         *
         *IT WORKS
            (SELECT events.event_id, events.member_id, events.title, events.event_details, events.date, events.time, events.firstname, events.lastname, events.postersProfilePicture, events.rating FROM events, joined WHERE events.event_id = joined.event_id)
            UNION
            (SELECT events.event_id, events.member_id, events.title, events.event_details, events.date, events.time, events.firstname, events.lastname, events.postersProfilePicture, events.rating FROM joined LEFT JOIN events ON events.member_id = joined.member_id)
         * 
         */
        function commentsByEventId($id)
        {

            $select = 'SELECT comment, userId, profilePicture,event_id FROM comments WHERE event_id=:id';
            
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
         * updates comment that has the given id.
         *
         * @access public
         * @param int $id the id of the comment
         *
         */
        function removeComment($id)
        {
            $select = 'DELETE FROM comments WHERE comment_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            //return $this->_pdo->lastInsertId();
        }
}