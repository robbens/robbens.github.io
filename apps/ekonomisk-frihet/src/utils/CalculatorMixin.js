export default {
  created() {
    this.options = JSON.parse(JSON.stringify(this.defaultOptions))

    this.restoreOptions()
    this.calculateResult()
  },
  data() {
    return {
      options: null,
    }
  },
  watch: {
    options: {
      deep: true,
      handler(val) {
        this.saveOptions(val)
        this.calculateResult()
      }
    },
  },
  methods: {
    calculateResult() {},
    restoreOptions() {
      const storedOptions = window.localStorage.getItem('options');
      if (storedOptions) {
        this.options = JSON.parse(storedOptions)
      }
    },
    formatMoney(val) {
      return new Intl.NumberFormat('sv-SE', {
        style: 'decimal',
        maximumFractionDigits: 0
      }).format(val) + ' kr'
    },
    saveOptions(options) {
      window.localStorage.setItem('options', JSON.stringify(options))
    },
    resetOptions() {
      if (!confirm('Är du säker på att du vill ta bort dina egna inställningar och börja om från början?')) {
        return
      }

      window.localStorage.removeItem('options')
      this.options = JSON.parse(JSON.stringify(this.defaultOptions))
    },
  },
}
