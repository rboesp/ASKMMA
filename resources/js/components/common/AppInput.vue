<template>
  <div class="flex flex-col">
    <label v-if="label" :class="labelStyles()" class="leading-tight font-medium text-sm text-grey-500">
      {{ label }}
    </label>
    <input
      :type="type"
      :name="name"
      :for="forInput"
      :disabled="disabled"
      :placeholder="placeholder"
      :autocomplete="noAutoComplete ? 'off' : 'on'"
      :class="inputStyles()"
      :autofocus="autofocus"
      class="block w-full text-base font-normal bg-white border text-grey-700"
      @blur="onBlur"
    />
    <span
      v-if="hasErrors && _errors.length"
      class="text-xs text-red-light"
    >
      {{ _errors }}
    </span>
  </div>
</template>

<script>
import { makeTextInputHandler } from '../../utils/textInput'

export default {
  name: 'AppInput',

  props: {
    noAutoComplete: { type: Boolean, default: false },
    value: { type: [String, Number], default: null },
    label: { type: String, default: '' },
    labelClass: { type: String, default: '' },
    name: { type: String, default: null },
    forInput: { type: String, default: null },
    inputClass: { type: String, default: '' },
    onChange: { type: Function, default: () => () => {} },
    placeholder: { type: String, default: '' },
    type: { type: String, default: 'text' },
    hasErrors: { type: Boolean },
    autofocus: { type: Boolean, default: false },
    errors: { type: Object, default: null },
    prefix: { type: [String, Number, Boolean], default: false },
    disabled: { type: Boolean, default: false },
    paddingY: { default: '2', type: String },
    paddingX: { default: '2', type: String },
    mode: {
      type: String,
      default: 'raw',
      validator(value) {
        const validOptions = ['raw', 'currency', 'percentage', 'phone', 'card', 'zip', 'ccv', 'npn']
        return validOptions.includes(value)
      }
    }
  },

  computed: {
    _errors() {
      return this.errors
      // return this.parseErrors(this.errors)
    }
  },

  data: () => ({
    input: '',
    defaultClass: 'text-grey-700 leading-tight focus:outline-none rounded',
    errorClass: 'border-red-500'
  }),

  watch: {
    value(value) {
      this.inputHandler.setValue(value)
      this.$emit('input', value)
    }
  },

  mounted() {
    this.inputHandler = makeTextInputHandler(this.$el.querySelector('input'), {
      mode: this.mode,
      onValueChanged: this.onValueChanged,
      prefix: this.prefix
    })
    this.inputHandler.setValue(this.value)
  },

  beforeDestroy() {
    this.inputHandler.destroy()
  },

  methods: {
    onValueChanged({ rawValue }) {
      this._value = rawValue
      this.$emit('input', this._value)
    },
    labelStyles() {
      return this.labelClass ? this.labelClass : 'text-grey-700 text-xs font-semibold w-full block mb-2'
    },
    inputStyles() {
      const classes = {}
      classes[this.errorClass] = this.hasErrors
      classes[this.inputClass] = !!this.inputClass
      classes[this.defaultClass] = !this.inputClass
      classes['text-right'] = this.mode === 'currency'
      classes['cursor-not-allowed bg-grey-lighter'] = !!this.disabled
      classes[`py-${this.paddingY}`] = true
      classes[`px-${this.paddingX}`] = true
      return classes
    },
    onBlur() {
      this.$emit('input', this._value)
      if (this.errors) {
        this.errors.$touch()
      }
    },
    parseErrors($v) {
      if (!$v) return []
      return Object.keys($v.$params || {})
        .map(rule => {
          const { server } = $v.$params[rule]
          const valid = $v[rule]
          const errorObj = { valid, server, message: rule }
          if (server && !valid) {
            const { key, field } = $v.$params[rule]
            errorObj.message = this.errors[key][field][0]
          }
          return errorObj
        })
        .filter(error => !error.valid)
    }
  }
}
</script>
