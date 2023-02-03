<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo lang('title') ?></title>
    <link rel="stylesheet" href="layout/css/change_page.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="layout/css/all.min.css"/>
    <div class="nav_up">
      <div class="container">
        <?php if (isset($_SESSION['User_Name'])) {
          ?>
    <span class="Login_nav_main "><a href="Logout.php">Logout <i class="fas fa-sign-in"></i></a></span> 
<?php }  
 else { ?>
  <span class="Login_nav_main "><a href="Login.php">Login <i class="fas fa-sign-in"></i></a></span> 
<?php }  ?>
    <span class="shopping_nav_main "><a href="#">Shopping <i class="fas fa-shopping-cart"></i></a></span>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-lg nav_main ">
      <div class="container">
    <a href="index.php" ><img  class="img-circle" style="width:70px; border-radius:500px;" src="layout/images/WhatsApp Image 2022-12-25 at 10.36.05 PM.jpeg"/></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active link_home" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_Luxury" href="#">Luxury</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_Calligraphy" href="#">Calligraphy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_fashion" href="#">fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_About" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link_Contact" href="#">Contact Us</a>
        </li>
        <?php if (isset($_SESSION['User_Name'])) { ?>
           <li class="nav-item">
          <a class="nav-link link_Contact" href="#"><?php echo $_SESSION['User_Name'] ?></a>
        </li>
      <?php }  ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control  me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <ul class="navbar-nav ">
            <li class="nav-item"><a class="nav-link" href="index.php?lang=ar">Arabic</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">English</a></li>
          </ul>
    </div>
    </div>
</nav>
<hr class="line_under_nav">
  </head>
  <body></body>