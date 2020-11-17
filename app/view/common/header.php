<?php 
if(isset($_POST['logout'])){
session_destroy();
echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/'>";
} 
 ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Libs CSS -->
    <link href="app/public/libs/bootstrap-grid/bootstrap-grid.min.css" rel="stylesheet">
    <link href="app/public/libs/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="app/public/libs/animate/animate.min.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="app/public/css/main.css" rel="stylesheet">
    <link href="app/public/css/media.css" rel="stylesheet">
    <link href="app/public/css/fonts.css" rel="stylesheet">    
    <link rel="shortcut icon" href="logo.ico"/>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- PRELOADER -->
    <div class="loader">
      <div class="loader_inner"></div>
    </div>

    <!-- HEADER-LINE -->
    <section class="section-header-line">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="navigate animated zoomIn">
                <ul>
                  <li><a href="/">Главная</a></li>
                  <li><a href="?main=news">Новости</a></li>
                  <li><a href="<?php global $config; echo $config['forum']; ?>">Форум</a></li>
                  <li><a href="?main=monitoring">Мониторинг</a></li>
                  <li><a href="?main=donate">Донат</a></li>
                  <?php if (isset($_SESSION['Nick'])){  ?>
                  <li><a href="?ucp=ucp">Личный кабинет</a></li>
                  <li><form method="POST"><button name="logout" value="logout" href="?ucp=login">Выход</a><form></li>
                  <?php }else{ ?>
                  <li><a href="?ucp=login">Войти</a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>