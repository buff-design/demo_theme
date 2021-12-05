<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/slider.php';
  $title = 'スライダー';
  $image = 'https://buff-design.com/demo/img/shutterstock_1165873744.jpg';
  include("../header.php"); 
?>

  <section class="c-slider">
    <div class="c-slider__head"></div>
    <div class="c-slider__inner">
      <div class="change-btn-wrapper">
        <div class="change-btn prev-btn">← 前へ</div>
        <div class="change-btn next-btn">次へ →</div>
      </div>

      <ul class="slides">
        <li class="slide active"><img src="https://buff-design.com/demo/img/shutterstock_1833221329.jpg"></li>
        <li class="slide"><img src="https://buff-design.com/demo/img/shutterstock_1165873744.jpg"></li>
        <li class="slide"><img src="https://buff-design.com/demo/img/shutterstock_394814620.jpg"></li>
        <li class="slide"><img src="https://buff-design.com/demo/img/shutterstock_365414408.jpg"></li>
        <li class="slide"><img src="https://buff-design.com/demo/img/shutterstock_675503758.jpg"></li>
      </ul>

      <div class="index-btn-wrapper">
        <div class="index-btn">1</div>
        <div class="index-btn">2</div>
        <div class="index-btn">3</div>
        <div class="index-btn">4</div>
        <div class="index-btn">5</div>
      </div>
    </div>
  </section>
  <script src="../js/slider.js"></script>
<?php include("../footer.php"); ?>