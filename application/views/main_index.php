<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>主页</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/another.css') ?>"/>
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
    <div class="row">
        <div class="col-md-12 col-lg-9">
            <div class="panel panel-default pad-15">
                <div class="nav-catagory">
                    <div class="catagory-title">类型:</div>
                    <div class="catagory-item">

                        <a href="#">电器</a>

                        <a class="active" href="#">电器</a>

                        <a href="#">书籍</a>

                        <a href="#">图书</a>


                    </div>

                </div>

                <div class="type nav-catagory">
                    <div class="catagory-title">价格:</div>
                    <div class="catagory-item">

                        <a class="active" href="#">0-50</a>

                        <a href="#">50-100</a>

                        <a href="#">100-150</a>

                        <a href="#">150-300</a>
                    </div>

                </div>


            </div>


            <!-- 商品信息展示 -->
            <div class="">
                <div class="panel panel-default">
                    <div class="goods-box-title">
                        <p>商品信息</p>
                    </div>
                    <div class="good-item-box">
                        <?php
                            //                            echo $this->session->username;
                            //循环输出每一个商品信息
                            foreach ($goods_info as $item): ?>
                                <div class="goods-item col-sm-6 col-md-4 col-lg-4">
                                    <a class="goods-img-link"
                                       href="<?= site_url('DetailGoods/detail_goods/' . $item->goods_id) ?>">
                                        <img src="<?php echo $item->img_url ?>">
                                    </a>

                                    <p class="goods-item-title"><?php echo $item->goods_name; ?></p>
                                    <div class="good-item-price">
                                        <span><i class="fa fa-rmb"></i>&nbsp;<?php echo $item->goods_price; ?></span>
                                        <button type="button" class="btn-xs btn btn-default pull-right goods-item-btn">
                                            可小刀
                                        </button>
                                        <button type="button" class="btn-xs btn btn-default pull-right goods-item-btn">
                                            花都
                                        </button>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <div class="page-navigation text-center">
                        <ul class="pagination">
                            <li><a href="#">上一页</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">下一页</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-3">
            <div class="panel panel-default">
                <div class="text-center right-btn-tools">
                    <a href="<?= site_url('ReleaseGoods') ?>" class="btn btn-success">发布闲置 </a>
                    <a href="#" class="btn  btn-success">发布活动</a>
                </div>
                <div class="news-box">
                    <p class="news-title-top"><a href="News.html">广二师二手网站上线啦</a></p>
                    <p class="news-title"><a href="News.html">[推荐]购买二手的注意事项</a></p>
                    <p class="news-title"><a href="News.html">[精选]商品发布规则</a></p>
                </div>

            </div>
            <div class="input-group">
                <input type="text" class="form-control"/>
                    <span class="input-group-btn">  
                      <button class="btn btn-default" type="button" placeholder="请输入您要查询的活动">搜索</button>
                     </span>
            </div>


            <div class="panel panel-default marginTop-20">
                <p class="qiugou-panel-title">求购信息</p>
                <div class="qiugou-box">
                    <ul>
                        <li>
                            <div class="qiugou-item clearfix">
                                <img class="qiugou-img" src="images/33753.png" width="32" height="32">
                                <div class="qiugou-content">
                                    <p class="qiugou-person">小明</p>
                                    <p>谁有2016版的马克思主义到啊，联系我</p>
                                    <p>15小时前(1评论)</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="qiugou-item clearfix">
                                <img class="qiugou-img" src="images/33753.png" width="32" height="32">
                                <div class="qiugou-content">
                                    <p class="qiugou-person">小明</p>
                                    <p>谁有2016版的马克思主义到啊，联系我</p>
                                    <p>15小时前(1评论)</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="qiugou-item clearfix">
                                <img class="qiugou-img" src="images/33753.png" width="32" height="32">
                                <div class="qiugou-content">
                                    <p class="qiugou-person">小明</p>
                                    <p>谁有2016版的马克思主义到啊，联系我</p>
                                    <p>15小时前(1评论)</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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

<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
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

    })

</script>
</body>
</html>