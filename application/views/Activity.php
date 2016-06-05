<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>活动页面</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/another.css') ?>"/>
    <link rel="stylesheet" href=" http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css"/>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src=" http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logo pull-left"><a href="<?= site_url('Main') ?>"> 广二师在线</a></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="nav_bar pull-left navbar-collapse">
            <ul class="nav nav-pills header-nav" role="navigation">
                <li class=""><a href="#">首页</a></li>
                <li class=""><a href="">社团</a></li>
                <li class=""><a href=""> 问答</a></li>
                <li class=""><a href="#"> 商城</a></li>
            </ul>
        </div>
        <div class="header-login pull-right login-box navbar-collapse">
            <a id="btn_login" class="btn navbar-btn" href="<?= site_url('Login')?>">登陆</a>
            <a id="btn_regeister" class="btn navbar-btn" href="<?= site_url('Register')?>">注册</a>
        </div>
    </div>
</header>


<div class="container pad-top35">
    <div class="row">
        <div class="col-md-12 col-lg-9">
            <!-- 活动展示 -->
            <div class="">
                <div class="panel panel-default">

                    <div class="activity-box-title">
                        <h4>推荐活动</h4>
                    </div>

                    <div class="activity-item-box clearfix">
                        <?php
                            //循环输出每一活动
                            foreach ($activity_item_array as $item): ?>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="activity-item">
                                        <div class="activey-item-content clearfix">
                                            <a class="activity-item-img" href="ActivityDetail.html"><img
                                                    src="<?= base_url('assets/images/huodong.jpg') ?>"></a>
                                            <a class="activity-item-title"
                                               href="ActivityDetail.html"><?php echo $item["activity_title"]; ?></a>
                                            <p>
                                                <span><i
                                                        class="fa fa-eye"></i>关注：<?php echo $item["num_concern"]; ?></span>
                                            <span><i
                                                    class="fa fa-commenting-o"></i>动态：<?php echo $item["dynamic_state"]; ?></span>
                                                <span><i class="fa fa-picture-o"></i>照片：50</span>
                                            </p>
                                            <p>
                                                <img src="images/33753.png" width="18" height="18">
                                                <span><?php echo $item["release_people"]; ?>&nbsp</span>发布了该活动
                                            </p>
                                            <p>
                                                <span class="activity-tag">讲座</span>
                                                <span class="activity-tag">吉他</span>

                                            </p>
                                        </div>
                                        <div class="active-item-prefix">
                                        <span class="span-activity-place"><i
                                                class="fa fa-map-pin"></i><?php echo $item["place"]; ?></span>
                                            <span class="span-activity-state"><i class="fa fa-warning"></i>活动已结束</span>
                                        </div>
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
                    <a href="<?=site_url('ReleaseGoods')?>" class="btn btn-success">发布闲置 </a>
                    <a href="#" class="btn  btn-success">发布活动</a>
                </div>
                <div class="news-box">
                    <p class="news-title-top"><a href="News.html">广二师二手网站上线啦</a></p>
                    <p class="news-title"><a href="News.html">[推荐]购买二手的注意事项</a></p>
                    <p class="news-title"><a href="News.html">[精选]商品发布规则</a></p>
                </div>

            </div>

            <div class="input-group">
                <input type="text" class="form-control">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                      搜索
                  </button>
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
<footer>
    <div class="copyright">
        <p>意见反馈 / 加入我们 / 联系我们</p>
        <p> Powered by 计算机科学系 Copyright © 2011 - 2016 京ICP备09050100号</p>
    </div>
</footer>
</body>

</html>