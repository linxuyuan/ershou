<header>
    <div class="container">

        <div class="navbar-header">
            <!-- 自适应隐藏导航展开按钮 -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
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

            <a class="btn btn-login " href="<?= site_url('Login') ?>">登陆</a>
            <a class="btn btn-login" href="<?= site_url('Register') ?>">注册</a>

        </div>
    </div>
</header>
