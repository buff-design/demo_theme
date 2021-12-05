<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/accordion-b.php';
  $title = 'アコーディオンB';
  $image = 'https://buff-design.com/demo/img/accordion_qa.jpg';
  include("../header.php"); 
?>

  <section class="c-accordion-b">
    <div class="c-accordion-b__head"></div>
      <div class="c-accordion-b__inner">
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
            <div class="c-accordion-b__area">
              <div class="c-accordion_Trigger jc-accTrigger">
                <div class="c-accordion_Trigger__title">アコーディオンの準備(2)</div>
                <div class="c-accordion_Trigger_icon jc-accTrigger_icon">
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="c-accordion_Content jc-accContent">
                <ul>
                  <li>hasClassメソッドは、引数に指定したクラスを、オブジェクトが持っているか判定するときに使用します。オブジェクトがそのクラスを持っていればtrue、持っていなければfalseを返します。</li>
                </ul>
              </div>
            </div>
            <div class="c-accordion-b__area">
              <div class="c-accordion_Trigger jc-accTrigger">
                <div class="c-accordion_Trigger__title">アコーディオンの完成</div>
                <div class="c-accordion_Trigger_icon jc-accTrigger_icon">
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="c-accordion_Content jc-accContent">
                <ul>
                  <li>if文がtrueの時（下図で答えが表示されている時）、答えの部分はslideUpメソッドを用いて隠し、質問の右にある「-」記号は「+」記号に書き換えます。反対にif文がfalseの時は、答えをslideDownメソッドで表示し、「+」記号は「-」に書き換えましょう。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="../js/accordion.js"></script>
<?php include("../footer.php"); ?>