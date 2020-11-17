<title>Пополнение счета - <?php global $config; echo $config['sitename']; ?></title>
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Пополнение счета</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- DONATE -->
    <section class="section-donate">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="donate-info">
              <h1><a href="http://forum.attract-rp.ru/index.php?forums/%D0%94%D0%BE%D0%BD%D0%B0%D1%82-%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8.25/">Техническая поддержка доната</a></h1>
              <p><?php echo $config['text1']; ?></p>
            </div>
          </div>
          <div class="col-lg-5 col-lg-offset-1">
            <div class="form-donate">
              <form action="https://unitpay.ru/pay/60933-1d78a?">
                <input type="text" name="account" placeholder="Ник аккаунта" class="form-input"><br>
                <input type="text" name="sum" placeholder="Сумма пополнения" class="form-input"><br>
                <input type="hidden" name="desc" value="Пополнение счета" class="transparent_input"><br>
                <select class="form-input" onchange="document.querySelector('form').setAttribute('action', value); document.querySelector('button.btn-sub').disabled = false; document.querySelector('button.btn-sub').style.background = '#ff394c';">
                  <option value="https://unitpay.ru/pay/60933-1d78a?" selected disabled>Выберите сервер</option>
                  <option value="https://unitpay.ru/pay/60933-1d78a?">Apple</option>
                  //<option value="https://unitpay.ru/pay/65451-9da42?">Lime</option>
                </select>
                <button class="btn-sub" style="background: rgba(255, 57, 76, 0.55)" disabled>Перейти к оплате</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
