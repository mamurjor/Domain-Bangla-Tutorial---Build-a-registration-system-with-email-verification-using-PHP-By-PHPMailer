<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

    class sendEmail

    {

        

        function send($code)

        {

 

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'mail.mamurjor.com'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            $mail->Username = 'info@mamurjor.com';  // sender gmail host              

            $mail->Password = 'Lkg1%,]1k9JK'; // sender gmail host password   
            


            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 25;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('mamurjorbd@gmail.com', "Sender"); // sender's email and name

            $mail->addAddress('info@mamurjor.com', "hadijaman");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification From Mamurjor IT';

           

            $mail->Body    = 'Please click this button to verify your account: <a href=https://email.mamurjor.com/verification/verify.php?code='.$code.'>Verify</a>' ;
            // $mail->Body    =  $contents;

 

          $done =   $mail->send();

            echo 'Message has been sent'.$done;

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        }

    }

$sendMl = new sendEmail();

?>