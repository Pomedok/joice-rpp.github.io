<title>Восстановление аккаунта - <?php global $config; echo $config['sitename']; ?></title>
    <!-- PAGE TITLE -->
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Восстановить аккаунта</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LOGIN -->
    <section class="section-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="login-info">
            </div>
          </div>
          <div class="col-lg-5 col-lg-offset-1">
          <div class="info" id="info"></div>
            <div class="form-donate">
                <form method='POST'>
                <input id='recnick' name='recnick' type="text" placeholder="Ваш ник" class="form-input"><br>
                <input id='recemail' name='recemail' type="text" placeholder="Ваш E-mail" class="form-input"><br>
                <button id="rec" type="button" value="rec" class="btn-sub">Восстановить</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
