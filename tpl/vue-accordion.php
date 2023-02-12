<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/vue-tab.php';
  $title = 'アコーディオンパネル';
  $image = 'https://buff-design.com/demo/img/shutterstock_1765143629.png';
  include("../header.php"); 
?>
  <section class="l-section-wrapper">
    <div id="app">
      <accordion></accordion>
      <accordion theme="secondary">
        <div slot="header">ヘッダー部分に差し込まれます①</div>
        外からアコーディオンの内容を渡しています。
      </accordion>
      <accordion theme="tertiary">
        <div slot="header">ヘッダー部分に差し込まれます②</div>
        ボディ部分に差し込まれます。
      </accordion>
    </div>
  </section>
  <script src="../js/vue-accordion.js"></script>
<?php include("../footer.php"); ?>