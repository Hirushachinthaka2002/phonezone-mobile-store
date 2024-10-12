<?php
require '../PHPmailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require '../PHPmailer/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendVerificationEmail($userEmail, $userName, $verifyLinkWtoken)
{
    $mail = new PHPMailer(true);

    try {
        
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = function($str, $level) {
            error_log("PHPMailer: $str");
        };

        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->Username   = 'phonezone014@gmail.com'; 
        $mail->Password   = 'brvgtprrkhyujoqv'; 

        $mail->Timeout    = 60;

        $mail->setFrom('phonezone014@gmail.com', 'Phone Zone Mobile Shop');
        $mail->addAddress($userEmail, $userName);

        
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset for Phone Zone Mobile Shop';
        $verificationLink = $verifyLinkWtoken;

        
        $mail->Body = "
        <html>
        <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <h2>Password Reset for Phone Zone Mobile Shop</h2>
            <p>Dear $userName,</p>
            <p>We received a request to reset your password for the Phone Zone Mobile Shop. If you did not make this request, please ignore this email.</p>
            <p>To reset your password, please click on the link below:</p>
            <p><a href=\"$verificationLink\" style='background-color: #4CAF50; color: white; padding: 10px 15px; text-align: center; text-decoration: none; display: inline-block;'>Reset Password</a></p>
            <p>If the button above doesn't work, you can copy and paste the following link into your browser:</p>
            <p>$verificationLink</p>
            <p>This link will expire in 24 hours for security reasons.</p>
            <p>If you have any questions or concerns, please contact our support team.</p>
            <p>Best regards,<br>Phone Zone Mobile Shop Team</p>
        </body>
        </html>";

        $mail->AltBody = "Dear $userName,\n\nWe received a request to reset your password for the Phone Zone Mobile Shop. If you did not make this request, please ignore this email.\n\nTo reset your password, please visit this link: $verificationLink\n\nThis link will expire in 24 hours for security reasons.\n\nIf you have any questions or concerns, please contact our support team.\n\nBest regards,\nRUSL Library System Team";

        // Send the email
        $mail->send();
        $response = '<div class="imgv"><img src="../../order/photoorder/zcorrectmark.png" class="vimg"><div>
                    <span class="sucess">Verification email sent successfully!</span>';
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $mail->ErrorInfo);
        $response = $e."<div class=\"imgv\"><img src=\"../../order/photoorder/exclamation.png\" class=\"vimg\"><div>
                        <span class=\"error-some\">Message could not be sent. Please try again later or contact support.</span>";
    }

    return $response;
}