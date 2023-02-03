<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forget_password</title>
    <link rel="stylesheet" href="layout/css/change_page.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="layout/css/all.min.css"/>


<section class="change_password">
<form class="login" action="change_password_process.php" method="POST">
<h4 class="text-center">Login</h4>
<input class="form-control" type="text" name="email" placeholder="email" autocomplete="off" value=<?php echo $_GET['email'] ?> />
<input class="form-control" type="password" name="new_password" placeholder="new password" autocomplete="new-password"/>
<input class=" btn " type="submit" name="change" value="change"/>
</form>

</section>
 


</html>