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
        <div v-if="isActive === '1'">
          <div class="tabContents__wrapper">
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">AAAAA AAA</div>
              <div class="tabContents__intro jc-match2">FFFFFFFFFFFF FFFF</div>
              <div class="tabContents__text jc-match3">KK KKKKK KKKKK KKKKK KKKKK KKKKK KKKKK KKKKK KKK</div>
            </div>
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">BBBBBBB BBBBBBBBbbBBBBBBB BBBBBBBB</div>
              <div class="tabContents__intro jc-match2">GGGGG GGG</div>
              <div class="tabContents__text jc-match3">LLLLL LLLLLLLLLL LLLLLLLLL</div>
            </div>
          </div>
        </div>
        <div v-else-if="isActive === '2'">
          <div class="tabContents__wrapper">
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">CC CCCCCC</div>
              <div class="tabContents__intro jc-match2">HHH HHHHHHHHHHHHH</div>
              <div class="tabContents__text jc-match3">MM MMMMMMMMM MMMM</div>
              <div class="tabContents__note jc-match4">RRRRRRRRRRRRR R</div>
            </div>
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">DD DDDDDDDDDDDDDDD DD</div>
              <div class="tabContents__intro jc-match2">IIIII</div>
              <div class="tabContents__text jc-match3">NNNNNNNNNNN NNNNNNN NNNNN</div>
              <div class="tabContents__note jc-match4">SSSSSSSSSSSSSSSSSSSSSSSSSSSS</div>
            </div>
          </div>
        </div>
        <div v-else-if="isActive === '3'">
          <div class="tabContents__wrapper">
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">EEEEEE EEEEEEEEEEEEEEE</div>
              <div class="tabContents__intro jc-match2">JJJJJJJJJJ JJJJ</div>
              <div class="tabContents__text jc-match3">OO OOOOOO OOOOOO OOOOOO OOOOOO OOOOOO</div>
              <div class="tabContents__note jc-match4">TTTTTTTTTTTT TTTTTTT TTTTTTTT</div>
              <div class="tabContents__button jc-match5">ZZZZZ</div>
            </div>
            <div class="tabContents__article">
              <div class="tabContents__title jc-match1">AAAAA AAA</div>
              <div class="tabContents__intro jc-match2">FFFFFFFFFFFF FFFF</div>
              <div class="tabContents__text jc-match3">KK KKKKK KKKKK KKKKK KKKKK KKKKK KKKKK KKKKK KKK</div>
              <div class="tabContents__note jc-match4">PPPPPPPPPPPPP PPPPPPPPPPP</div>
              <div class="tabContents__button jc-match5">UUUUUUUUUUUUU UUUUUUUUUU</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/vue-tab-height.js"></script>
<?php include("../footer.php"); ?>