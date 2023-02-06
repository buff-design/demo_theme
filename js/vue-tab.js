const { createApp } = Vue

createApp ({
  data() {
    return {
      isActive: '1'
    }
  },
  methods: {
    isSelect: function (num) {
      this.isActive = num;
    }
  }
}).mount('#tab')

// new Vue({
//   el: '#tab',
//   data: {
//     isActive: '1'
//   },
//   methods: {
//     isSelect: function (num) {
//       this.isActive = num;
//     }
//   }
// })