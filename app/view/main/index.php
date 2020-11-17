<title>Главная страница - <?php global $config; echo $config['sitename']; ?></title>
    <!-- MAIN-HEADER -->
    <section class="section-main-header">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="header-content animated bounceInLeft">
                <div class="server-name"><h1><?php global $config; echo $config['sitename']; ?></h1></div>
                <div class="server-info"><p><?php echo $config['text3']; ?></p></div>
                <div class="server-btn">
                  <a href="?/#s-start" class="main-btn">Начать игру</a>
                  <a href="?#s-about" class="main-btn inverse">О проекте</a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
              <div class="skin animated bounceInRight hidden-sm hidden-xs"><img src="/../../app/public/img/skin.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- SERVERS -->
    <section class="section-servers">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="title wow animated fadeInUp">
               <h1>Статистика наших серверов</h1>
               <div class="title-bottom-line"></div>
            </div>
          </div>
          <div class="row">
            <div class="servers wow animated zoomIn">
              <div class="col-lg-4 col-lg-offset-4 col-md-3 col-md-offset-3 col-sm-5 col-sm-offset-5">
                <div class="server-block">
                  <div class="server-name"><h2>Joice</h2></div>
                  <div class="server-online"><h3><script src="http://servers-samp.ru/sinfo-174069-0.js"></script></h3></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- START-GAME -->
    <section class="section-start-game" id="s-start">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="title wow animated fadeInUp">
               <h1>Проделайте всего 4 простых шага и играйте вместе с нами</h1>
               <div class="title-bottom-line"></div>
            </div>
          </div>
          <div class="row">
            <div class="items-container wow animated fadeInLeft">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item-block">
                  <div class="item-img"><a href="http://176.114.0.132/parse/d.rutor.org/download/19886"><img src="/../../app/public/img/start/1.jpg" alt=""></a></div>
                  <div class="item-text">
                    <h1>Шаг 1</h1>
                    <p>Скачайте и установите чистую версию GTA San Andreas</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item-block">
                  <div class="item-img"><a href="http://files.sa-mp.com/sa-mp-0.3.7-install.exe"><img src="/../../app/public/img/start/2.jpg" alt=""></a></div>
                  <div class="item-text">
                    <h1>Шаг 2</h1>
                    <p>Скачайте и установите клиент SA:MP</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item-block">
                  <div class="item-img"><a href="samp://<?php echo $config['ipserver']; ?>"><img src="/../../app/public/img/start/3.jpg"></a></div>
                  <div class="item-text">
                    <h1>Шаг 3</h1>
                    <p>Добавьте наш серверов список избранных</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item-block">
                  <div class="item-img"><img onclick="show('block')" src="/../../app/public/img/start/4.jpg" alt=""></div>
                  <div class="item-text">
                    <h1>Шаг 4</h1>
                    <p>Подключайтесь и наслаждайтесь игрой</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<style type="text/css">

</style>


    <script type="text/javascript">

          //Функция показа
      function show(state){

          document.getElementById('okn').style.display = state;      
          document.getElementById('wrap').style.display = state;      
      }
      
    </script>
    <div onclick="show('none')" id="wrap"></div>
          <!-- Само окно-->
      <div id="okn">  
        <center>          
         <img src="/../../app/public/img/1.jpg" alt="">
        </center>
        
      </div>

    <!-- ABOUT-US -->
    <section class="section-about-us" id="s-about">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="title wow animated fadeInUp">
               <h1>Сейчас мы немного расскажем о нашем проекте</h1>
               <div class="title-bottom-line"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="server-desc wow animated fadeInRight">
                <p><?php echo $config['text4']; ?> </p>
                <p><?php echo $config['text5']; ?> </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="items-adv wow animated fadeInLeft">
              <div class="col-lg-4 col-md-4 sol-sm-4">
                <div class="item-adv">
                  <div class="item-icon"><i class="fa fa-users fa-adv" aria-hidden="true"></i></div>
                  <div class="item-text">
                    <h1>Администрация</h1>
                    <p>На сервере работает квалифицированная команда Администраторов, которая в любой момент готова помочь Вам</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-lg-4 col-md-4 sol-sm-4">
                <div class="item-adv">
                  <div class="item-icon"><i class="fa fa-cogs fa-adv" aria-hidden="true"></i></div>
                  <div class="item-text">
                    <h1>Игровой мод</h1>
                    <p>На нашем сервере качественный и высокотехнологичный игровой мод, который разрабатывался на протяжении 3 лет</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-lg-4 col-md-4 sol-sm-4">
                <div class="item-adv">
                  <div class="item-icon"><i class="fa fa-gg fa-adv" aria-hidden="true"></i></div>
                  <div class="item-text">
                    <h1>RolePlay режим</h1>
                    <p>Строгое соблюдение правил RolePlay режима позволит Вам с головой окунуться в игровую атмосферу
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- VIDEO -->
    <section class="section-video">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="title-inverse wow animated fadeInUp">
               <h1>Видео-обзор нашего сервера</h1>
               <div class="title-bottom-line-inverse"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="video-block wow animated fadeInLeft">
                <center><iframe width="560" height="315" src="<?php echo $config['youtube']; ?>" frameborder="0" allowfullscreen></iframe></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-footer wow animated fadeInUp">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12">
              <div class="information">
                <h3><?php global $config; echo $config['sitename']; ?> &copy; 2020 | Все права защищены</h3>
                <p><?php echo $config['text7']; ?> </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-7">
              <div class="navigate-footer hidden-sm hidden-xs">
                <ul>
                  <li><a href="/">Главная</a></li>
                  <li><a href="?main=news">Новости</a></li>
                  <li><a href="<?php echo $config['forum']; ?>">Форум</a></li>
                  <li><a href="?main=donate">Донат</a></li>
                  <li><a href="?ucp=ucp">Личный кабинет</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

