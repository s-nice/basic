<!DOCTYPE html>
<html>
<head>
    <title>Yincart开源商城 - 后台管理</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap.' name='description'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
    <!-- / bootstrap [required files] -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/bootstrap/bootstrap-responsive.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / jquery ui -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/jquery_ui/jquery.ui-1.10.0.custom.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/jquery_ui/jquery.ui.1.10.0.ie.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / switch buttons -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/bootstrap_switch/bootstrap-switch.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / xeditable -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/xeditable/bootstrap-editable.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / wysihtml5 (wysywig) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/common/bootstrap-wysihtml5.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / jquery file upload -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/jquery_fileupload/jquery.fileupload-ui.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / full calendar -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/fullcalendar/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / select2 -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/select2/select2.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / mention -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/mention/mention.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / tabdrop (responsive tabs) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/tabdrop/tabdrop.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / jgrowl notifications -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/jgrowl/jquery.jgrowl.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / datatables -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/datatables/bootstrap-datatable.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / dynatrees (file trees) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/dynatree/ui.dynatree.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / color picker -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/bootstrap_colorpicker/bootstrap-colorpicker.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / datetime picker -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / daterange picker) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / flags (country flags) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/flags/flags.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / slider nav (address book) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/slider_nav/slidernav.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / fuelux (wizard) -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/plugins/fuelux/wizard.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme files [required files] -->
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body class='contrast-purple main-nav-closed'>
<header>
<div class='navbar'>
<div class='navbar-inner'>
<div class='container-fluid'>
<a class='brand' href='index.html'>
    <i class='icon-heart-empty'></i>
    <span class='hidden-phone'>Yincart</span>
</a>
<a class='toggle-nav btn pull-left' href='#'>
    <i class='icon-reorder'></i>
</a>
<ul class='nav pull-right'>
    <li class='dropdown light only-icon'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-adjust'></i>
        </a>
        <ul class='dropdown-menu color-settings'>
            <li class='color-settings-body-color'>
                <div class='color-title'>Body color</div>
                <a data-change-to='<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/light-theme.css' href='#'>
                    Light
                    <small>(default)</small>
                </a>
                <a data-change-to='<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/dark-theme.css' href='#'>
                    Dark
                </a>
                <a data-change-to='<?php echo Yii::app()->theme->baseUrl; ?>/assets/stylesheets/dark-blue-theme.css' href='#'>
                    Dark blue
                </a>
            </li>
            <li class='divider'></li>
            <li class='color-settings-contrast-color'>
                <div class='color-title'>Contrast color</div>
                <a data-change-to="contrast-red" href="#"><i class='icon-adjust text-red'></i>
                    Red
                    <small>(default)</small>
                </a>

                <a data-change-to="contrast-blue" href="#"><i class='icon-adjust text-blue'></i>
                    Blue
                </a>

                <a data-change-to="contrast-orange" href="#"><i class='icon-adjust text-orange'></i>
                    Orange
                </a>

                <a data-change-to="contrast-purple" href="#"><i class='icon-adjust text-purple'></i>
                    Purple
                </a>

                <a data-change-to="contrast-green" href="#"><i class='icon-adjust text-green'></i>
                    Green
                </a>

                <a data-change-to="contrast-muted" href="#"><i class='icon-adjust text-muted'></i>
                    Muted
                </a>

                <a data-change-to="contrast-fb" href="#"><i class='icon-adjust text-fb'></i>
                    Facebook
                </a>

                <a data-change-to="contrast-dark" href="#"><i class='icon-adjust text-dark'></i>
                    Dark
                </a>

                <a data-change-to="contrast-pink" href="#"><i class='icon-adjust text-pink'></i>
                    Pink
                </a>

                <a data-change-to="contrast-grass-green" href="#"><i class='icon-adjust text-grass-green'></i>
                    Grass green
                </a>

                <a data-change-to="contrast-sea-blue" href="#"><i class='icon-adjust text-sea-blue'></i>
                    Sea blue
                </a>

                <a data-change-to="contrast-banana" href="#"><i class='icon-adjust text-banana'></i>
                    Banana
                </a>

                <a data-change-to="contrast-dark-orange" href="#"><i class='icon-adjust text-dark-orange'></i>
                    Dark orange
                </a>

                <a data-change-to="contrast-brown" href="#"><i class='icon-adjust text-brown'></i>
                    Brown
                </a>

            </li>
        </ul>
    </li>
    <li class='dropdown medium only-icon widget'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-rss'></i>
            <div class='label'>5</div>
        </a>
        <ul class='dropdown-menu'>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-user text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            John Doe signed up
                            <small class='muted'>just now</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-inbox text-error'></i>
                        </div>
                        <div class='pull-left text'>
                            New Order #002
                            <small class='muted'>3 minutes ago</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-comment text-warning'></i>
                        </div>
                        <div class='pull-left text'>
                            America Leannon commented Flatty with veeery long text.
                            <small class='muted'>1 hour ago</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-user text-success'></i>
                        </div>
                        <div class='pull-left text'>
                            Jane Doe signed up
                            <small class='muted'>last week</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='#'>
                    <div class='widget-body'>
                        <div class='pull-left icon'>
                            <i class='icon-inbox text-error'></i>
                        </div>
                        <div class='pull-left text'>
                            New Order #001
                            <small class='muted'>1 year ago</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class='widget-footer'>
                <a href='#'>All notifications</a>
            </li>
        </ul>
    </li>
    <li class='dropdown dark user-menu'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <img width="23" height="23" alt="Mila Kunis" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/avatar.jpg" />
            <span class='user-name hidden-phone'><?php echo Yii::app()->user->name ?></span>
            <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
            <li>
                <a href='user_profile.html'>
                    <i class='icon-user'></i>
                    Profile
                </a>
            </li>
            <li>
                <a href='user_profile.html'>
                    <i class='icon-cog'></i>
                    Settings
                </a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='<?php echo Yii::app()->createUrl('/site/logout')?>'>
                    <i class='icon-signout'></i>
                    Sign out
                </a>
            </li>
        </ul>
    </li>
