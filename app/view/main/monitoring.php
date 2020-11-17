<title>Мониторинг - <?php global $config; echo $config['sitename']; ?></title>
<style>.apple-mon { display: none; transition: .3s !important; }</style>
<script type="text/javascript">
  var showNekonyx = function(server){
    if(server == 'apple') {
      $('.apple-mon').fadeIn(300);
    } else {
  
    }
  };
</script>
    <section class="section-page-title">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title">
                <h1><span class="bold">Мониторинг</span> - <?php global $config; echo $config['sitename']; ?></h1>
                <div class="page-title-bottom-line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-monitoring">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="title-inner-block">
                  <h1>Выберите сервер</h1>
                </div>
                <div class="content-inner-block inner-no-scroll">
                  <div class="col-md-6 col-lg-6">
                    <button type="button" name="button" class="main-btn" style="width: 60%;" onclick="showNekonyx('apple');">Apple</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- MONITORING -->
    <section class="section-monitoring apple-mon">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-inner-block">
              <h1>Администрация</h1>
            </div>
            <div class="content-inner-block inner-no-scroll">
              <table class="table-mon">
<?php echo $thadm[0];echo $tdadm[0]; ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MONITORING -->
    <section class="section-monitoring apple-mon">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-inner-block">
              <h1>Лидеры</h1>
            </div>
            <div class="content-inner-block inner-no-scroll">
              <table class="table-mon">
<?php echo $thlid[0];echo $tdlid[0]; ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>