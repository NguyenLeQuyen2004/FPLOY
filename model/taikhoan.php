<?php
session_start();
function insert_taikhoan($user, $pass, $email)
{
    $sql = "INSERT INTO `taikhoan` ( `user`, `pass`, `email`) VALUES ( '$user', '$pass','$email'); ";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where `email`='{$email}'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql =  "UPDATE `taikhoan` SET `user` = '{$user}', `pass` = '{$pass}', `email` = '{$email}', `address` = '{$address}',  `tel` = '{$tel}' WHERE `taikhoan`.`id` = $id";
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $_GET['id'];
    pdo_execute($sql);
}

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return  $listtaikhoan;
}

// function dangnhap($user, $pass)
// {
//     $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
//     $taikhoan = pdo_query_one($sql);

//     if ($taikhoan != false) {
//         $_SESSION['user'] = $user;
//         $_SESSION['pass'] = $pass;
//     } else {
//         return "Thông tin tài khoản sai";
//     }
// }

function dangxuat()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}

function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "gửi Email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '6bda0a4c1abcfc';                     //SMTP username
        $mail->Password   = '4430da6c8b9967';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
