<header>
    <div class="container">
        <div class="navbar-header">
            <!-- 自适应隐藏导航展开按钮 -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#header-nav-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- 导航条LOGO -->
            <a class="logo" href="<?= site_url('Main') ?>">广二师在线</a>
        </div>
        <div class="collapse navbar-collapse header-is-login" id="header-nav-toggle">
            <div class="is-login-box">
                <img class="login-img" src="<?php echo base_url('assets/images/not-login.png') ?>">
                <?php echo $this->session->username; ?>
            </div>
            <ul class="is-login-sub-ul">
                <li><a href="">个人中心</a></li>
                <li><a href="">设置</a></li>
                <li><a href="<?= site_url('Login/logout') ?>">退出</a></li>

            </ul>

        </div>
    </div>
</header>
