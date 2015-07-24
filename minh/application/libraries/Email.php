<?php
include __DIR__ . "/../librarys/class.phpmailer.php";

Class Email extends \Phalcon\Mvc\User\Component {

    public static function sendEmail($To,$Subject,$Body) {

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->From = '1262034@student.hcmus.edu.vn';
        $mail->Sender = '1262034@student.hcmus.edu.vn';
        $mail->FromName = 'W&S Group';
        $mail->SMTPSecure = "tls";
        $mail->Host = 'smtp-mail.outlook.com';
        $mail->SMTPAuth = true;
        $mail->Username = '1262034@student.hcmus.edu.vn';
        $mail->Password = '**********';
        $mail->Port = '587';
        $mail->WordWrap = 500;
        $mail->IsHTML(true); 
        $mail->Subject =$Subject;

        $mail->Body = $Body;
        $mail->AltBody = 'Xin chào';

        $mail->AddAddress($To);

        if ($mail->Send()) {

            return true;
        }
        else {

            return false;

        }
        $mail->ClearAddresses();
        $mail->ClearAttachments();

    }


}
