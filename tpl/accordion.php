<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/accordion.php';
  $title = 'アコーディオンA';
  $image = 'https://buff-design.com/demo/img/accordion_faq.svg';
  include("../header.php"); 
?>

  <section class="c-accordion">
    <div class="c-accordion__head"></div>
      <div class="c-accordion__inner">
        <div class="c-accordion__hero">
          <img src="https://buff-design.com/demo/img/accordion_faq.svg" alt="">
        </div>
        <div class="c-accordion__wrapper">
          <div class="c-accordion__container">
            <div class="c-accordion__title">
              <h2>FAQ</h2>
            </div>
            <div class="c-accordion__faq">
              <ul id="c-accordion__faq-list">
                <li class="c-accordion__faq-list-item">
                  <h3 class="c-accordion__question">jQueryでアコーディオンメニューを作って見たいけど、やり方がわからない…</h3>
                  <span>+</span>
                  <div class="c-accordion__answer open">
                    <p>今日から使える簡単な実装方法をコード付きで解説します。</p>
                  </div>
                </li>
                <li class="c-accordion__faq-list-item">
                  <h3 class="c-accordion__question">HTML・CSSしかわからないけど大丈夫かな</h3>
                  <span>+</span>
                  <div class="c-accordion__answer">
                    <p>記事を読み終えるとアコーディオンメニューの実装方法が一通り理解でき、基礎的なメソッドを知っておけば簡単に作ることができます。</p>
                  </div>
                </li>
                <li class="c-accordion__faq-list-item">
                  <h3 class="c-accordion__question">簡単で色々なUI作成に応用できる便利なサンプルあるかな</h3>
                  <span>+</span>
                  <div class="c-accordion__answer">
                    <p>コピペ可能なサンプルものせておりますので、使い回しできるコードを知ることができます</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="../js/accordion.js"></script>
<?php include("../footer.php"); ?>