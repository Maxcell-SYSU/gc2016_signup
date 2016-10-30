/**
 * Created by alcanderian on 30/10/2016.
 */
$(document).ready(function () {
    $('body').responsive({
        extraSmall: function () {
            if (document.getElementById("bg").offsetWidth <= 1024) {
                $('.dummy').removeClass('col-sm-3');
                $('.rep').removeClass('col-sm-6');
                $('.rep').removeClass('col-sm-offset-3');
                $('.rep').addClass('col-sm-12');
            }
        },
        small: function () {
            if (document.getElementById("bg").offsetWidth <= 1024) {
                $('.dummy').removeClass('col-sm-3');
                $('.rep').removeClass('col-sm-6');
                $('.rep').removeClass('col-sm-offset-3');
                $('.rep').addClass('col-sm-12');
            }
        },
        medium: function () {
            if (document.getElementById("bg").offsetWidth > 1024) {
                $('.dummy').addClass('col-sm-3');
                $('.rep').addClass('col-sm-6');
                $('.rep').addClass('col-sm-offset-3');
                $('.rep').removeClass('col-sm-12');
            }
        },
        large: function () {
            if (document.getElementById("bg").offsetWidth > 1024) {
                $('.dummy').addClass('col-sm-3');
                $('.rep').addClass('col-sm-6');
                $('.rep').addClass('col-sm-offset-3');
                $('.rep').removeClass('col-sm-12');
            }
        }
    });
});