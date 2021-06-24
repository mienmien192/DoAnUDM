<?php
    use PHPMailer\PHPMailer\PHPMailer;

 if (isset($_POST['name']) && isset($_POST['email'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $body = $_POST['body'];

 require_once "PHPMailer/PHPMailer.php";
 require_once "PHPMailer/SMTP.php";
 require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "adelacosmetic.vlog@gmail.com";
    $mail->Password = 'adelacosmetic';
    $mail->Port = 587;
    $mail->SMTPSecure = "SSL";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("mienmien192@gmail.com");
    $mail->Body = $body;

    if ($mail->send()){
        $status ="success";
        $response = "Email sent successfully";

    }
    else{
        $status = "error";
        $response ="Something is wrong: <br>". $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
 }

?>