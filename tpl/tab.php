<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/tab.php';
  $title = 'タブ切替';
  $image = 'https://buff-design.com/demo/img/shutterstock_364944905.jpg';
  include("../header.php"); 
?>

  <section class="c-tab">
    <!-- タブ切替ボタン -->
    <ul class="c-tab__nav">
      <li id="tabDetail" class="c-tab__tabbar jc-tab js-active"><a href="#ji-tab-1">DESIGN</a></li>
      <li id="tabTable" class="c-tab__tabbar jc-tab"><a href="#ji-tab-2">CODING</a></li>
    </ul>
    
    <section id="ji-tabContainer" class="c-tab__wrapper">
      <!-- タブ切替ボタン1 -->
      <article id="ji-tab-1" class="c-tab__content jc_tabContent02 js-show">
        <div class="c-tab__image">
          <img src="https://buff-design.com/demo/img/shutterstock_364944905.jpg">
        </div>
      </article>
      <!-- タブ切替ボタン2 -->
      <article id="ji-tab-2" class="c-tab__content jc_tabContent02">
        <div class="c-tab__image">
          <img src="https://buff-design.com/demo/img/shutterstock_365414408.jpg">
        </div>
      </article>

    </section>

  </section>
  <script src="../js/tab.js"></script>
<?php include("../footer.php"); ?>