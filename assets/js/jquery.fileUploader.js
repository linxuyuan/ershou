/**
 * 图片预览选择插件
 */


// 为了避免冲突，将我们的方法用一起匿名方法包裹起来
;(function ($) {


    $.fileUploader = function (options) {


        //设置默认值并用逗号隔开
        $.fileUploader.defaults = {
            selectors: '#selectors',
            preview: '#preview',
            imageClass: 'fs-image',
            accept: '',
            fileSize: 2 * 1024 * 1024
            //accept: 'image/gif, image/jpeg'
        };

        $.fileUploader.version = 1.0;


        $(document).ready(function () {
            var files = [];

            var opts = $.extend({}, $.fileUploader.defaults, options);

            $result = $(opts.preview);

            $selectors = $(opts.selectors);

            var $fileAdd = '<div class="fs-file-box">+<input type="file" name="file[]" class="input-selector" accept="' + $.fileUploader.accept(opts) + '"></div>';
            $selectors.append($fileAdd);

            $(document).on('change', '.input-selector', function () {
                $this = $(this);

                if (typeof FileReader === 'undefined') {
                    $result.innerHTML = "抱歉，你的浏览器不支持图片预览";
                }

                var input = $this[0].files[0];
                if ($.inArray(input.name, files) !== -1) {
                    alert('不能重复选择文件');
                    return;
                }

                var exts = (opts.accept !== '') ? opts.accept : 'jpg|png|gif';
                var ext = input.name.substring(input.name.lastIndexOf(".") + 1).toLowerCase();

                if (exts.indexOf(ext) === -1) {
                    alert('文件格式不正确');
                    return;
                }

                if (input.size > opts.fileSize) {
                    alert('文件太大，无法上传');
                    return;
                }

                files.push(input.name);
                console.log(input.name);
                //document.getElementById("file_input");
                var reader = new FileReader();
                reader.readAsDataURL(input);
                reader.onload = function (e) {
                    $img = $('<div class="fs-image-box"><img class="' + opts.imageClass + '" src="' + this.result
                        + '" alt="">' +
                        '<div class="fs-image-tools"><span class="fs-image-delete">X</span> </div></div>');
                    $img.data('filename', input.name);
                    $result.append($img);
                    $this.parent().hide();
                    $selectors.append($fileAdd);
                }
            });

            $(document).on('click', '.fs-image-delete', function () {
                $this = $(this);
                var fileName = $this.parent().data('filename');
                $this.closest('.fs-image-box').remove();
                $selectors.find('.fs-file-box').get($this.index()).remove();
                files.pop(fileName);
            });
        });

    };

    function debug($obj) {
        if (window.console && window.console.log)
            window.console.log('obj size: ' + $obj.size());
    }

    $.fileUploader.accept = function (opts) {
        if (opts.accept === '') {
            return 'image/*';
        }
        var result = '';
        var arr = opts.accept.split('|');
        for (var i = 0, a; a = arr[i]; i++) {
            if (i === 0) {
                result += 'image/' + a;
            } else {
                result += ', image/' + a;
            }

        }

        return result;
    };


    //传递jQuery到方法中，这样我们可以使用任何js中的变量来代替
})(jQuery);