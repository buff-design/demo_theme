<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/smooth-scroll.php';
  $title = 'ハンバーガーメニュー＆ページ内スクロールリンク';
  $image = 'https://buff-design.com/sample/img/website_login.svg';
  include("../header.php"); 
?>

  <section>

    <div id="hamburger">
      <!-- ハンバーガーボタン -->
      <p class="btn-gNav">
        <span></span>
        <span></span>
        <span></span>
      </p>
      <!-- メニューリスト -->
      <nav id="gNav">
        <ul class="gNav-menu">
          <li><a href="#menu01">Web制作</a></li>
          <li><a href="#menu02">ライティング</a></li>
          <li><a href="#menu03">デジタルマーケティング</a></li>
          <li><a href="#menu04">セールス</a></li>
          <li><a href="#menu05">マネジメント</a></li>
        </ul>
      </nav>  
    </div>
    
    <div class="c-smooth-scroll">
      <div class="c-smooth-scroll__wrapper">

        <div class="c-smooth-scroll__content">
          <ul class="c-smooth-scroll__list">
            <li id="menu01">
              <div class="c-smooth-scroll__list-title">Web制作</div>
              <div class="c-smooth-scroll__list-image"><img src="https://buff-design.com/demo/img/shutterstock_365414408.jpg"></div>
              <p class="c-smooth-scroll__list-text">ユーザーエクスペリエンスデザインは、製品との対話で提供されるユーザビリティ、有用性、および望ましさを通じてユーザーの行動をサポートするプロセスです。</p>
            </li>
            <li id="menu02">
              <div class="c-smooth-scroll__list-title">ライティング</div>
              <div class="c-smooth-scroll__list-image"><img src="https://buff-design.com/demo/img/shutterstock_1165873744.jpg"></div>
              <p class="c-smooth-scroll__list-text">ユーザーエクスペリエンスデザインは、製品との対話で提供されるユーザビリティ、有用性、および望ましさを通じてユーザーの行動をサポートするプロセスです。</p>
            </li>
            <li id="menu03">
              <div class="c-smooth-scroll__list-title">デジタルマーケティング</div>
              <div class="c-smooth-scroll__list-image"><img src="https://buff-design.com/demo/img/shutterstock_394814620.jpg"></div>
              <p class="c-smooth-scroll__list-text">ユーザーエクスペリエンスデザインは、製品との対話で提供されるユーザビリティ、有用性、および望ましさを通じてユーザーの行動をサポートするプロセスです。</p>
            </li>
            <li id="menu04">
              <div class="c-smooth-scroll__list-title">セールス</div>
              <div class="c-smooth-scroll__list-image"><img src="https://buff-design.com/demo/img/shutterstock_1833221329.jpg"></div>
              <p class="c-smooth-scroll__list-text">ユーザーエクスペリエンスデザインは、製品との対話で提供されるユーザビリティ、有用性、および望ましさを通じてユーザーの行動をサポートするプロセスです。</p>
            </li>
            <li id="menu05">
              <div class="c-smooth-scroll__list-title">マネジメント</div>
              <div class="c-smooth-scroll__list-image"><img src="https://buff-design.com/demo/img/shutterstock_675503758.jpg"></div>
              <p class="c-smooth-scroll__list-text">ユーザーエクスペリエンスデザインは、製品との対話で提供されるユーザビリティ、有用性、および望ましさを通じてユーザーの行動をサポートするプロセスです。</p>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <script src="../js/smooth-scroll.js"></script>
  <script src="../js/hamburger.js"></script>
<?php include("../footer.php"); ?>