<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Museum Batik &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <div class="site-wrap">
    <?php
      session_start();
      $halaman = @$_GET['page'];
      if(!isset($halaman)){
        $halaman = "home";
      }
      include_once 'header.php';
      $paging = include_once $halaman.".php";
      include_once 'footer.php';
      if(!$paging){
        echo "Halaman tidak ditemukan";
      }
      if(@$_GET['logout']){
        $_SESSION['login'] = false;
        $_SESSION['nama_login'] = "";
        echo "<script>alert('Anda berhasil logout');</script>";
        echo "<script>window.location.replace('./');</script>";
      }
    ?>    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>