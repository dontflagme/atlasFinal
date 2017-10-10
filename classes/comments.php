<?php


/**
 * The blog class represents the blog made on the site
 *
 * The blog class has a title and blog entry that are made
 * to be posted on the site
 * @author Brian Saylor <bsaylor3@mail.greenriver.edu
 * @copyright 2017
 */
    Class Comments
    {
        protected $member_id;
        protected $title;
        protected $event_details;
        protected $date;
        protected $time;

        /**
        * Constructor that creates the basics of a blog
        * @param $blog_entry hold text for blog entry
        * @param $title title of the blog
        *
        * @return void
        */
        
        function __construct($member_id, $title, $event_details, $date, $time)
        {
            $this->member_id = $member_id;
            $this->title = $title;
            $this->event_details = $event_details;
            $this->date = $date;
            $this->time = $time;
        }
        /**
        * Gets member_id
        * @param $member_id member_id
        *
        * @return $member_id
        */
        function getMember_id($member_id)
        {
            return $this->member_id;
            
        }
        /**
        * Sets title
        * @param $title title
        *
        * @return void
        */
        function setTitle($title)
        {
            $this->title = $title;
            
        }
        /**
        * Gets title
        *
        * @return $title
        */
        function getTitle()
        {
            return $this->title;
        }
        /**
        * Sets event_details
        * @param $event_details event_details
        *
        * @return void
        */
        function setEventDetails($event_details)
        {
            $this->event_details = $event_details;
            
        }
        /**
        * Gets event_details
        *
        * @return $event_details
        */
        function getEventDetails()
        {
            return $this->event_details;
        }
        /**
        * Sets date
        * @param $date date
        *
        * @return void
        */
        function setDate($date)
        {
            $this->date = $date;
            
        }
        /**
        * Gets date
        *
        * @return $date
        */
        function getDate()
        {
            return $this->date;
        }
        /**
        * Sets time
        * @param $time time
        *
        * @return void
        */
        function setTime($time)
        {
            $this->time = $time;
            
        }
        /**
        * Gets time
        *
        * @return $time
        */
        function getTime()
        {
            return $this->time;
        }
    }
?>