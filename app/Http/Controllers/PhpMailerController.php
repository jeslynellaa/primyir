<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PhpMailerController extends Controller{
    public function sendEmail(){

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'sorsgonnationalhs.deped@gmail.com';                     //SMTP username
            $mail->Password   = 'thesisbu';                               //SMTP password
            $mail->SMTPSecure = tls;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set
        
            //Recipients
            $mail->setFrom('sorsgonnationalhs.deped@gmail.com', "e-SKWELAHAN");
            $mail->addAddress($request->input('email'));     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Username and Temporary Password';
            $mail->Body    = 'Your username: ' . $username . '<br>Your temporary password is: ' . $rand_password;

            $mail->send;

            if (!$mail->send()){
                return back()->with("error", "Email could not be sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }
        }catch (Exception $e) {
                return back()->with("error", "Email could not be sent");
            }
        }
    }
