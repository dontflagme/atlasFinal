<?php

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

?>