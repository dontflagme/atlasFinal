// JavaScript for form validation goes here!
window.alert("Hello.");
//Hook up the form submit button to a vaildate function
$(document).ready(function(){
    
    $('input[type="submit"]').on("click", validate);
    alert("Hello.");
});


alert("Hello.");
//Perform validation logic on form inputs
function validate(event)
{
    event.preventDefault();
    removeErrors();
    
    var isError = false;
    
    //validate employee id to be 10 chars
    var firstName = $("#fname").val();
    
    if(id.length != 10){
        report("firstNameError", "No bueno, homie!");
        isError = true;
    }
    
    var hours = parseInt($("#hours").val());
    if(!Number.isInteger(hours)){
        report("hours-error", "Another no bueno, Go home!");
        isError=true;
    }
    
    else if(hours < 1 || hours > 100){
        report("hours-error", "No...Just no...");
        isError = true;
    }
    
    //validate reate - must be numeric and positive
    var rate = $('#payrate').val());
    
    if(!Number.isInteger(rate)){
        report("payrate-error", "Where my money at?!");
        isError=true;
    }
    else if(rate < 0){
        report("payrate-error", "You owe us money!");
        isError=true;
    }
    
    //submit
    if(!isError){
        $("#payroll-form").submit();
    }
}

//Update error message
function report(id, message)
{
    $("#" + id).html(message);
    $("#" + id).parent().show();
}

function removeErrors()
{
    $("#emp-id-error").parent().hide();
     $("#hours-error").parent().hide();
    // $("#payrate-error").parent().hide();
}