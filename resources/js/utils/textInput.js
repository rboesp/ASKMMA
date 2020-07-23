/* eslint-disable no-useless-constructor */
import Cleave from 'cleave.js';
import AutoNumeric from 'autonumeric';
import { parseRawNumber } from './index';

class RawInputHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;

        this.onValueChanged = (e) => {
            const value = e.target.value;
            this.options.onValueChanged({ value, rawValue: value });
        };

        this.$el.addEventListener('change', this.onValueChanged);
        this.$el.addEventListener('input', this.onValueChanged);
    }

    setValue(value) {
        this.$el.value = value;
        this.options.onValueChanged({ value, rawValue: value });
    }

    destroy() {
        this.$el.removeEventListener('change', this.onValueChanged);
        this.$el.removeEventListener('input', this.onValueChanged);
    }
}

class CurrencyInputHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave(this.$el, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand',
            prefix: this.options.prefix,
            postfix: this.options.postfix || '',
            rawValueTrimPrefix: !!this.options.prefix,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue: rawValue * 100 });
            },
        });
    }

    setValue(value) {
        value = value || 0;
        value = new Intl.NumberFormat('en-US', {
            style: 'decimal',
            currency: 'USD',
            minimumFractionDigits: 2,
            maximumFractionDigits: 2,
            useGrouping: false,
        }).format(parseRawNumber(value));
        if (this.options.prefix) value = `${this.options.prefix}${value}`;
        this.$el.value = value;
        this.cleave.callOnValueChanged();
    }

    destroy() {
        this.cleave.destroy();
    }
}

class PercentageInputHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.instance = new AutoNumeric(this.$el, {
            allowDecimalPadding: 'floats',
            maximumValue: '100',
            minimumValue: '0',
            suffixText: '%',
            wheelStep: '1',
        });

        const onChange = () => {
            const value = this.instance.rawValue;
            const rawValue = value * 100;
            this.options.onValueChanged({ value, rawValue });
        };

        this.$el.addEventListener(AutoNumeric.events.rawValueModified, onChange);
    }

    setValue(value) {
        this.instance.set(parseRawNumber(value || 0));
    }

    destroy() {
        this.instance.remove();
    }
}

class PhoneHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave($el, {
            blocks: [0, 3, 3, 4],
            delimiters: ['(', ') ', '-'],
            numericOnly: true,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue });
            },
        });
    }

    setValue(value) {
        this.cleave.setRawValue(value);
    }

    destroy() {
        this.cleave.destroy();
    }
}

class CreditCardInputHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave(this.$el, {
            creditCard: true,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue });
            },
        });
    }

    setValue(value) {
        this.cleave.setRawValue(value);
    }

    destroy() {
        this.cleave.destroy();
    }
}

class ZipCodeHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave($el, {
            blocks: [5],
            numericOnly: true,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue });
            },
        });
    }

    setValue(value) {
        this.cleave.setRawValue(value);
    }

    destroy() {
        this.cleave.destroy();
    }
}

class NPNHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave($el, {
            blocks: [12],
            numericOnly: true,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue });
            },
        });
    }

    setValue(value) {
        this.cleave.setRawValue(value);
    }

    destroy() {
        this.cleave.destroy();
    }
}

class CreditCardValidationHandler {
    constructor($el, options) {
        this.$el = $el;
        this.options = options;
        this.cleave = new Cleave($el, {
            blocks: [3],
            numericOnly: true,
            onValueChanged: ({ target: { value, rawValue } }) => {
                this.options.onValueChanged({ value, rawValue });
            },
        });
    }

    setValue(value) {
        this.cleave.setRawValue(value);
    }

    destroy() {
        this.cleave.destroy();
    }
}

const inputHandlers = {
    raw: RawInputHandler,
    currency: CurrencyInputHandler,
    percentage: PercentageInputHandler,
    phone: PhoneHandler,
    card: CreditCardInputHandler,
    zip: ZipCodeHandler,
    npn: NPNHandler,
    ccv: CreditCardValidationHandler,
};

export const makeTextInputHandler = ($el, options) => {
    const { mode } = options;
    return new inputHandlers[mode]($el, options);
};
