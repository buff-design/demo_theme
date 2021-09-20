<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://buff-design.com/sample/modal-scroll.php';
  $title = 'モーダルウィンドウ（横スクロール）';
  $image = 'https://buff-design.com/sample/img/website_login.svg';
  include("../header.php"); 
?>

  <section>
    <div class="c-modal-scroll">
      <div id="ji-modalScroll" class="c-modal-scroll__container"></div>
      <table class="c-modal-scroll__wrapper">
        <tr>
          <th>作業期間</th>
          <th>プロジェクト概要</th>
          <th>ポジション</th>
          <th>機種・OS</th>
          <th>スキル</th>
          <th>開発ツール</th>
          <th>開発工程</th>
        </tr>
        <tr>
          <td>1年</td>
          <td>コンシュマーバトルゲームの開発</td>
          <td>フロント<br>エンジニア</td>
          <td>Mac</td>
          <td>HTML5<br>CSS3<br>javascript</td>
          <td>Illustrator<br>Photoshop<br>VScode</td>
          <td>要件定義<br>基本設計<br>詳細設計<br>実装<br>単体テスト<br>結合テスト<br>システムテスト</td>
        </tr>
        <tr>
          <td>4年2ヶ月</td>
          <td>ソーシャルゲームの開発</td>
          <td>フラッシャー</td>
          <td>Mac</td>
          <td>HTML5<br>CSS3<br>javascript<br>Flash</td>
          <td>Illustrator<br>Photoshop<br>Flash</td>
          <td>要件定義<br>基本設計<br>詳細設計<br>実装<br>単体テスト<br>結合テスト<br>システムテスト</td>
        </tr>
        <tr>
          <td>1年6ヶ月</td>
          <td>WordPress開発</td>
          <td>フロント<br>エンジニア</td>
          <td>Mac</td>
          <td>HTML5<br>CSS3<br>javascript<br>php</td>
          <td>xd<br>Photoshop<br>VScode<br>WordPress</td>
          <td>要件定義<br>基本設計<br>詳細設計<br>実装<br>単体テスト<br>結合テスト<br>システムテスト</td>
        </tr>
      </table>
    </div>
  </section>
  <script src="../js/modal-scroll.js"></script>
<?php include("../footer.php"); ?>