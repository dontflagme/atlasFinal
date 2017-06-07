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
//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);



                  //Define a default route
                    $f3->route('GET /', function($f3) {
                      
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
                    
           
$f3->run();        
?>