export default {
    props: {
        value: {
            type: [Object, String],
            default: () => ({}),
        },
    },
    data: () => ({
        form: null,
    }),
    watch: {
        value: {
            deep: true,
            handler(value) {
                this.form = value;
            },
        },
        form: {
            deep: true,
            handler(value) {
                this.$emit('input', value);
            },
        },
    },
    created() {
        this.form = this.value;
    },
};
