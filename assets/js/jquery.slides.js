/**
 * 图片轮播插件
 */


;(function ($) {


    $.picSliders = function (options) {


        $.picSliders.defaults = {
            big_pic: "#bigger-slide-photo",//大图框架
            small_pic: "#small-slide-photo" //小图框架
        };

        $.picSliders.version = 1.0;

        $(document).ready(function () {

            var opts = $.extend({}, $.picSliders.defaults, options);

            $big_pic = opts.big_pic;
            $small_pic = opts.small_pic;


            $($big_pic).find("ul li").eq(0).addClass("show");


            $($small_pic).find("ul li")
                .on('mouseover', function () {
                    var index = $(this).index();
                   // console.log(index);

                    $(this).children("img").css('border', '3px solid #44C1A5');

                    $(".bigger-photo").removeClass("show").eq(index).addClass("show");
                })
                .on('mouseout', function () {
                    $(this).children("img").css('border', '0');
                })

        });

    };

    function debug($obj) {
        if (window.console && window.console.log)
            window.console.log('obj size: ' + $obj.size());
    }


})
(jQuery);

