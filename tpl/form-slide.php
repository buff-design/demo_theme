<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://buff-design.com/sample/form-slide.php';
  $title = 'フォームスライダー';
  include("../header.php"); 
?>

  <section class="l-section">
    <form action="">
      <div class="c-form-slider">
        <div class="c-form-slider__inner">
          <h2 class="c-form-slider__title">ご登録はこちらから</h2>
          <ul class="c-form-slider__index-btn-wrapper">
            <li class="index-btn current">1</li>
            <li class="index-btn">2</li>
            <li class="index-btn">3</li>
            <li class="index-btn">4</li>
          </ul>
          <ul class="slides">
            <li class="slide active">
              <div class="">
                <span class="c-form-slider__slide-caution">必須</span>
                <span class="c-form-slider__slide-subtitle">希望雇用形態</span>
              </div>
              <ul class="c-form-slider__slide-inner">
                <li class="">
                  <div>
                    <input type="radio" id="FULL" name="q1" value="FULL">
                    <label for="FULL">正社員</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="PART" name="q1" value="PART"> 
                    <label for="PART">パート</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="TEMP" name="q1" value="TEMP"> 
                    <label for="TEMP">派遣</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="PERM" name="q1" value="PERM"> 
                    <label for="PERM">紹介予定派遣</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="NONE" name="q1" value="NONE"> 
                    <label for="NONE">不問</label>
                  </div>
                </li>
              </ul>
            </li>
            <li class="slide">
              <div class="">
                <span class="c-form-slider__slide-caution">必須</span>
                <span class="c-form-slider__slide-subtitle">希望就業時期</span>
              </div>
              <ul class="c-form-slider__slide-inner">
                <li class="">
                  <div>
                    <input type="radio" id="ALL" name="q2" value="ALL">
                    <label for="ALL">よい求人があればいつでも</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="3MO" name="q2" value="3MO"> 
                    <label for="3MO">3ヶ月以内</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="6MO" name="q2" value="6MO"> 
                    <label for="6MO">6ヶ月以内</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="12MO" name="q2" value="12MO"> 
                    <label for="12MO">12ヶ月以内</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="radio" id="1YR" name="q2" value="1YR"> 
                    <label for="1YR">1年以上</label>
                  </div>
                </li>
              </ul>
            </li>
            <li class="slide">
              <div class="">
                <span class="c-form-slider__slide-attention">任意</span>
                <span class="c-form-slider__slide-subtitle">希望業種</span>
              </div>
              <ul class="c-form-slider__slide-inner">
                <li class="">
                  <div>
                    <input type="checkbox" id="HOSP" name="q3" value="HOSP">
                    <label for="HOSP">病院</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="checkbox" id="PHARM" name="q3" value="PHARM"> 
                    <label for="PHARM">薬局</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="checkbox" id="DRUG" name="q3" value="DRUG"> 
                    <label for="DRUG">ドラッグストア</label>
                  </div>
                </li>
                <li class="">
                  <div>
                    <input type="checkbox" id="ETC" name="q3" value="ETC"> 
                    <label for="ETC">その他</label>
                  </div>
                </li>
              </ul>
            </li>
            <li class="slide">
              <p class="c-form-slider__fix">Congratulation</p>
            </li>
          </ul>
          <div class="change-btn-wrapper">
            <div class="change-btn prev-btn">
              <button type="button">← 前へ</button>
            </div>
            <div class="change-btn next-btn">
              <button type="button" name="nextBtn" disabled>次へ →</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
<script src="../js/formSlider.js"></script>
<?php include("../footer.php"); ?>