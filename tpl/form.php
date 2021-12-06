<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/form.php';
  $title = 'フォーム';
  $image = 'https://buff-design.com/demo/img/js.jpg';
  include("../header.php"); 
?>

  <section class="c-form">
    <div class="c-form__head"></div>
    <div class="c-form__inner">

      <div class="section-title">
        <h3>JavaScript</h3>  
      </div>

      <p class="call-to-action">学びたいフレームワークをクリック！</p>

      <div class="option-wrapper">
        <div class="option-group">
          <img class="option-image" src="https://buff-design.com/demo/img/react.jpg">
          <div class="option-btn" data-option="1">1. React</div>
        </div>
        <div class="option-group">
          <img class="option-image" src="https://buff-design.com/demo/img/angular.jpg">
          <div class="option-btn" data-option="2">2. Angular</div>
        </div>
        <div class="option-group">
          <img class="option-image" src="https://buff-design.com/demo/img/vue.jpg">
          <div class="option-btn" data-option="3">3. Vue.js</div>
        </div>
      </div>

      <form id="form" class="form">
        <div class="form-group">
          <div>フレームワーク：</div>
          <select id="select-form" class="select-form">
            <option value="0">選択してください</option>
            <option value="1">1. React</option>
            <option value="2">2. Angular</option>
            <option value="3">3. Vue.js</option>
          </select>  
        </div>
        <div class="form-group">
          <p id="error-message" class="error-message"></p>
          <div>理由：</div>
          <textarea id="text-form" class="text-form"></textarea>  
        </div>
        <button type="submit" class="btn btn-submit">送信</button>
      </form>

      <div class="output-wrapper">
        <h4>結果</h4>
        <div class="output-inner">
          <p class="output-item">好きなフレームワーク：<span id="output-select"></span></p>
          <p class="output-item">理由：<span id="output-text"></span></p>  
        </div>
      </div>


    </div>
  </section>
  <script src="../js/form.js"></script>
<?php include("../footer.php"); ?>