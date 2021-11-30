<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://buff-design.com/sample/modal.php';
  $title = 'モーダルウィンドウ';
  $image = 'https://buff-design.com/demo/img/website_login.svg';
  include("../header.php"); 
?>

  <section>
      <div class="c-modal__signup-modal-wrapper" id="ji-signupModal"></div>
        <div class="c-modal__inner-signup-box">
          <div class="close-modal">
            <i class="c-modal__close-btn"></i>
          </div>
          <div id="signup-form">
            <h2>Emailで新規登録</h2>
            <form action="#">
              <input class="form-control" type="text" placeholder="メールアドレス">
              <input class="form-control" type="password" placeholder="パスワード">
              <div id="submit-btn">新規登録</div>
            </form>
          </div>
        </div>
      
      <div class="c-modal__login-modal-wrapper" id="ji-loginModal"></div>
        <div class="c-modal__inner-login-box">
          <div class="close-modal">
            <i class="c-modal__close-btn"></i>
          </div>
          <div id="login-form">
            <h2>Emailログイン</h2>
            <form action="#">
              <input class="form-control" type="text" placeholder="メールアドレス">
              <input class="form-control" type="password" placeholder="パスワード">
              <div id="submit-btn">ログイン</div>
            </form>
          </div>
        </div>
      
      <div class="c-modal">
        <div class="c-modal__inner">
          <div class="c-modal__head">
            <div>
            </div>
            <div>
              <div id="ji-loginShow" class="c-modal__login">ログイン</div>
            </div>
          </div>
          <div class="c-modal__hero">
            <img src="https://buff-design.com/demo/img/website_login.svg" alt="">
            <div class="c-modal__content">
              <div id="ji-signUpShow" class="c-modal__btn">新規登録はこちら</div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="../js/modal.js"></script>
<?php include("../footer.php"); ?>