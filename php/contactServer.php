<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        session_start();
        if(isset($_POST['inputName']) && isset($_POST['email'])){
            $field_name = $_POST['inputName'];
            $field_email = $_POST['email'];
            $field_phoneNumber = $_POST['phoneNumber'];
            $field_serviceArea = $_POST['serviceArea'];
            $field_message = $_POST['message'];

            $mail_to = 'email@gmail.com';
            $subject = 'Message from Precise CS Support Visitor '.$field_name;

            $body_message = 'From: '.$field_name."\n";
            $body_message .= 'E-mail: '.$field_email."\n";
            $body_message .= 'Phone Number: '.$field_phoneNumber."\n";
            $body_message .= 'Service Area: '.$field_serviceArea."\n";
            $body_message .= 'Message: '.$field_message;

            $headers = 'From: '.$field_email."\r\n";
            $headers .= 'Reply-To: '.$field_email."\r\n";

            $mail_status = mail($mail_to, $subject, $body_message, $headers);
        }

        if ($mail_status) { 
            $_SESSION['Success'] = "Message Sent.";
            header("Location: ./contactUs.php");
        }else{
            $_SESSION['Error'] = "Message Fail.";
            header("Location: ./contactUs.php");
        }
    ?>
    </body>
</html>