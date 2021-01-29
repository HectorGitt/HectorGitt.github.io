$(document).ready(function(){
    $("form").submit(function(e){
        e.preventDefault()
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();
        var submit = $(".submit").val();
        $(".form-messgae").load("Php/mail.php", {
            name : name,
            email : email,
            phone : phone,
            message : message,
            submit : submit

        })
        
    }

    )
});