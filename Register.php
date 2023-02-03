<?php
session_start();
if(isset($_SESSION['User_Name'])){
    header('Location: index.php');
}

include "./init.php";
include $function_lang;
include $template_header;
    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $full__name = $_POST['full__name'];
    $email = $_POST['email'];
    $password = $_POST['pass1'];


        $stmt = $con->prepare("INSERT INTO users(User_Name , Full_Name , Email , Password,code) VALUES(? ,? ,? , ?,?)");
        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);
    if ($stmt->execute(array($username, $full__name, $email, $password, $code))) {



        echo '<span class="alert alert-success">Registering successfully</span>';

        require_once "mail.php";
        $mail->addAddress($email); //Add a recipient
        

        $mail->Subject = 'رمز التحقق من البريد الالكتروني ';
        $mail->Body =' <h1>شكرا لتسجيل في موقعنا </h1>'. '<br/>'. "<a href='http://localhost/eCommerce_Design_Shop/admin_control/active.php?code=" . $code ." '>". "http://localhost/eCommerce_Design_Shop/admin_control/active.php?code=".$code."</a>";
        
        //Recipients
        $mail->setFrom('ibrahimalmasri268@gmail.com', 'Admin');
        $mail->send();
        header('refresh:5;url=Login.php');
    }
else{

    echo ' <span class="alert alert-danger">An error has been detected</span>' ;
}


    

   
    
}

?>

<section class="main_register">
<form class="login " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<h4 class="text-center">Create Account</h4>
 <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
 <input class="form-control" type="text" name="email" placeholder="email" autocomplete="off" />
 <input class="form-control" type="text" name="full__name" placeholder="full name" autocomplete="off" />
 <input class="form-control" type="password" name="pass1" placeholder="password" autocomplete="new-password"/>
 <input class=" btn " type="submit" value="Create"/>
 <span style="align-items: center;" class="">Already have account?</span>
<a style="color:brown; align-items: center;" class="#" href="Login.php">Login to your account</a>
</form>

</section>

<?php include $template_footer; ?>