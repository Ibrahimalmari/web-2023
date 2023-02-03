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
    $password = $_POST['pass'];


    $stmt = $con->prepare("SELECT User_Name ,Password  FROM users WHERE User_Name= ? AND Password = ? AND GroupID = 0 ");
    $stmt->execute(array($username, $password));
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['User_Name'] = $username;
        echo "<div class='alert alert-success'> Loggin successfully</div>";
        header('refresh: 5;url= index.php?username=' . $username);
        exit();
    }
    else{
        echo "<div class='alert alert-danger'> Loggin unsuccessfully</div>";
    }
}

?>

<section class="main_login">
<form class="login " action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<h4 class="text-center">Login</h4>
 <input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
 <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="new-password"/>
 <span class=" text-align: center;" href="forget_password.php">Forgot your password?</span>
 <a  style="color:brown;  text-align: center;" href="forget_password.php" class="">Reset now</a>
 <input class=" btn " type="submit" value="Login"/>
 <span style="align-items: center;" class="">Don’t have account?</span>
<a style="color:brown; align-items: center;" class="#" href="Register.php">Register now</a>
</form>

</section>

<?php include $template_footer; ?>