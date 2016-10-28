/**
 * Created by alcanderian on 29/10/2016.
 */

var do_respon = function () {
    if (document.getElementById("bg").offsetWidth < 768) {
        $('#dummy_1').removeClass('col-sm-6');
        $('#dummy_2').removeClass('col-sm-6');
        $('#form_1').removeClass('col-sm-6');
        $('#form_2').removeClass('col-sm-6');
        $('#form_1').addClass('col-sm-12');
        $('#form_2').addClass('col-sm-12');
    }
    if(document.getElementById("bg").offsetWidth < 540) {
        $('.labels').css({"text-align": "left"});
        $('.labels').removeClass('col-sm-3');
        $('.labels').addClass('col-sm-12');
        $('.input').removeClass('col-sm-9');
        $('#special-input ').removeClass('col-sm-9');
        $('.input').addClass('col-sm-12');
        $('#special-input ').addClass('col-sm-12');
        $('#sub-btn').removeClass('col-sm-offset-3');
        $('#sub-btn').removeClass('col-sm-9');
        $('#sub-btn').addClass('col-sm-12');
    }
};

var restore = function () {

    if (document.getElementById("bg").offsetWidth > 768) {
        $('#dummy_1').addClass('col-sm-6');
        $('#dummy_2').addClass('col-sm-6');
        $('#form_1').addClass('col-sm-6');
        $('#form_2').addClass('col-sm-6');
        $('#form_1').removeClass('col-sm-12');
        $('#form_2').removeClass('col-sm-12');
    }
    if(document.getElementById("bg").offsetWidth > 540) {
        $('.labels').css({"text-align": "right"});
        $('.labels').addClass('col-sm-3');
        $('.labels').removeClass('col-sm-12');
        $('.input').addClass('col-sm-9');
        $('#special-input ').addClass('col-sm-9');
        $('.input').removeClass('col-sm-12');
        $('#special-input ').removeClass('col-sm-12');
        $('#sub-btn').addClass('col-sm-offset-3');
        $('#sub-btn').addClass('col-sm-9');
        $('#sub-btn').removeClass('col-sm-12');
    }
};

$(document).ready(function () {
    $('body').responsive({
        extraSmall: function () {
            do_respon();
        },
        small: function () {
            do_respon();
        },
        medium: function () {
            restore();
        },
        large: function () {
            restore();
        }
    });
});