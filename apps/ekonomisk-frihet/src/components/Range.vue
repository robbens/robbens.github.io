<script>
  export default {
    inheritAttrs: false,
    props: ['label', 'value', 'valueSuffix'],
    computed: {
      computedValue() {
        if (this.valueSuffix.includes('kr')) {
            return this.formatMoney(this.value) || 0
        }

        return this.value || 0
      }
    },
    methods: {
      formatMoney(val) {
        if (!val) {
          return 0
        }

        return new Intl.NumberFormat('sv-SE', {
          style: 'decimal',
          maximumFractionDigits: 0
        }).format(val)
      },
      async onChange(event) {
        const value = parseFloat(event.target.value.replace(' ', ''))

        await this.$emit('input', value || 0)
      },
    },
  }
</script>

<template>
    <div class="box">
        <label class="font-medium text-gray-800 flex items-center mb-2" :for="label">
            <span class="flex-shrink-0 pr-2">{{ label }}</span>

            <span class="border pr-3 leading-10 rounded flex w-32 ml-auto">
                <input
                        type="text"
                        :id="label"
                        v-bind="$attrs"
                        :value="computedValue"
                        min="0"
                        @input="onChange"
                        class="w-full pl-3 min-w-0 rounded rounded-r-none"
                >

                <span class="pl-1 ml-auto">
                    {{ valueSuffix }}
                </span>
            </span>
        </label>

        <div>
            <div class="relative">
                <input
                        class="range-slider__range w-full"
                        type="range"
                        ref="range"
                        :value="value"
                        @input="onChange"
                        v-bind="$attrs"
                >
            </div>
        </div>
    </div>
</template>

<style scoped>
    .range-slider__range {
        -webkit-appearance: none;
        width: 100%;
        height: 6px;
        border-radius: 5px;
        background: #d7dcdf;
        outline: none;
        padding: 0;
        margin: 0;
    }
    .range-slider__range::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #2c3e50;
        cursor: pointer;
        -webkit-transition: background .15s ease-in-out;
        transition: background .15s ease-in-out;
    }
    .range-slider__range::-webkit-slider-thumb:hover {
        background: #1abc9c;
    }
    .range-slider__range:active::-webkit-slider-thumb {
        background: #1abc9c;
    }
    .range-slider__range::-moz-range-thumb {
        width: 16px;
        height: 16px;
        border: 0;
        border-radius: 50%;
        background: #2c3e50;
        cursor: pointer;
        -moz-transition: background .15s ease-in-out;
        transition: background .15s ease-in-out;
    }
    .range-slider__range::-moz-range-thumb:hover {
        background: #1abc9c;
    }
    .range-slider__range:active::-moz-range-thumb {
        background: #1abc9c;
    }
    .range-slider__range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 3px #fff, 0 0 0 6px #1abc9c;
    }

    ::-moz-range-track {
        background: #d7dcdf;
        border: 0;
    }

    input::-moz-focus-inner,
    input::-moz-focus-outer {
        border: 0;
    }
</style>
