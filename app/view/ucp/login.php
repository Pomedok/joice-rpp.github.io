</div>
<title>Авторизация - <?php global $config; echo $config['sitename']; ?></title>
    <!-- PAGE TITLE -->
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Войти в аккаунт</span> - <?php global $config; echo $config['sitename']; ?></h1>
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
               <p><?php echo $config['text2']; ?></p>
            </div>
          </div>
          <div class="col-lg-5 col-lg-offset-1">
          <div class="info" id="info"></div>
            <div class="form-donate">
              <form method='POST' id='formlogin' name='formlogin'>
                <input id='nickname' type='text' name='nickname' placeholder='Введите ваш ник' class="form-input"><br>
                <input type="password" id="password" placeholder="Ваш пароль" class="form-input"><br>
                <button class="btn-sub" value="auth" id="auth" type="button">Авторизоваться</button>
                <a href="?ucp=recovery" class="btn-sub" type="button" style="margin-right: 25px;">Восстановить аккаунт</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