</ul>
<form action='search_results.html' class='navbar-search pull-right hidden-phone' method='get'>
    <button class='btn btn-link icon-search' name='button' type='submit'></button>
    <input value="" class="search-query span2" placeholder="Search..." autocomplete="off" id="q_header" name="q" type="text" />
</form>
</div>
</div>
</div>
</header>
<div id='wrapper'>
<div id='main-nav-bg'></div>
<nav id='main-nav'>
<div class='navigation'>
<div class='search'>
    <form action='search_results.html' method='get'>
        <div class='search-wrapper'>
            <input value="" class="search-query" placeholder="Search..." autocomplete="off" name="q" type="text" />
            <button class='btn btn-link icon-search' name='button' type='submit'></button>
        </div>
    </form>
</div>
<ul class='nav nav-stacked'>
<li class='active'>
    <a href='<?php echo Yii::app()->createUrl('/site/index') ?>'>
        <i class='icon-dashboard'></i>
        <span>控制面板</span>
    </a>
</li>
<li class=''>
    <a class="dropdown-collapse" href="#"><i class='icon-book'></i>
        <span>内容管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>

    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/contentCategory/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>内容分类</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/page/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>单页管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/post/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>文章管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/comment/index') ?>'>
                <i class='icon-caret-right'></i>
                <span>评论管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/feedback/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>留言管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/video/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>视频管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/ad/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>广告管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/friendLink/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>友情链接</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/newsletterSubscriber/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>邮件订阅</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/customerService/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>客服管理</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/cms/case/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>案例管理</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-glass'></i>
        <span>商品管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/mall/itemCategory/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>商品分类</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/mall/itemProp/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>商品属性</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/mall/item/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>商品列表</span>
            </a>
        </li>
        <li class=''>
            <a href='<?php echo Yii::app()->createUrl('/mall/elfinder/admin') ?>'>
                <i class='icon-caret-right'></i>
                <span>图片空间</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-inbox'></i>
        <span>销售管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='ui_elements.html'>
                <i class='icon-caret-right'></i>
                <span>订单列表</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>支付方式</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>物流方式</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>退货列表</span>
            </a>
        </li>
    </ul>
</li>
<li class=''>
    <a href='buttons_and_icons.html'>
        <i class='icon-magic'></i>
        <span>促销活动</span>
    </a>
</li>
<li class=''>
    <a href='buttons_and_icons.html'>
        <i class='icon-signal'></i>
        <span>报表</span>
    </a>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-group'></i>
        <span>用户管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='ui_elements.html'>
                <i class='icon-caret-right'></i>
                <span>客户列表</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>员工列表</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>供应商</span>
            </a>
        </li>
        <li class=''>
            <a href='widgets.html'>
                <i class='icon-caret-right'></i>
                <span>权限管理</span>
            </a>
        </li>
    </ul>
</li>
<li class=''>
    <a href='calendar.html'>
        <i class='icon-calendar'></i>
        <span>日历</span>
    </a>
</li>
<li class=''>
    <a href='email_templates.html'>
        <i class='icon-mail-reply'></i>
        <span>邮件管理</span>
    </a>
