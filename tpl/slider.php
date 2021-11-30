<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://buff-design.com/sample/slider.php';
  $title = 'スライダー';
  $image = 'https://buff-design.com/demo/img/shutterstock_1165873744.jpg';
  include("../header.php"); 
?>

  <section class="c-accordion-b">
    <div class="c-accordion-b__head"></div>
    <div class="c-accordion-b__hero">
      <img src="https://buff-design.com/demo/img/accordion_qa.jpg" alt="">
    </div>
    <div class="c-accordion-b__wrapper">
      <div class="c-accordion-b__container">
        <div class="c-accordion-b__title">
          <h2>Q&A</h2>
        </div>
        <div class="c-accordion-b__area">
          <div class="c-accordion_Trigger jc-accTrigger">
            <div class="c-accordion_Trigger__title">アコーディオンの準備(1)</div>
            <div class="c-accordion_Trigger_icon jc-accTrigger_icon">
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="c-accordion_Content jc-accContent">
            <ul>
              <li>答えの部分はCSSで非表示にします。</li>
              <li>3つの質問部分には同一のclass名を付与。</li>
              <li>それらのclickイベントを作ります。</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/slider.js"></script>
<?php include("../footer.php"); ?>