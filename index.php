<?php 
  $description = 'php・WordPress・jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/index.php';
  $title = 'ホーム';
  $image = 'https://buff-design.com/wp/wp-content/themes/bd/assets/images/common/logo.svg';
  include("header.php"); 
?>

  <section class="l-main">
    <ul class="l-main__article">
      <li>
        <a href="tpl/modal.php">
          <div class="l-main__thum"><img src="https://buff-design.com/demo/img/website_login.svg" alt=""></div>
          <h2>モーダルウィンドウ</h2>
        </a>
      </li>
      <li>
        <a href="tpl/modal-scroll.php">
          <div class="l-main__thum"><img src="https://buff-design.com/wp/wp-content/uploads/2020/04/thum.png" alt=""></div>
          <h2>モーダルウィンドウ（横スクロール）</h2>
        </a>
      </li>
      <li>
        <a href="tpl/accordion.php">
          <div class="l-main__thum"><img src="https://buff-design.com/demo/img/accordion_faq.svg" alt=""></div>
          <h2>アコーディオンA</h2>
        </a>
      </li>
      <li>
        <a href="tpl/accordion-b.php">
          <div class="l-main__thum"><img src="https://buff-design.com/demo/img/accordion_qa.jpg" alt=""></div>
          <h2>アコーディオンB</h2>
        </a>
      </li>
      <li>
        <a href="tpl/tab.php">
          <div class="l-main__thum"><img src="https://buff-design.com/demo/img/shutterstock_364944905.jpg" alt=""></div>
          <h2>タブ切替</h2>
        </a>
      </li>
      <li>
        <a href="tpl/tab_follow.php">
          <div class="l-main__thum"><img src="https://buff-design.com/demo/img/shutterstock_365414408.jpg" alt=""></div>
          <h2>タブ切替追従ボタン</h2>
        </a>
      </li>
      <!-- <li>
        <a href="tpl/slider.php">
          <div class="l-main__thum"><img src="https://buff-design.com/wp/wp-content/uploads/2020/04/thum.png" alt=""></div>
          <h2>スライダー</h2>
        </a>
      </li> -->
    </ul>
  </section>

<?php include("footer.php"); ?>
