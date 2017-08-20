<?php


/**
 * The PremiumMember class represents the PremiumMembers joining the site
 *
 * The PremiumMemeber class has a two lists that allow you
 * to list what you are interested in
 * @author Brian Saylor <bsaylor3@mail.greenriver.edu
 * @copyright 2017
 */
    Class Joined
    {
        
        protected $event_id;
        protected $member_id;
        
        /**
        * Gets member_id
        * @param $member_id member_id
        *
        * @return $member_id
        */
        function setMember_id($member_id)
        {
            $this->member_id = $member_id;
            
        }
        /**
        * Gets member_id
        * @param $member_id member_id
        *
        * @return $member_id
        */
        function getMember_id()
        {
            return $this->member_id;
            
        }
        /**
        * Gets event_id
        * @param $event_id event_id
        *
        * @return $event_id
        */
        function setEvent_id($event_id)
        {
            $this->event_id = $event_id;
            
        }
        /**
        * Gets event_id
        * @param $event_id event_id
        *
        * @return $event_id
        */
        function getEvent_id()
        {
            return $this->event_id;
            
        }
    }
?>