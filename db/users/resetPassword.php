<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_GET['username'])){
    $username = $_GET['username'];
    $email = $_GET['email'];
    $id = $_GET['id'];
}else{
    $param = $_GET['form-email'];

    if(strpos($param,'@')){  //inseri um email
        $sql = "SELECT id,username,email FROM `users` WHERE email='$param'";
    }else{
        $sql = "SELECT id,username,email FROM `users` WHERE username='$param'";
    }

    // In the base page (directly accessed):
    define('_DEFVAR', 1);
    include('../conn.php');
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        //LOGIN VÁLIDO
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
        $id = $row['id'];
    } else {
        header('Location: ../../index.php?p=login');
        exit();
    }
    $conn->close();
}
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'xxx@sapo.pt';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('xxx@sapo.pt', 'Admin');
    $mail->addAddress($email, $username);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperação de password';
    $novaPass = generateRandomString();
    $mail->Body    = 'A sua nova <u>password</u> é: '.$novaPass;
    $mail->AltBody = 'A sua nova password é: '.$novaPass;

    include('updatePasswordUser.php');
    $mail->send();

    //echo 'Message has been sent';
    if(!empty($param)){
        header('Location: ../../index.php?p=login&r=recpassok');
        exit();
    }else{
        header('Location: ../../index.php?p=admin&res=recpassok');
        exit();
    }

} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    if(strpos($param,'@')){
        header('Location: ../../index.php?p=login');
        exit();
    }else if(empty($param)){
        header('Location: ../../index.php?p=admin&res=recpasserro');
        exit();
    }else{
        header('Location: ../../index.php?p=login');
        exit();
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}