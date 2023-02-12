Vue.component('accordion', {
  props: ['theme'],

  template:`<div class="accordion" v-bind:class="theme">
    <div class="header" v-on:click="toggle">
      <slot name="header">HEADER</slot>
      <i class="fa fa-2x fa-angle-down header-icon" v-bind:class="{ rotate: show }"></i>
    </div>
    <transition
      v-on:before-enter="onBeforeEnter" v-on:enter="onEnter"
      v-on:before-leave="onBeforeLeave" v-on:leave="onLeave">
      <div class="body" v-show="show">
        <div class="body-inner">
          <slot>
            Vue.jsを利用して簡単なアコーディオンパネルを作成します。<br>
            <br>
              再利用可能なコンポーネントの作り方や、トランジションの実装の仕方を学びます。
          </slot>
        </div>
      </div>
    </transition>
  </div>`,

  data: function() {
    return {
      show: false
    };
  },

  methods: {
    toggle: function() {
      this.show = !this.show;
    },
    onBeforeEnter: function(el) {
      el.style.height = 0;
    },
    onEnter: function(el) {
      el.style.height = el.scrollHeight + 'px';
    },
    onBeforeLeave: function(el) {
      el.style.height = el.scrollHeight + 'px';
    },
    onLeave: function(el) {
      el.style.height = 0;
    },
  }
});

new Vue({
  el: '#app'
});