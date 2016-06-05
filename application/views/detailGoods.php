<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>商品详细页面</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
   <link href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/another.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/picSlider.css') ?>"/>
</head>
<body>


<?php
    if ($this->session->is_login == "true") {
        include __DIR__ . '/font_is_login_header.php';
    } else {
        include __DIR__ . '/font_not_login_header.php';
    }
?>

<div class="container pad-top35">

    <div class="panel panel-default pad-20">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <!-- 商品图片轮播 -->
                <div class="slide-photo-box goods-img">

                    <div class="bigger-slide-photo" id="bigger-slide-photo">
                        <ul>
                            <?php

                                //循环输出每一个商品信息
                                foreach ($single_goods_img as $item): ?>
                                    <li class="bigger-photo hide">
                                        <img src="<?php echo $item->img_url ?>"/>
                                    </li>

                                <?php endforeach; ?>


                        </ul>
                    </div>

                    <div class="small-slide-photo" id="small-slide-photo">

                        <ul>
                            <?php

                                //循环输出每一个商品信息
                                foreach ($single_goods_img as $item): ?>
                                    <li class="ershou-samll-photo"><img class="small" src="<?php echo $item->img_url ?>"
                                                                        width="60px"
                                                                        height="60px"/></li>

                                <?php endforeach; ?>

                        </ul>


                        <div class="mask"></div>

                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="goods-detail">
                    <p class="goods-title"><?php echo $single_goods_info->goods_name ?></p>
                    <div class="goods-price discount">
                        <i class="fa fa-rmb"></i>
                        <span><?php echo $single_goods_info->goods_price ?></span>
                        <span class="is-discount">可小刀</span>
                    </div>
                    <ul class="goods-detail-nav">
                        <li>
                            <div class="aa">
                                <span class="goods-detail-span">交易地点</span>
                            </div>
                            <a href="">花都</a>
                        <li><span class="goods-detail-span">卖家</span><a
                                href=""><?php echo $single_goods_info->release_people ?></a></li>
                        <li><span class="goods-detail-span">QQ</span><a
                                href=""><?php echo $single_goods_info->contact_qq ?></a></li>
                        <li><span class="goods-detail-span">发布时间</span><a
                                href=""><?php echo $single_goods_info->release_date ?></a></li>
                    </ul>

                    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#"
                                                                                                      class="bds_qzone"
                                                                                                      data-cmd="qzone"
                                                                                                      title="分享到QQ空间"></a><a
                            href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq"
                                                                                               data-cmd="tqq"
                                                                                               title="分享到腾讯微博"></a><a
                            href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#"
                                                                                                class="bds_weixin"
                                                                                                data-cmd="weixin"
                                                                                                title="分享到微信"></a></div>
                    <script>window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "1",
                                "bdSize": "24"
                            }, "share": {}
                        };
                        with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-default goods-navbar col-lg-12" role="navigation">
            <ul id="myTab" class="nav nav-tabs goods-nav-ul">
                <li class="active">
                    <a class="goods-descrition-a" href="#goods-descrition" data-toggle="tab">
                        商品描述
                    </a>
                </li>
                <li><a class="user-message-a" href="#user-message" data-toggle="tab">用户留言</a></li>

            </ul>
        </nav>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="goods-descrition">
                <p><?php echo $single_goods_info->goods_description ?></p>
            </div>
            <div class="tab-pane fade" id="user-message">
                <div class="user-message-box col-lg-9">
                    <ul>
                        <li>
                            <div class="user-message-item clearfix">
                                <img class="user-message-item-img" src="images/33753.png">
                                <p class="user-message-item-person">小明</p>
                                <p>谁有2016版的马克思主义到啊，联系我</p>
                            </div>
                        </li>
                        <li>
                            <div class="qiugou-item clearfix">
                                <img class="user-message-item-img" src="images/33753.png">
                                <p class="user-message-item-person">小明</p>
                                <p>谁有2016版的马克思主义到啊，联系我</p>
                            </div>
                        </li>
                    </ul>


                    <textarea rows="5" class="user-message-textarea"></textarea>
                    <button type="submit" class="btn btn-message pull-right">提交</button>
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
</div>
</body>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
<script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery.slides.js') ?>"></script>


<script type="text/javascript">
    $(document).ready(function () {


        $.picSliders({
            big_pic: "#bigger-slide-photo",//大图框架
            small_pic: "#small-slide-photo" //小图框架

        });

        $(".is-login-box ").on('mouseover', function () {
            $('.is-login-sub-ul').show();
            $(this).addClass('is-login-box-hover');
        }).on('mouseout', function () {
            $('.is-login-sub-ul').hide();
            $(this).removeClass('is-login-box-hover');
        })


        $(".is-login-sub-ul").on('mouseover', function () {
            $('.is-login-sub-ul').show();
            $(".is-login-box ").addClass('is-login-box-hover');
        }).on('mouseout', function () {
            $('.is-login-sub-ul').hide();
            $(".is-login-box ").removeClass('is-login-box-hover');
        })

    });


</script>
</html>