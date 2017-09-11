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
//$eventsDB = new EventDB();
//$memberDB = new MemberDB();
//$joinedDB = new JoinedDB();


  
    //$eventDB = new EventsDB();
    //$memberDB = new MemberDB();
    //$joinedDB = new JoinedDB();


                  //Define a default route
                    $f3->route('GET /', function($f3) {
                        $events =  $GLOBALS['$eventDB']->allEvents();
                        $f3->set('events', $events);
                      echo Template::instance()->render('pages/Frontend/explore.html');
                      
                     });
                    
                    
                  //Define a default route
                    $f3->route('GET /logout', function($f3) {
                      
                      echo Template::instance()->render('pages/Frontend/explore.html');
                     });
                    
                                      //Define a default route
                    $f3->route('GET /homelogin', function($f3) {
                      
                      echo Template::instance()->render('pages/backend/home_backend.html');
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
                    
                    //takes user register infor
                    $f3->route('POST /registerDB', function($f3) {
                      $fname = $_POST['firstname'];
                      $lname = $_POST['lastname'];
                      $email = $_POST['email'];
                      $password = $_POST['password'];
                      
                      if(preg_match('~[0-9]~', $fname) || preg_match('~[0-9]~', $lname) || preg_match('/[^a-zA-Z]+/', $fname) || preg_match('/[^a-zA-Z]+/', $lname)){
                             echo "First name or last name can not contain numbers or special characters, silly!";
                      }
                      
                      else{
                        echo "Member created.";
                      }
                      

                      
                      
                     });
           
$f3->run();        
?>