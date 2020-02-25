/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

//member/bosyu/create
var $children = $('.children');
var original = $children.html();

$('.parent').change(function () {

    var val1 = $(this).val();

    $children.html(original).find('option').each(function () {
        var val2 = $(this).data('val');
        if (val1 != val2) {
            $(this).not(':first-child').remove();
        }
    });

    if ($(this).val() == "") {
        $children.attr('disabled', 'disabled');
    } else {
        $children.removeAttr('disabled');
    }

});

$(window).bind('scroll', function () {
    previousTop: 0;
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
        $('header').addClass('visible');
    } else {
        $('header').removeClass('visible');
    }
    this.previousTop = currentTop;
});

/*ヘッダー固定---------------------------*/
$(function () {
    var $win = $(window),
        $main = $('main'),
        $nav = $('nav'),
        navHeight = $nav.outerHeight(),
        navPos = $nav.offset().top,
        fixedClass = 'is-fixed';

    $win.on('load scroll', function () {
        var value = $(this).scrollTop();
        if (value > navPos) {
            $nav.addClass(fixedClass);
            $main.css('margin-top', navHeight);
        } else {
            $nav.removeClass(fixedClass);
            $main.css('margin-top', '0');
        }
    });
});
