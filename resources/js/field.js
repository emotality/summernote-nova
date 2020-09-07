Nova.booting((Vue, router) => {
    Vue.component('index-summernote-nova', require('./components/IndexField'));
    Vue.component('detail-summernote-nova', require('./components/DetailField'));
    Vue.component('form-summernote-nova', require('./components/FormField'));
});
