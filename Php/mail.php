<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"]
        $phone = $_POST["phone"]
        $email = $_POST["email"]
        $message = $_POST["message"]
        $headers = "no reply@" .$email
        $subjects = "message from" .$name .$phone
        $recipient = "adeniyi.olaitanhector1@gmail.com"
        

        $errorEmpty = false;
        $errorEmail = false;

        if (empty($name) || empty($phone) || empty($email) || empty($message)){
            echo "<span class='form-error'>Fill in all fields!</span>";
            $errorEmpty = true;
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<span class='form-error'>Enter a valid email!</span>";
            $errorEmail = true;
        }
        else {
            if(mail($recipient, $subjects, $message, $headers)){
                echo "<span class='form-success'>Message Sent</span>";

            }
        }
    }
    else {
        echo "There was an error";
    }


?>
<script>
     $("#name, #email, #phone, #message").removeClass("inputError");

    var errorEmpty = "<?php echo "$errorEmpty" ?>";
    var errorEmail = "<?php echo "$errorEmail" ?>";
    if (errorEmpty == true){
        $("#name, #email, #phone, #message").addClass("inputError");
    }
    if (errorEmail == true){
        $("#email").addClass("inputError");
    }
    if (errorEmpty == false && errorEmail == false) {
        $("#name, #email, #phone, #message").val("");
    }


</script>