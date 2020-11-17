<title>Добавить новость - <?php global $config; echo $config['sitename']; ?></title>
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
              <h1>Добавление новости</h1>
            </div>
            <div class="content-inner-block inner-no-scroll">
            <div id="info" class="info"></div>
              <form class="add_news_form" method="POST">
                <input id="title" type="text" class="inner-input" placeholder="Заголовок новости">
                <input id="url" name="url "type="text" class="inner-input" placeholder="Ссылка на форуме/в группе">
                <textarea id="text" placeholder="Содержание новости" class="inner-textarea" rows="10" cols="45" name="text"></textarea>
                <button type="button" value="news" id="news" name="news" class="btn-sub">Добавить новость</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>