$( document ).ready( function(){
   //This will fire when page is fully loaded
   console.log("JS started.....");
   $('#comment-post-btn').click( function(){
    
    comment_post_btn_click();

   });
});

function comment_insert(data)
{
   										var t ='';
											t += '<li class="comments-holder" id="_'+data.comment_id+'">';	
											t += '<div class="user-image">';
											t += '<img src="'+data.profile_img+'" id="poster">';
											t += '</div>';
											t += '<div class="comment-body">';
											t += '<h5 class="username-field">'+data.username+'</h5><br>';
											t += '<div class="comment-text">';							
											t += '<p class="commenting-field">'+data.comment+' </p>';
											t += '</div>'		;								
											t += '</div>';
											t += '<div class="comment-buttons-holder">';
											t += '<ul>';
											t += '<li class="delete-btn">x</li>';
											t += '</ul>';
											t += '</div>';
											t += '</li>';
                                 
                                 $('.comments-holder-ul').prepend(t);
}
function comment_post_btn_click()
{
           //Takes what the user wrote and stores it in a var
        var _comments = $( '#comment-post-text' ).val();
        var _userId = $('#userId').val();
        var _username = $('#username').val();
       
        if(_comments.length > 0 && _userId !== null)
        {
            //changes the color of border back the the regular color if error was there
            $( '#comment-post-text' ).css('border', '1px solid #e1e1e1');
            //proceed with ajax call back.
            $.post("ajax/comment_insert.php",
                   {
                     task : "comment_insert",
                     userId :  _userId,
                     comment : _comments
                   }
 
            )
            
            .error(
                        function()
                         {
                           console.log("Error: ");
                         }
                      
                      )
            
            .success(
                        function(data)
                         {
                           //success
                           comment_insert(jQuery.parseJSON(data));
                           console.log("Response: " + data);
                         }
                      
                      );
            
            console.log(_comments + " " + "Username: " + _username + "User Id: " +_userId);
        }
        else
        {
            $( '#comment-post-text' ).css('border', '1px solid #ff0000');
            console.log("The text area was empty.");
        }
        
        //removes text from text area
        $( '#comment-post-text' ).val("");
}