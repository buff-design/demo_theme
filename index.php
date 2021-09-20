<?php 
  $description = 'php・WordPress・jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://buff-design.com/sample/index.php';
  $title = 'ホーム';
  $image = 'https://buff-design.com/wp/wp-content/themes/bd/assets/images/common/logo.svg';
  include("header.php"); 
?>

  <section class="l-section">
    <div class="p-article">
      <ul>
        <li><a href="tpl/modal.php">モーダルウィンドウ</a></li>
        <li><a href="tpl/modal-scroll.php">モーダルウィンドウ（横スクロール）</a></li>
        <li><a href="tpl/form-slide.php">フォームスライダー</a></li>
      </ul>
    </div>
  </section>

<?php include("footer.php"); ?>
