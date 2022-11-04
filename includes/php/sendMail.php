<?php
require_once '../classes/config.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once '../phpmailer/src/Exception.php';
    require_once '../phpmailer/src/PHPMailer.php';
    require_once '../phpmailer/src/SMTP.php';
    $email=secure($_POST["email"]);


    if(exist_Email($email)==false){
        $mail = new PHPMailer(true);
        $_SESSION["code"]=rand(1,100);
        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'simo.kandirou15@gmail.com';                     //SMTP username
            $mail->Password   = 'zqcwiqaffqlkphmm';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;   

            $mail->setFrom('simo.kandirou15@gmail.com');    
            $mail->addAddress($email); 
            $mail->isHTML(true);               
            $mail->Subject = 'Confirmation de compte !';
            $mail->Body  = "le code de verification est :".$_SESSION["code"];

            $mail->send();
            echo $_SESSION["code"];
        
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else{
        echo 'exist';
    }


    



    
?>