</li>
<li class=''>
    <a href='email_templates.html'>
        <i class='icon-th'></i>
        <span>模板市场</span>
    </a>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-cogs'></i>
        <span>扩展组件</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='charts.html'>
                <i class='icon-bar-chart'></i>
                <span>Charts</span>
            </a>
        </li>
        <li class=''>
            <a href='address_book.html'>
                <i class='icon-envelope'></i>
                <span>Address book</span>
            </a>
        </li>
        <li class=''>
            <a href='chats.html'>
                <i class='icon-comments'></i>
                <span>Chats</span>
            </a>
        </li>
        <li class=''>
            <a href='inplace_editing.html'>
                <i class='icon-pencil'></i>
                <span>In-place editing</span>
            </a>
        </li>
        <li class=''>
            <a href='filetrees.html'>
                <i class='icon-list-ul'></i>
                <span>File trees</span>
            </a>
        </li>
        <li class=''>
            <a href='fileupload.html'>
                <i class='icon-file'></i>
                <span>Fileupload</span>
            </a>
        </li>
        <li class=''>
            <a href='todo.html'>
                <i class='icon-list-alt'></i>
                <span>Todo list</span>
            </a>
        </li>
        <li class=''>
            <a href='wysiwyg.html'>
                <i class='icon-paste'></i>
                <span>WYSIWYG</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class='dropdown-collapse ' href='#'>
        <i class='icon-cog'></i>
        <span>系统管理</span>
        <i class='icon-angle-down angle-down'></i>
    </a>
    <ul class='nav nav-stacked'>
        <li class=''>
            <a href='closed_navigation.html'>
                <i class='icon-caret-right'></i>
                <span>分类管理</span>
            </a>
        </li>
        <li class=''>
            <a href='fixed_header.html'>
                <i class='icon-caret-right'></i>
                <span>菜单管理</span>
            </a>
        </li>
        <li class=''>
            <a href='fixed_navigation.html'>
                <i class='icon-caret-right'></i>
                <span>系统配置</span>
            </a>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
<section id='content'>
<div class='container-fluid'>
<?php echo $content ?>
</div>
</section>
</div>
<!-- / jquery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
<!-- / jquery mobile events (for touch and slide) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/mobile_events/jquery.mobile-events.min.js" type="text/javascript"></script>
<!-- / jquery migrate (for compatibility with new jquery) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
<!-- / jquery ui -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/jquery_ui/jquery-ui.min.js" type="text/javascript"></script>
<!-- / jQuery UI Touch Punch -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<!-- / bootstrap -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/flot/excanvas.js" type="text/javascript"></script>
<!-- / sparklines -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/sparklines/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- / flot charts -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/flot/flot.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/flot/flot.resize.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/flot/flot.pie.js" type="text/javascript"></script>
<!-- / bootstrap switch -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js" type="text/javascript"></script>
<!-- / fullcalendar -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<!-- / datatables -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/datatables/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
<!-- / wysihtml5 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/common/wysihtml5.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/common/bootstrap-wysihtml5.js" type="text/javascript"></script>
<!-- / select2 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/select2/select2.js" type="text/javascript"></script>
<!-- / color picker -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<!-- / mention -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/mention/mention.min.js" type="text/javascript"></script>
<!-- / input mask -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<!-- / fileinput -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<!-- / modernizr -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<!-- / retina -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<!-- / fileupload -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/tmpl.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/load-image.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/jquery.iframe-transport.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/jquery.fileupload.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/jquery.fileupload-fp.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/jquery.fileupload-ui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fileupload/jquery.fileupload-init.js" type="text/javascript"></script>
<!-- / timeago -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/timeago/jquery.timeago.js" type="text/javascript"></script>
<!-- / slimscroll -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- / autosize (for textareas) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/autosize/jquery.autosize-min.js" type="text/javascript"></script>
<!-- / charCount -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/charCount/charCount.js" type="text/javascript"></script>
<!-- / validate -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/validate/additional-methods.js" type="text/javascript"></script>
<!-- / naked password -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js" type="text/javascript"></script>
<!-- / nestable -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/nestable/jquery.nestable.js" type="text/javascript"></script>
<!-- / tabdrop -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/tabdrop/bootstrap-tabdrop.js" type="text/javascript"></script>
<!-- / jgrowl -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/jgrowl/jquery.jgrowl.min.js" type="text/javascript"></script>
<!-- / bootbox -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<!-- / inplace editing -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/xeditable/bootstrap-editable.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/xeditable/wysihtml5.js" type="text/javascript"></script>
<!-- / ckeditor -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- / filetrees -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/dynatree/jquery.dynatree.min.js" type="text/javascript"></script>
<!-- / datetime picker -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- / daterange picker -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_daterangepicker/bootstrap-daterangepicker.js" type="text/javascript"></script>
<!-- / max length -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<!-- / dropdown hover -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/bootstrap_hover_dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<!-- / slider nav (address book) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/slider_nav/slidernav-min.js" type="text/javascript"></script>
<!-- / fuelux -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/plugins/fuelux/wizard.js" type="text/javascript"></script>
<!-- / flatty theme [required files] -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/nav.js" type="text/javascript"></script>
<!-- / flatty theme -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/tables.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/theme.js" type="text/javascript"></script>
<!-- / demo -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/demo/jquery.mockjax.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/demo/inplace_editing.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/demo/charts.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/javascripts/demo/demo.js" type="text/javascript"></script>
</body>
</html>