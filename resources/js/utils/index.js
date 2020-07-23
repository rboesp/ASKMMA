import moment from 'moment';

export const formatNullable = (value) => {
    if (typeof value === `number`) {
        return Math.ceil(value);
    }
    if (!value && value !== 0) {
        return `N/A`;
    }
    return value;
};

export const formatDate = (date, format = 'l') => {
    const d = moment(date);
    if (!d.isValid()) {
        return formatNullable(date);
    }
    return d.format(format);
};

/**
 * @description formats number based in the format (xxx) xxx-xxx
 * Response from stackoverflow
 * @url https://stackoverflow.com/a/8358141/8392469
 * @param phoneNumberString
 * @returns {*}
 */

export const formatPhoneNumber = (phoneNumberString) => {
    const cleaned = ('' + phoneNumberString).replace(/\D/g, '');
    const match = cleaned.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
    if (match) {
        const intlCode = match[1] ? '+1 ' : '';
        return [intlCode, '(', match[2], ') ', match[3], '-', match[4]].join('');
    }
    return null;
};

export const capitalizeFirstLetter = (string) => {
    return string.charAt(0).toUpperCase() + string.slice(1);
};

export const parseRawNumber = (value) => {
    return parseFloat((value * 0.01).toFixed(2));
};

export const formatMoney = (value) => {
    return parseRawNumber(value).toLocaleString('US', {
        style: 'currency',
        currency: 'USD',
    });
};

export const isNullOrUndefined = (item, string = false) => {
    if (string) return item === undefined || item === null || item === ''.trim();
    return item === undefined || item === null;
};

export const clone = (object) => JSON.parse(JSON.stringify(object));

/**
 * Returns the value at path of the given object, if the value
 * is null or undefined defayltVal will be returned instead
 * @param {*} path
 * @param {*} obj
 * @param {*} defaultVal
 */
export const objectGet = (path, obj, defaultVal = null) => {
    return path.split('.').reduce((obj, path) => {
        return obj ? obj[path] : defaultVal;
    }, obj);
};

export function generateUUID() {
    let dt = new Date().getTime();
    const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        const r = (dt + Math.random() * 16) % 16 | 0;
        dt = Math.floor(dt / 16);
        return (c === 'x' ? r : (r & 0x3) | 0x8).toString(16);
    });
    return uuid;
}

export const isObject = (val) => typeof val === 'object';
