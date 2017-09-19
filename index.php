<?php

/**
 *@author: Kevin Nguyen
 *@version: 1.0
 *@date: 4.23.2017
 *This is for a blog website. It takes in basic information of the new user.
 */
//Require the autoload file
require_once('vendor/autoload.php');
session_start();

require("../../../atlas_config.php");
    
    try{
        //instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }  
//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);




//calling the DB classes
$eventsDB = new EventsDB();
$memberDB = new MemberDB();
$joinedDB = new JoinedDB();


                  //Define a default route
                    $f3->route('GET /', function($f3) {
                        $events =  $GLOBALS['eventsDB']->allEvents();
                        $f3->set('events', $events);
                      echo Template::instance()->render('pages/Frontend/explore.html');
                     });
                    
                    
                    
                                      //Define a default route
                    $f3->route('GET /homelogin', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/home_backend.html');
                     });
                    
                    //This is used to create a new user.
                    //Takes the information and adds to members database
                    $f3->route('POST /registerDB', function($f3) {
                      $_SESSION['firstName'] = $_POST['firstname'];
                      $_SESSION['lastName'] = $_POST['lastName'];
                      $_SESSION['email'] = $_POST['email'];
                      $_SESSION['password'] = $_POST['password'];
                      $_SESSION['profilePicture'] = $_POST['profilePicture'];
                      $_SESSION['username'] = $_POST['username'];
                      
                      $firstName = $_SESSION['firstName'];
                      $lastName = $_SESSION['lastName'];
                      $email = $_SESSION['email'];
                      $username = $_SESSION['username'];
                      $password = $_SESSION['password'];
                      $profilePicture = $_SESSION['profilePicture'];
                      
                      $member = new Member($username, $firstName, $lastName, $email, $password, $profilePicture);
                      
                      $_SESSION['member'] = $member;
                      
                      $GLOBALS['memberDB']->addMember($username, $firstName, $lastName, $email, $password, $profilePicture);
                      
                      $f3->reroute('/homelogin');
                      
                     
                     });
                    
                    $f3->route('GET /viewevents', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/viewEvents.html');
                     });
                    
                                      //Define a default route
                    $f3->route('GET /explorebackend', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/explore.html');
                     });
                    
                    $f3->route('GET /addidea', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/addIdea.html');
                     });
                    
           
$f3->run();        
?>