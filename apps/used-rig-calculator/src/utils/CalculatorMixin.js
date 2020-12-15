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
      const storedOptions = window.localStorage.getItem(this.getAppName() + '_options');
      if (storedOptions) {
        this.options = JSON.parse(storedOptions)
      }
    },
    formatMoney(val, locale = 'sv-SE', suffix = ' kr', prefix = '') {
      return (prefix || '') + new Intl.NumberFormat(locale, {
        style: 'decimal',
        maximumFractionDigits: 0
      }).format(val) + (suffix || '')
    },
    saveOptions(options) {
      window.localStorage.setItem(this.getAppName() + '_options', JSON.stringify(options))
    },
    getAppName() {
      return require('../../package.json').name
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
