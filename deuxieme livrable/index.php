<?php

require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();

$admin = ['add','update','delete','logout','dashbord','login'];

$pages = ['home','about','tours','contact'];



if (isset($_GET['page']) && in_array($_GET['page'],$admin)) {

  if (isset($_SESSION['logged']) && isset($_SESSION['logged']) === true) {
    if ($_GET['page'] === "login") {
      $home->index("dashbord");
    } else {
      $page = $_GET['page'];
      $home->index($page);
    }

  }else{
    $home->index('login');
  }

}else if(isset($_GET['page']) && in_array($_GET['page'],$pages)){
      $page=$_GET['page'];
      $home->index($page);
}else if (!isset($_GET['page'])) {
  $home->index('home');
}else{
  include('views/includes/404.php');
}

require_once './views/includes/footer.php';


