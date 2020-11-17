<title>Редактирование аккаунта - <?php global $config; echo $config['sitename']; ?></title>
  <link href="../../app/public/libs/bootstrap-grid/bootstrap-grid.min.css" rel="stylesheet">
  <link href="../../app/public/libs/fa/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../app/public/libs/animate/animate.min.css" rel="stylesheet">
  <!-- Main CSS -->
  <link href="../../app/public/css/main.css" rel="stylesheet">
  <link href="../../app/public/css/media.css" rel="stylesheet">
  <link href="../../app/public/css/fonts.css" rel="stylesheet">   
  <link href="../../app/public/css/admin-panel.css" rel="stylesheet">
    <section class="section-header-line">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3">
              <div class="logo hidden-xs hidden-sm animated zoomIn"><i class="fa fa-paper-plane icon-logo" aria-hidden="true"></i><span class="text-logo">Admin-panel</span></div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <div class="navigate animated zoomIn">
                <ul>
                  <li><a href="?admin=index">Главная</a></li>
                  <li><a href="?admin=news">Добавить новость</a></li>
                  <li><a href="/">Вернуться на сайт</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ADD NEWS -->
    <section class="section-add-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-inner-block">
              <h1>Редактирование аккаунта</h1>
            </div>
            <div class="content-inner-block inner-no-scroll">
            <div class="info"><?php echo $info; ?></div>
              <form class="acc_edit_form" method="POST">
                <table class="table-ap">
             <?php echo $edit; ?>                                
                </table>
                <button class="btn-sub" type="submit" name="fsave" value="fsave">Сохраниь аккаунт</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <section class="section-footer wow animated fadeInUp">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12">
              <div class="information">
                <h3><?php global $config; echo $config['sitename']; ?> &copy; 2016 | Все права защищены</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>