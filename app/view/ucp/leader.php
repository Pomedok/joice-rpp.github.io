<title>Панель лидера - <?php global $config; echo $config['sitename']; ?></title>
    <!-- PAGE TITLE -->
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Панель лидера</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PANEL -->
    <section class="section-leader-panel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <div class="panel-block">
              <div class="title-inner-block">
                <h1>Список всех сотрудников фракции</h1>
                <div class="info"><?php echo $info; ?></div>
              </div>
              <div class="content-inner-block inner-no-scroll">
                <table class="table-players">
                  <tr>
                    <th class="table-players-head">Ник игрока</th>
                    <th class="table-players-head">Ранг</th>
                    <th class="table-players-head">Управление</th>
                  </tr>                
<?php echo $lid;?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>