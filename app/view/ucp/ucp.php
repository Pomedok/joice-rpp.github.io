<title>Личный кабинет - <?php global $config; echo $config['sitename']; ?></title>
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Личный кабинет</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- PLAYER INFO -->
    <section class="section-player-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5">
            <div class="main-player-info animated fadeInLeft">
              <div class="top-block">
                <div class="avatar"><img src="/../../app/public/img/skins/<? echo $skin; ?>.png" alt=""></img></div>
                <div class="player-main"><h2 class="nick"><?php echo $nick[0]; echo " $nick[1]"; ?></h2><br><h3 class="level">Игровой уровень: <?php echo $data["$tabl[level]"]; ?></h3></div>
              </div>
              <div class="main-info">
                <table class="table-2-col">
                 <tr>
                  <td class="table-2-item">Очки опыта</td>
                  <td class="table-2-value"><?php echo $data["$tabl[exp]"]; ?></td>
                 </tr>
                 <tr>
                  <td class="table-2-item">Законопослушность</td>
                  <td class="table-2-value"><?php echo $data["$tabl[zakon]"]; ?></td>
                 </tr>
                 <tr>
                  <td class="table-2-item">Организация</td>
                  <td class="table-2-value"><?php echo $member; ?></td>
                 </tr>
                 <tr>
                  <td class="table-2-item">Проживание</td>
                  <td class="table-2-value"><?php echo $house; ?></td>
                 </tr>
                 <tr>
                  <td class="table-2-item">Наличные</td>
                  <td class="table-2-value"><?php echo $data["$tabl[cash]"]; ?>$</td>
                 </tr>
                 <tr>
                  <td class="table-2-item">Предупреждения</td>
                  <td class="table-2-value"><?php echo $warn; ?></td>
                 </tr>
               </table>
              </div>
              <div class="donate-info">
               <table class="table-2-col">
                 <tr>
                  <td class="table-2-item">Текущий баланс</td>
                  <td class="table-2-value"><?php echo $data["$tabl[donate]"]; ?> RUB</td>
                 </tr>
               </table>
              </div>
              <div class="btn-group">
                 <center>
                   <a href="?ucp=setting" class="btn-sub">Настройки</a>
                   <?php if($data["$tabl[leader]"] >= 1) { ?>
                   <a href="?ucp=leader" class="btn-sub">Панель лидера</a>
                   <?php } ?>
                 </center>
               </div>
               <? if($data["$tabl[admin]"] >= $tabl['alevel']){ ?>
              <div class="btn-group">
                 <center>
                   <a href="?admin=index" class="btn-sub">Админ Панель</a>
                 </center>
               </div>
               <? } ?>
               <div class="clear"></div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7">
            <div class="inner-content-block fixed-h-2 animated fadeInRight">
              <div class="title-inner-block">
                <h1>Банковские счета</h1>
              </div>
              <div class="content-inner-block">
                <table class="table-2-col">
                 <tr>
                  <td class="table-2-item">Основной счет</td>
                  <td class="table-2-value"><?php echo $data["$tabl[money]"]; ?>$</td>
                 </tr>
                 <tr>
                 </tr>
               </table>
              </div>
            </div>
            <div class="inner-content-block mt-inner fixed-h animated fadeInRight">
              <div class="title-inner-block">
                <h1>Настройки аккаунта</h1>
              </div>
              <div class="content-inner-block">
                <table class="table-3-col">
                 <tr>
                  <td class="table-3-item">Состояние</td>
                  <td class="table-3-value2"><?php echo $ban; ?></td>
                 </tr>
                 <tr>
                  <td class="table-3-item">Последний вход</td>
                  <td class="table-3-value2"><?php echo $data["$tabl[getondate]"]; ?></td>
                 </tr>
                 <tr>
                  <td class="table-3-item">Статус</td>
                  <td class="table-3-value2"><?php echo $online;?></td>
                 </tr>
               </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PLAYER-SKILLS -->
    <section class="player-skills wow animated zoomIn">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="skill-block">
              <div class="title-inner-block">
                <h1>Навыки владения оружием</h1>
              </div>
              <div class="skills-info">
                <div class="col-lg-2 col-md-2 col-sm-2">
                  <div class="skill-item">
                    <h1>Deagle</h1><br><h2><?php echo $data["$tabl[desert]"]; ?>%</h2>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </section>