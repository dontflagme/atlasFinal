var _GlobalButtonClick;
var _GlobalNameClick;
var _GlobalImageClick;

$( document ).ready( function(){
   //This will fire when page is fully loaded
   console.log("JS started.....");

   $( '#passingEventId' +  '#passingEventId').css('display' , 'none');
   
      
   $('button').click( function(){

    console.log("This is the id that was clicked: " + this.id);
    var _buttonClicked = this.id;
    var GbuttonClicked =_buttonClicked;
    _GlobalButtonClick = _buttonClicked;
    console.log( "This is the Global: " + _GlobalButtonClick);
    //var numberClicked = $('.comment-post-btn-wrapper').id;
    var _comments = $( '#comment-post-text' + _buttonClicked).val();
    console.log( "This is the comment: " + _comments);
    console.log("This is the number that keeps popping up per clicke: " + _buttonClicked);
    comment_post_btn_click(GbuttonClicked , _buttonClicked);


   });
});

function comment_insert(data)
{
   										var t ='';
											t += '<li class="comments-holder" id="_'+data.comment_id+'">';	
											t += '<div class="user-image">';
											t += '<img src="img/'+_GlobalImageClick+'" id="poster">';
											t += '</div>';
											t += '<div class="comment-body">';
											t += '<h5 class="username-field">'+_GlobalNameClick+'</h5><br>';
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
                                 
                                 $('.comments-holder-ul'+ _GlobalButtonClick).prepend(t);
                                 
                                 //console.log("Pending id: " + _buttonClicked);
}  
function comment_post_btn_click(GbuttonClicked, _buttonClicked)
{
           //Takes what the user wrote and stores it in a var
        var _comments = $( '#comment-post-text' + _buttonClicked).val();
        var _userId = $('#userId').val();
        var _username = $('#username').val();
        var _eventId = _buttonClicked;
        var _profileImage = $('#profileImage').val();

        _GlobalNameClick = _username;
        _GlobalImageClick = _profileImage;
        if(_comments.length > 0 && _userId !== null)
        {
            //changes the color of border back the the regular color if error was there
            $( '#comment-post-text' + _buttonClicked).css('border', '1px solid #e1e1e1');
            //proceed with ajax call back.
            $.post("./insertComment",
                   {
                     task : "comment_insert",
                     userId :  _userId,
                     username : _username,
                     comment : _comments,
                     eventId : _eventId,
                     profileImage : _profileImage
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
            
            console.log(_comments + " " + "Username: " + _username + "User Id: " +_userId + " eventId: " + _eventId + " ProfileImage: " + _profileImage + "Button clicked: " + GbuttonClicked);
        }
        else
        {
            $( '#comment-post-text' + _GlobalButtonClick).css('border', '1px solid #ff0000');
            console.log("The text area was empty.");
        }
        
        //removes text from text area
        $( '#comment-post-text' + _GlobalButtonClick).val("");
}