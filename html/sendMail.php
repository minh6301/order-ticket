<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    include 'phpmailer/src/Exception.php';
    include 'phpmailer/src/PHPMailer.php';
    include 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    // print_r($mail);
    
    // if(isset($_POST["send"])){
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'nguyen.duc.minh.6301@gmail.com';                     //SMTP username
            $mail->Password   = 'zotfzyppkbnywvkg';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('nguyen.duc.minh.6301@gmail.com', "Rap chieu phim Cinestar");
            $mail->addAddress($_POST['email']);  
            $mail->addCC('nguyen.duc.minh.6301@gmail.com');                //Name is optional
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $_POST['number'];
            $mail->Body    = $_POST['message'];
        
            $mail->send();
            header('location:trangchu.php');
            echo '
                <script>
                    alert("Vé của bạn đã được gửi về Email");
                </script>
            ';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    // }
?>