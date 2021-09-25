<?php 
  $description = 'php・WordPress・jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.creative-check.net/index.php';
  $title = 'ホーム';
  $image = 'https://buff-design.com/wp/wp-content/themes/bd/assets/images/common/logo.svg';
  include("header.php"); 
?>

  <section class="l-contents">
    <div class="l-contents__list_article">
      <ul>
        <li><a href="tpl/modal.php">モーダルウィンドウ</a></li>
        <li><a href="tpl/modal-scroll.php">モーダルウィンドウ（横スクロール）</a></li>
        <li><a href="tpl/form-slide.php">フォームスライダー</a></li>
      </ul>
    </div>
  </section>

<?php include("footer.php"); ?>
