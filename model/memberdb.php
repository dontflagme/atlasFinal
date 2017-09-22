<?php
    /**
     * Provides access to blogs in our database
     * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
     * @version 1.0
     *

        
        CREATE TABLE atlas_members
        (
        member_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(255),
        firstname varchar(255),
        lastname varchar(255),
        email varchar(255),
        password varchar(255),
        image varchar(255)
        );
     */
    
    //CONNECT
    class MemberDB
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
         * adds a members to the database collection.
         *
         * test entries
         * 
         * INSERT INTO atlas_members (username, firstname, lastname, email, password, image) VALUES ("Zimja", "Brian", "Saylor", "zimjajenkins@gmail.com", "1234", "test")
         * INSERT INTO atlas_members (username, firstname, lastname, email, password, image) VALUES ("Danceman", "Kevin", "Nguyen", "yahoo@gmail.com", "1234", "kevin image test")
         * INSERT INTO atlas_members (username, firstname, lastname, email, password, image) VALUES ("Anitawhoo", "Anita", "Hu","thisisaemail@gmail.com", "1234", "anita image test")
         * 
         *
         * @access public
         *
         * @return the last members id
         */



        function addMember($username, $firstname, $lastname, $email, $password, $image)
        {
            $insert = 'INSERT INTO atlas_members (username, firstname, lastname, email, password, image) VALUES (:username, :firstname, :lastname, :email, :password, :image)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->bindValue(':image', $image, PDO::PARAM_STR);
            
            $statement->execute();
            
            //Return ID of inserted row
            return $this->_pdo->lastInsertId();
        }
         
        //READ
        /**
         * Returns all members in the database collection.
         *
         * @access public
         *
         * @return an associative array of members indexed by id
         */
        function allMembers()
        {

            $select = 'SELECT member_id, username, firstname, lastname email, password, image FROM atlas_members ORDER BY member_id';

            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            //map each pet id to a row of data for that pet
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['member_id']] = $row;
            }
             
            return $resultsArray;
        }
         
        /**
         * Returns a member that has the given id.
         *
         * @access public
         * @param int $id the id of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function memberById($id)
        {

            $select = 'SELECT member_id, username, firstname, lastname, email, password, image FROM atlas_members WHERE member_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * Returns a member that has the given id.
         *
         * @access public
         * @param int $id the id of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */

        function memberByUsername($username)
        {
            $select = 'SELECT member_id, username, firstname, lastname, email, password, image FROM atlas_members WHERE username=:username';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':username', $username, PDO::PARAM_INT);
            
            
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**

         * Returns a member that has the given email.
         *
         * @access public
         * @param String $email the email of the member
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function memberByEmail($email)
        {
            $select = 'SELECT member_id, username, firstname, lastname, email, password, image FROM atlas_members WHERE email=:email';

            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':email', $email, PDO::PARAM_INT);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * Returns true if the name is used by a member in the database.
         *
         * @access public
         * @param string $name the name of the member to look for
         *
         * @return true if the name already exists, otherwise false
         */   
        function memberUserExists($email, $password)
        {            
            $select = 'SELECT member_id, username, firstname, lastname, email, password, image FROM atlas_members WHERE email=:email && password=:password';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            
            return !empty($row);
             
        }
         /** Returns true if the name is used by a member in the database.
         *
         * @access public
         * @param string $name the name of the member to look for
         *
         * @return true if the name already exists, otherwise false
         */   
        function memberEmailExists($email, $password)
        {            
            $select = 'SELECT member_id, username, firstname, lastname, email, password, image FROM atlas_members WHERE email=:email && password=:password';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->execute();
             
            $row = $statement->fetch(PDO::FETCH_ASSOC);

            return !empty($row);
        }
    }