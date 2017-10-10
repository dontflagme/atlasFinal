<?php

     if(isset($_POST['task']) && $_POST['task'] == 'comment_insert')
     {
        $userId = (int)$_POST['userId'];
        $username = $_POST['username'];
        $comment = addslashes(str_replace("\n", "<br>" , $_POST['comment']));
        
        $std = new stdClass();
        $std->comment_id = 24;
        $std->userId = $userId;
        $std->comment = $comment;
        $std->username = $username ;
        $std->profile_img = "img/{{@event.postersProfilePicture}}" ;
        
        
        if(class_exists('Comments'))
        {
            $commentInfo = Comments::insert($comment_txt, $userId);
            
            if($commentInfo != null)
            {
                
            }
        }
        echo json_encode($std);
     }
     
     else
     {
       header('location: /328/atlasFinal/homelogin');
     }
?>