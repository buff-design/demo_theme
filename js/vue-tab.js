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

// const { createApp } = Vue

// createApp ({
//   data() {
//     return {
//       isActive: '1',
//       isMounted: false
//     }
//   },
//   methods: {
//     isSelect: function (num = '1') {
//       this.isActive = num;
//     }
//   },
//   mounted() {
//     this.isSelect()
//   }
// }).mount('#tab')

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