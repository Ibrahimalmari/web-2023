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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $newpassword = $_POST['new_password'];
    $email = $_POST['email'];

        $update = $con->prepare("UPDATE users SET Password = ? WHERE Email = ?");
       if($update->execute(array($newpassword,$email))){
        echo "<div class='alert alert-success'>Password changed successfully</div>";

        header('refresh:5;url=index.php');

       }
       else{
            echo "<div class='alert alert-danger'>Password  unsuccessfully</div>";
       }


    }

    ?>
  

