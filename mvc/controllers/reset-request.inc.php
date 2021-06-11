<?php 

if (isset($_POST["reser-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost:8080/codePHP/DOANUDM/resetpassword/create-new-password.php?selector=" . $selector . "&validator=" .  bin2hex($token);

    $expires = date("U") + 1800; // 24 hours

    require 'Database.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $userEmail); //cho biet nhung gi dau ? se duoc thay the bang trc khi thuc hien cau lenh
        mysqli_stmt_execute($stmt);
    }
    
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
    
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires); //cho biet nhung gi dau ? se duoc thay the bang trc khi thuc hien cau lenh
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close();

    $to = $userEmail;

    $subject = 'Reset lai mat khau cua ban';

    $message = '<p> Chúng tôi đã nhận được yêu cầu reset password. Link này để reset pass, bạn có thể ignore email này </p>';
    $message .= '<p?>Here is your password reset link: </br>'
    $message .= '<a href="'. $url . '">' . $url . '</a></p>';
   
    $headers = "From: Adela <hatran192.org@gmail.com>\r\n";
    $headers .= "Reply-To: mienmien192@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    mail($to, $subject, $message, $headers);

    header("location: ../reset-password.php?reset=success");


} else{
    header("Location:".URL); //chỗ này coi lại
}