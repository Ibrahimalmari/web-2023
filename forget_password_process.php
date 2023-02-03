<?php

include "./init.php";

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forget_password</title>
    <link rel="stylesheet" href="layout/css/change_page.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="layout/css/all.min.css"/>
  </head>
    <?php
if(isset($_POST['reset'])){
    
    $email = $_POST['email'];

    $stmt = $con->prepare("SELECT * FROM users WHERE Email = :email ");
    $stmt->bindParam("email", $email);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "<div class='alert alert-success' >found email  before</div>" ;
        require_once "mail.php";
        $mail->addAddress($email); //Add a recipient

        $mail->Subject = 'link to reset password';
        $mail->Body = "<div style='color:black;   border-top: 1px red solid;
        opacity: 1.25;'>"."<h4>reset password</h4>"."<p>we received a request to reset your account's password .If you sent this ,click the button below to choose a new password.</p>". "<a ' href='http://localhost/eCommerce_Design_Shop/admin_control/change_password.php?email=" . $_POST['email']."'>".'click' ."</a>"."</div>";

        //Recipients
        $mail->setFrom('ibrahimalmasri268@gmail.com', 'Admin');
        $mail->send();
    }
    else{
        echo "<div class='alert alert-danger' >not found email </div>"; 
    }

}?>



