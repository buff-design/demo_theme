<?php 
  $description = 'jQueryサンプルを無料配信中';
  $keywords = 'WordPress,php,css,sacc,scss,jQuery,html,javascript';
  $sitename = 'buff design';
  $url = 'https://demo.buff-design.com/tpl/vue-tab.php';
  $title = 'タブ切替';
  $image = 'https://buff-design.com/demo/img/shutterstock_1765143629.png';
  include("../header.php"); 
?>
  <section class="l-section-wrapper">
    <div id="tab">
      <ul class="tabMenu">
        <li @click="isSelect('1')" v-bind:class="{'active': isActive === '1'}">All</li>
        <li @click="isSelect('2')" v-bind:class="{'active': isActive === '2'}">News</li>
        <li @click="isSelect('3')" v-bind:class="{'active': isActive === '3'}">Event</li>
      </ul>
      <div class="tabContents">
        <div v-if="isActive === '1'">Tab All</div>
        <div v-else-if="isActive === '2'">Tab News</div>
        <div v-else-if="isActive === '3'">Tab Event</div>
      </div>
    </div>
  </section>
  <script src="../js/vue-tab.js"></script>
<?php include("../footer.php"); ?>