<title>Настройка аккаунта - <?php global $config; echo $config['sitename']; ?></title>
    <!-- PAGE TITLE -->
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Настройки</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SETTINGS -->
    <section class="section-settings">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="inner-content-block">
              <div class="title-inner-block">
                <h1>Сменить пароль</h1>
                <div class="info" id="pinfo"></div>
              </div>

              <div class="content-inner-block inner-no-scroll">
              <form method="POST">
                  <input type="password" name="oldpassword" id="oldpassword" class="inner-input" placeholder="Введите старый пароль">
                  <input type="password" name="newpassword" id="newpassword" class="inner-input" placeholder="Введите новый пароль">
                  <button class="btn-sub" type="button" name="changepass" id="changepass" value="change">Сменить пароль</button>   
              </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="inner-content-block">
              <div class="title-inner-block">
                <h1>Сменить E-mail</h1>
                <div class="info" id="einfo"><?php echo $inf; ?></div>
              </div>
              <div class="content-inner-block inner-no-scroll" >
              <form method="POST" id="ef">
                  <input type="text" name="oldemail" id="oldemail" class="inner-input" placeholder="Введите старый E-mail">
                  <input type="text" name="newemail" id="newemail" class="inner-input" placeholder="Введите новый E-mail">
                  <button class="btn-sub" type="button" name="changeemail" id="changeemail" value="changeemail">Сменить E-mail</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>