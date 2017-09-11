<?php
<<<<<<< HEAD
/**
 *@author: Kevin Nguyen
 *@version: 1.0
 *@date: 5.19.2017
 *This is for a Blog website. It takes in basic information of the new user to create an account
 */

    class Member
    {
        //vars
       protected $username;
       protected $email;
       protected $memberPassword;
       protected $profilepic;

       
       
        /**
        *@param $username - username
        *@param $email - email
        *@param $memberPassword - password
        *@param $profile_pic - path to the picture
        */
        function __construct($username, $email, $memberPassword, $profilepic)
        {
            $this->username = $username;
            $this->email = $email;
            $this->memberPassword = $memberPassword;
            $this->profilepic = $profilepic;


        }
        
        /**
         *@param - takes in a String first name
         */
        function setUsername($username)
            {
                $this->username = $username;
            }
    
            /**
             *@return returns the user first name
             */
            function getUsername()
            {
                return $this->username;
            }
            
                    /**
         *@param - takes in a String first name
         */
            function setEmail($email)
            {
                $this->email = $email;
            }
    
            /**
             *@return returns the user first name
             */
            function getEmail()
            {
                return $this->email;
            }
            
                    /**
         *@param - takes in a String first name
         */
            function setPassword($memberPassword)
            {
                $this->memberPassword = $memberPassword;
            }
    
            /**
             *@return returns the user first name
             */
            function getPassword()
            {
                return $this->memberPassword;
            }
            
                    /**
         *@param - takes in a String first name
         */
            function setProfilePic($profilepic)
            {
                $this->profilepic = $profilepic;
            }
    
            /**
             *@return returns the user first name
             */
            function getProfilePic()
            {
                return $this->profilepic;
            }
            
            
            
    }
=======

/**
 * The Member class represents the members joining the site
 *
 * The memeber class has a username, email, password, image,
 * bio.
 * @author Brian Saylor <bsaylor3@mail.greenriver.edu>
 * @copyright 2017
 */
    Class Member
    {
        
        protected $username;
        protected $email;
        protected $password;
        protected $image;
        
        /**
        * Constructor that creates the basics of a member
        * @param $username
        * @param $email
        * @param $password
        * @param $image
        * @param $bio
        *
        * @return void
        */
        function __construct($username, $email, $password, $image)
        {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->image = $image;

        }
        /**
        * Sets username
        * @param $username username
        *
        * @return void
        */
        function setUsername($username)
        {
            $this->username = $username;
            
        }
        /**
        * Gets username
        *
        * @return $username
        */
        function getUsername()
        {
            return $this->username;
        }
        /**
        * Sets email
        * @param $email email
        *
        * @return void
        */
        function setEmail($email)
        {
            $this->email = $email;
        }
        /**
        * Gets email
        *
        * @return $email
        */
        function getEmail()
        {
            return $this->email;
        }
        /**
        * Sets password
        * @param $password password
        *
        * @return void
        */
        function setPassword($password)
        {
            $this->password = $password; 
        }
        /**
        * Gets password
        *
        * @return $password
        */
        function getPassword()
        {
            return $this->password;
        }
        /**
        * Sets image
        * @param $image
        *
        * @return void
        */
        function setImage($image)
        {
            $this->image = $image;
        }
        /**
        * Gets image
        *
        * @return $image
        */
        function getImage()
        {
            return $this->image;
        }
    }

>>>>>>> fbe9d1fddc2a516aa924b444538ca5f92e57c9b6
?>