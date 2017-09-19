<?php

/**
 *@author: Kevin Nguyen
 *@version: 1.0
 *@date: 5.19.2017
 *This is for a Blog website. It takes in basic information of the new user to create an account
 */

    Class Member
    {
        
        //vars
       protected $username;
       protected $firstName;
       protected $lastName;
       protected $email;
       protected $password;
       protected $profilePicture;
        
        /**
        *@param $username - username
        *@param $email - email
        *@param $memberPassword - password
        *@param $profile_pic - path to the picture
        */
        function __construct($username, $firstName, $lastName, $email, $password, $profilePicture)
        {
            $this->username = $username;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->profilePicture = $profilePicture;


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
            function setFirst($firstName)
            {
                $this->firstName = $firstName;
            }
    
            /**
             *@return returns the user first name
             */
            function getFirst()
            {
                return $this->firstName;
            }
                    /**
         *@param - takes in a String first name
         */
            function setLast($lastName)
            {
                $this->lastName = $lastName;
            }
    
            /**
             *@return returns the user first name
             */
            function getLast()
            {
                return $this->lastName;
            }
            
                    /**
         *@param - takes in a String first name
         */
            function setPassword($password)
            {
                $this->password = $password;
            }
    
            /**
             *@return returns the user first name
             */
            function getPassword()
            {
                return $this->password;
            }
            
                    /**
         *@param - takes in a String first name
         */
            function setProfilePicture($profilePicture)
            {
                $this->profilePicture = $profilePicture;
            }
    
            /**
             *@return returns the user first name
             */
            function getProfilePicture()
            {
                return $this->profilePicture;
            }
    }

?>