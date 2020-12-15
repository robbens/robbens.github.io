<template>
  <span
      class="border leading-10 rounded flex ml-auto"
      :class="{'pr-3': valueSuffix, 'pl-3': valuePrefix}"
  >

    <span class="pr-1 mr-auto" v-if="valuePrefix">
      {{ valuePrefix }}
    </span>

    <input
      class="w-full pl-3 min-w-0 rounded rounded-r-none"
      :type="$attrs.type || 'text'"
      ref="input"
      v-bind="$attrs"
      :value="computedValue"
      @input="onInput"
    >

    <span class="pl-1 ml-auto" v-if="valueSuffix">
      {{ valueSuffix }}
    </span>
  </span>
</template>

<script>
export default {
  name: "BaseInput",
  inheritAttrs: false,
  props: {
    value: {
      type: [String, Number, Date],
      default: ""
    },
    valueSuffix: {
      type: String,
      default: null,
      required: false
    },
    valuePrefix: {
      type: String,
      default: null,
      required: false
    }
  },
  data() {
    return {
      newValue: this.value,
      hasError: false
    };
  },
  watch: {
    /**
     * When v-model is changed:
     *   1. Set internal value.
     */
    value(value) {
      this.newValue = value;
    }
  },
  computed: {
    computedValue: {
      get() {
        return this.newValue;
      },
      set(value) {
        this.newValue = value;
        this.$emit("input", value);
      }
    }
  },
  methods: {
    /**
     * Input's 'input' event listener, 'nextTick' is used to prevent event firing
     * before ui update, helps when using masks (Cleavejs and potentially others).
     */
    onInput(event) {
      this.$nextTick(() => {
        if (event.target) {
          this.computedValue = event.target.value;
        }
      });
    }
  }
};
</script>
