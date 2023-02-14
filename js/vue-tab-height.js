const { createApp } = Vue

createApp ({
  data() {
    return {
      isActive: '1',
      isMounted: false
    }
  },
  methods: {
    isSelect: function (num = '1') {
      this.isActive = num;

      this.$nextTick(function() {
        const classNameList = [
            '.jc-match1',
            '.jc-match2',
            '.jc-match3',
            '.jc-match4',
            '.jc-match5'
        ];

        const setMaxHeight = (targetClassName) => {
            const targetList = document.querySelectorAll(targetClassName);
            const targetMaxHeight = [...targetList].map(target => target.clientHeight).reduce((acc, value) => acc > value ? acc : value, 0);
            Array.prototype.forEach.call(targetList, target => target.style.height = `${targetMaxHeight}px`);
        }

        classNameList.forEach(className => {
            setMaxHeight(className);
        });
      })
    }
  },
  mounted() {
    this.isSelect()
  }
}).mount('#tab')