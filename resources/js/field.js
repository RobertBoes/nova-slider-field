Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-slider-field', require('./components/IndexField'));
    Vue.component('detail-nova-slider-field', require('./components/DetailField'));
    Vue.component('form-nova-slider-field', require('./components/FormField'));
})
