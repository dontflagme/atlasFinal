<?php
    /**
     * Provides access to blogs in our database
     * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
     * @version 1.0
     *

        
        CREATE TABLE blogs
        (  
        blog_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        member_id int NOT NULL,
        title varchar(255),
        blog_entry varchar(1000),
        date_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
        );
     */
    
    //CONNECT
    class BlogDB
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
         * Adds a blog to the collection of blog in the db.
         *
         * @access public
         * @param string $member_id the id of the blog
         * @param string $title the of the blog
         * @param string $blog_entry text for the blog
         *
         * @return true if the insert was successful, otherwise false
         */
        function addBlog($member_id, $title, $blog_entry)
        {
            $insert = 'INSERT INTO blogs (member_id, title, blog_entry) VALUES (:member_id, :title, :blog_entry)';
             
            $statement = $this->_pdo->prepare($insert);
            $statement->bindValue(':member_id', $member_id, PDO::PARAM_STR);
            $statement->bindValue(':title', $title, PDO::PARAM_STR);
            $statement->bindValue(':blog_entry', $blog_entry, PDO::PARAM_STR);
            
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
        function blogsByMemberId($id)
        {
            $select = 'SELECT blog_id, member_id, title, blog_entry, date_added FROM blogs WHERE member_id=:id ORDER BY blog_id';
            
            $results = $this->_pdo->prepare($select);
            $results->bindValue(':id', $id, PDO::PARAM_INT);
            $results->execute();
             
            $resultsArray = array();
             
            //map each pet id to a row of data for that pet
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['blog_id']] = $row;
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
        function blogsByBlogId($id)
        {
            $select = 'SELECT blog_id, member_id, title, blog_entry, date_added FROM blogs WHERE blog_id=:id';
            
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * Returns the most recent blog that has the given id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function mostRecentBlog($id)
        {
            $select = 'SELECT blog_id, member_id, title, blog_entry, date_added FROM blogs WHERE member_id=:id ORDER BY blog_id DESC LIMIT 1';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        
        /**
         * Returns the most recent blog that has the given id.
         *
         * @access public
         * @param int $id the id of the blog
         *
         * @return an associative array of member attributes, or false if
         * the member was not found
         */
        function mostRecentBlogAll()
        {
            $select = 'SELECT blogs.blog_id, blogs.title, blogs.blog_entry, members.username, members.member_id, members.bio FROM blogs INNER JOIN members ON blogs.member_id=members.member_id ORDER BY blogs.blog_id';
             
            $results = $this->_pdo->query($select);
             
            $resultsArray = array();
             
            //map each member id to a row of data for that pet
            while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                $resultsArray[$row['member_id']] = $row;
            }
             
            return $resultsArray;
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
        function updateBlog($id, $title, $blog_entry)
        {
            $select = 'UPDATE blogs SET title=:title, blog_entry=:blog_entry WHERE blog_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->bindValue(':title', $title, PDO::PARAM_STR);
            $statement->bindValue(':blog_entry', $blog_entry, PDO::PARAM_STR);
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
        function removeBlog($id)
        {
            $select = 'DELETE FROM blogs WHERE blog_id=:id';
             
            $statement = $this->_pdo->prepare($select);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement->execute();
             
            //return $this->_pdo->lastInsertId();
        }
}