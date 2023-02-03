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

if (isset($_GET['code'])) {
  
    $stmt = $con->prepare("SELECT  code FROM users WHERE code = :code ");
    $stmt->bindParam("code", $_GET['code']);
    $stmt->execute();


    if ($stmt->rowCount() > 0) {

        $update = $con->prepare("UPDATE users SET code = ? , ACTIVATED = true  WHERE code = ?");
        $newcode = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

        if ($update->execute(array($newcode,$_GET['code']))) {
            echo $newcode;
            echo '<div class="alert alert-success"> تم التحقق من حسابك </div>' .'<br/>' . '<a class="btn btn-info" href="Login.php">Login</a> ';


        } else {
            echo ' <span class="btn btn-danger">An error has been detected</span>' ;
        }




    }

}
 

?>
