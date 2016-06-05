<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>用户注册</title>
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/another.css') ?>"/>

</head>
<body>


<?php include __DIR__ . '/font_not_login_header.php'; ?>


<div class="container pad-top35">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default  panel-login">

                <div class="login-left col-md-7">
                    <div class="login-box-title">
                        <p>用户注册</p>
                    </div>

                    <div class="form-group input-height">
                        <p>用户名</p>
                        <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名">
                    </div>

                    <div class="form-group">
                        <p>密码</p>
                        <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <p>确认密码</p>
                        <input type="password" class="form-control" id="password2" name="password"
                               placeholder="请再次输入密码">
                    </div>
                    <div class="form-group">
                        <p>验证码</p>
                        <div class="form-inline">
                            <input type="text" class="form-control" id="verify_code"
                                   placeholder="请输入验证码">
                            <img id="verify_code" src=" <?php echo site_url('Register/get_captcha') ?>"
                                 onclick="this.src='<?php echo site_url("Register/get_captcha") ?>?r='" +new
                                 Date().getTime()/>
                        </div>
                        <p class="verify-code-sub"></p>


                    </div>

                    <div class="form-group sub">
                        <button id="btn-submit" type="button" class="btn btn-login btn-block"
                        ">
                        注册
                        </button>

                    </div>
                </div>
                <div class="login-right col-md-5">
                    <p class="login-right-title">已有账号，立即登陆</p>
                    <a type="button" class="btn btn-block btn-login-right" href="<?= site_url('Login') ?>">立即登陆</a>
                </div>

            </div>
        </div>

    </div>
</div>

<footer>
    <div class="copyright">
        <p>意见反馈 / 加入我们 / 联系我们</p>
        <p> Powered by 计算机科学系 Copyright © 2011 - 2016 京ICP备09050100号</p>
    </div>
</footer>
</body>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {


        $("#btn-submit").on('click', function () {
            var username = $("#username").val();
            var password = $("#password").val();
            var password2 = $("#password2").val();
            var verify_code = $("#verify_code").val();

            if (username == "") {
                $('<div id="msg" />').html("用户名不能为空！").appendTo('.sub').fadeOut(2000);
                $("#username").focus();
                return false;
            }
            if (password == "" || password2 == "") {
                $('<div id="msg" />').html("密码不能为空！").appendTo('.sub').fadeOut(2000);
                $("#password").focus();
                return false;
            }
            if (password != password2) {
                $('<div id="msg" />').html("两次输入的密码不一致！").appendTo('.sub').fadeOut(2000);
                $("#password").focus();
                return false;
            }
            if (verify_code == "") {
                $('<div id="msg" />').html("请输入验证码！").appendTo('.sub').fadeOut(2000);
                $("#verify_code").focus();
                return false;
            }


            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Register/register_check') ?>",
                dataType: "json",
                data: {"username": username, "password": password, "verify_code": verify_code},
                beforeSend: function () {
                    $('<div id="msg" />').addClass("loading").html("正在注册...").css("color", "#999")
                        .appendTo('.sub');
                },
                success: function (json) {

                    if (json.verify_code_error == 'verify_code_error') {
                        $("#msg").remove();
                        $('.verify-code-sub').text('验证码错误').fadeOut(2000);

                    } else {
                        if (json.success == "1") {
                            $("#msg").remove();
                            window.location = "<?= site_url('Login') ?>";
                            alert("注册成功");
                        } else {
                            $("#msg").remove();
                            alert("注册失败");
                        }
                    }


                },
                error: function (jqXHR, textStatus, errorThrown) {

                    /*错误信息处理*/

                    alert("错误信息" + textStatus);
                }
            });

        })
    })


</script>
</html>