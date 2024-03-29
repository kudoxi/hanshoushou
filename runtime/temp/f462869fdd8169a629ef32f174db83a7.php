<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\UPUPW_AP7.0\htdocs\hanshou\public/../application/index\view\index\index.html";i:1571016996;}*/ ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FastAdmin - <?php echo __('The fastest framework based on ThinkPHP5 and Bootstrap'); ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/hanshou/public/assets/css/index.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
            <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="/hanshou/public/assets/img/logo.png" style="width:200px;" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://www.fastadmin.net" target="_blank"><?php echo __('Home'); ?></a></li>
                        <li><a href="http://www.fastadmin.net/store.html" target="_blank"><?php echo __('Store'); ?></a></li>
                        <li><a href="http://www.fastadmin.net/service.html" target="_blank"><?php echo __('Services'); ?></a></li>
                        <li><a href="http://www.fastadmin.net/download.html" target="_blank"><?php echo __('Download'); ?></a></li>
                        <li><a href="http://www.fastadmin.net/demo.html" target="_blank"><?php echo __('Demo'); ?></a></li>
                        <li><a href="http://www.fastadmin.net/donate.html" target="_blank"><?php echo __('Donation'); ?></a></li>
                        <li><a href="http://forum.fastadmin.net" target="_blank"><?php echo __('Forum'); ?></a></li>
                        <li><a href="http://doc.fastadmin.net" target="_blank"><?php echo __('Docs'); ?></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-content">
                            <div class="header-content-inner">
                                <h1>FastAdmin</h1>
                                <h3><?php echo __('The fastest framework based on ThinkPHP5 and Bootstrap'); ?></h3>
                                <a href="<?php echo url('admin/index/login'); ?>" class="btn btn-outline btn-xl page-scroll"><?php echo __('Go to Dashboard'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2><?php echo __('Features'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-user text-primary"></i>
                                        <h3><?php echo __('Auth'); ?></h3>
                                        <p class="text-muted">基于完善的Auth权限控制管理、无限父子级权限分组、可自由分配子级权限、一个管理员可同时属于多个组别</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-screen-smartphone text-primary"></i>
                                        <h3><?php echo __('Responsive'); ?></h3>
                                        <p class="text-muted">基于Bootstrap和AdminLTE进行二次开发,手机、平板、PC均自动适配,无需要担心兼容性问题</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-present text-primary"></i>
                                        <h3><?php echo __('Languages'); ?></h3>
                                        <p class="text-muted">不仅仅后台开发支持多语言,同时视图部分和JS部分仍然共享同一个语言包,语法相同且自动加载</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-layers text-primary"></i>
                                        <h3><?php echo __('Module'); ?></h3>
                                        <p class="text-muted">控制器、模型、视图、JS一一对应,使用RequireJS进行JS模块化管理,采用Bower进行前端包组件管理</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-docs text-primary"></i>
                                        <h3><?php echo __('CRUD'); ?></h3>
                                        <p class="text-muted">控制台进行一键生成控制器、模型、视图和JS文件,同时可一键生成后台权限节点和菜单栏</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-puzzle text-primary"></i>
                                        <h3><?php echo __('Extension'); ?></h3>
                                        <p class="text-muted">FastAdmin提供强大的扩展中心，可直接在线安装和卸载插件，同时支持命令行一键操作</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="cta-content">
                <div class="container">
                    <h2>不要犹豫<br>开始行动</h2>
                    <a href="http://doc.fastadmin.net/docs/contributing.html" class="btn btn-outline btn-xl page-scroll"><?php echo __('Contribution'); ?></a>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2017 FastAdmin. All Rights Reserved.</p>
                <ul class="list-inline">
                    <li>
                        <a href="https://gitee.com/karson/fastadmin"><?php echo __('Gitee'); ?></a>
                    </li>
                    <li>
                        <a href="https://github.com/karsonzhang/fastadmin"><?php echo __('Github'); ?></a>
                    </li>
                    <li>
                        <a href="http://shang.qq.com/wpa/qunwpa?idkey=46c326e570d0f97cfae1f8257ae82322192ec8841c79b2136446df0b3b62028c"><?php echo __('QQ group'); ?></a>
                    </li>
                </ul>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="//cdn.bootcss.com/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script>
            $(function () {
                $(window).on("scroll", function () {
                    $("#mainNav").toggleClass("affix", $(window).height() - $(window).scrollTop() <= 50);
                });


                //发送版本统计信息
                try {
                    var installed = localStorage.getItem("installed");
                    console.log(installed);
                    if (!installed) {
                        $.ajax({
                            url: "<?php echo \think\Config::get('fastadmin.api_url'); ?>/statistics/installed",
                            data: {
                                version: "<?php echo config('fastadmin.version'); ?>",
                                os: "<?php echo PHP_OS; ?>",
                                sapi: "<?php echo PHP_SAPI; ?>",
                                tpversion: "<?php echo THINK_VERSION; ?>",
                                phpversion: "<?php echo PHP_VERSION; ?>",
                                software: "<?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?>",
                                url: location.href,
                            },
                            dataType: 'jsonp',
                        });
                        localStorage.setItem("installed", true);
                    }
                } catch (e) {

                }

            });
        </script>

        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?f8d0a8c400404989e195270b0bbf060a";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>

    </body>

</html>