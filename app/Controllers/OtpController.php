<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class OtpController extends BaseController
{
    public function sendOtp()
    {
        $email = $this->request->getPost('email');

        if ($email) {
            $otp = $this->generateOTP();
            $this->sendOtpEmail($email, $otp);
        } else {
            echo "Email address is required.";
        }
    }

    public function validateOtp()
    {
        $otp = $this->request->getPost('otp');

        if ($otp == session('otp')) {
            echo "Correct OTP.";
        } else {
            echo "Incorrect OTP.";
        }
    }

    private function generateOTP($length = 6)
    {
        $digits = '0123456789';
        $otp = '';
        for ($i = 0; $i < $length; $i++) {
            $otp .= $digits[rand(0, strlen($digits) - 1)];
        }
        return $otp;
    }

    private function sendOtpEmail($toEmail, $otp)
    {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'youremail@gmail.com'; // SMTP username
            $mail->Password = 'yourpassword'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $session = \Config\Services::session();
            $session->set([
                'otp' => $otp
            ]);

            // Disable SSL certificate verification for troubleshooting
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];

            // Recipients
            $mail->setFrom('your_email@example.com', 'Your Name');
            $mail->addAddress($toEmail);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Your OTP Code';
            $mail->Body = "Your OTP code is <b>$otp</b>";

            $mail->send();
            echo 'OTP has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
