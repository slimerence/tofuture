window._ = require('lodash');
window.Popper = require('popper.js').default;

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue = require('vue');
// 加载Element UI 库
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
// import { Loading } from 'element-ui';
Vue.use(ElementUI);

require('!style-loader!css-loader!@fancyapps/fancybox/dist/jquery.fancybox.css')
require('@fancyapps/fancybox');

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

$(document).ready(function(){
    // 联系我们功能
    if($('#submit-contact-us-btn').length > 0){
        let theSubmitButton = $('#submit-contact-us-btn');
        theSubmitButton.on('click',function(e){
            e.preventDefault();
            let inputs = $('input');
            let names = [];
            let values = [];
            $.each(inputs, function(idx, input){
                let theInput = $(input);
                if(theInput.attr('name')){
                    names.push(theInput.attr('name'));
                    values.push(theInput.val());
                }
            });

            theSubmitButton.addClass('is-loading');
            axios.post('/contact-us',{
                lead:{
                    name: $('#input-name').val(),
                    email: $('#input-email').val(),
                    phone: $('#input-phone').val(),
                    message: $('#input-message').val()
                }
            }).then(function(res){
                if(res.data.error_no == 100){
                    // 成功
                    $('#txt-on-success').css('display','block');
                    theSubmitButton.css('display','none');
                }else{
                    $('#txt-on-fail').css('display','block');
                }
                theSubmitButton.removeClass('is-loading');
                // 检查是否需要把最新的留言放到Testimonials中
                if($('.testimonials-list').length > 0){
                    let testimonials = $('.testimonials-list');
                    let h = '<p><span class="has-text-link">' +$('#input-name').val()+ ':</span> ' + $('#input-message').val() + '</p>';
                    testimonials.prepend($(h));
                }
            })
        });
    }
    if($('.count').length > 0 ){
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }

    if($('#single_image').length>0){
        $("a#single_image").fancybox();

    }
    if($('.group').length>0) {
        $("a.group").fancybox({
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'speedIn': 600,
            'speedOut': 200,
            'overlayShow': false
        });
    }

    if($('.slick-img').length > 0) {
        $('.slick-img').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows:false,
            focusOnSelect:true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    if($('#verify').length >0 ){
        $('#verify').codeVerify({
            //常规验证码type=1， 运算验证码type=2
            type : 1,
            //验证码宽度
            width : '50%',
            //验证码高度
            height : '40px',
            fontSize : '20px',
            codeLength : 4,
            //......更多参数设置请查阅文档
            //提交按钮的id名称
            btnId : 'online-btn',
            //验证成功以后的回调
            success : function() {
                $('#login-check-false').css('display','none');
                $('#login-check-success').css('display','block');
                $('#online-login-form').off('submit').submit();
            },
            error : function() {
                $('#online-login-form').submit(function (e) {
                    e.preventDefault();
                });
                $('#login-check-false').css('display','block');

            }
        });
    }


});
