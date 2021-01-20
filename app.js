$(function(){
    $("#error-message-name").hide();
    $("#error-message-email").hide();
    $("#error-message-number").hide();
    $('#error-message-msg').hide();

    var error_name = false;
    var error_email = false;
    var error_number = false;
    var error_message_msg = false;

    $("#uname").focusout(function(){
        check_username();
      //  alert("test");
    });

    $("#email").focusout(function(){
        check_email();
       // alert("test");
    });

    $("#pnumber").focusout(function(){
        check_number();
       // alert("test");
    });

    $("#message").focusout(function(){
        check_message();
       // alert("test");
    });


    function check_username(){
        var username_length = $("#uname").val().length;
        var regex = /^(?![\s.]+$)[a-zA-Z\s.]*$/;
        if (!regex.test($("#uname").val())){
            $("#error-message-name").html("User name should only consist of alphabets");
            $("#error-message-name").show();
            error_name = true;
        }

        else  if(username_length < 5 || username_length > 20){
            $("#error-message-name").html("User name Should be between 5-20 characters");
            $("#error-message-name").show();
            error_name = true;
        }

        else{
            $("#error-message-name").hide();
            error_name = false;
        }
    }

    function check_email(){
        var pattern = new RegExp(/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/);

        if(pattern.test($("#email").val())){
            $("#error-message-email").hide();
            error_email = false;
        }
        else{
            $("#error-message-email").html("Please enter valid email address");
            $("#error-message-email").show();
            error_email = true;
        }
    }
    function check_number(){
        var phone = $("#pnumber").val(),
        //intRegex = '\d{5}([- ]*)\d{6}';
        intRegex = '^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$';
        if((phone.length < 10) || (!intRegex.test(phone)))
        {
            $("#error-message-number").html("Please enter a valid phone number");
            $("#error-message-number").show();
            error_number = true;
        }
        else{
            $("#error-message-number").hide();
            error_number = false;
        }
    }
    function check_message(){
        var message = $("#message").val();
        if(message == ""){
            $("#error-message-msg").html("Please enter the message");
            $("#error-message-msg").show();
            error_message_msg = true;
        }
        else{
            $("#error-message-msg").hide();
            error_message_msg = false;

        }
    }

    $("#registration-form").submit(function(){
        error_name = false;
        error_message_msg = false;
        error_email = false;
        error_number = false;
        
        check_username();
        check_email();
        check_message();
        check_number();

        if(error_name == false && error_message_msg == false && error_email == false && error_number == false ){
            $("#error-message-msg").hide();
            $("#error-message-number").hide();
            $("#error-message-email").hide();
            $("#error-message-name").hide();
            return true;
        }
        else{
            return false;
        }
    });
});