<!DOCTYPE html>
<html lang="en">
<head>
    <title>后台界面</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='../resources/assets/css/modules/materialadmin/css/theme-default/google-fonts.css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/bootstrap-1422823238.css" />
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/materialadmin-1422823243.css" />
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/font-awesome.min-1422823239.css" />
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/material-design-iconic-font.min-1422823240.css" />
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/libs/rickshaw/rickshaw-1422823372.css" />
    <link type="text/css" rel="stylesheet" href="../resources/assets/css/modules/materialadmin/css/theme-default/libs/morris/morris.core-1422823370.css" />

    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/html5shiv.js?1422823601"></script>
    <script type="text/javascript" src="http://www.codecovers.eu/assets/js/modules/materialadmin/libs/utils/respond.min.js?1422823601"></script>
    <![endif]-->
</head>

<body class="menubar-hoverable header-fixed ">
<!-- BEGIN HEADER-->
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder"> <a href="dashboard.html"> <span class="text-lg text-bold text-primary">开机网</span> </a> </div>
                </li>
                <li> <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);"> <i class="fa fa-bars"></i> </a> </li>
            </ul>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
                <li>
                    <!-- Search form -->
                    <form class="navbar-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                        </div>
                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="dropdown hidden-xs"> <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown"> <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup> </a>
                    <ul class="dropdown-menu animation-expand">
                        <li class="dropdown-header">即时消息</li>
                        <li> <a class="alert alert-callout alert-warning" href="javascript:void(0);"> <img class="pull-right img-circle dropdown-avatar" src="../resources/assets/img/modules/materialadmin/avatar2-1422538624.jpg" alt="" /> <strong>Alex Anistor</strong><br/>
                                <small>Testing functionality...</small> </a> </li>
                        <li> <a class="alert alert-callout alert-info" href="javascript:void(0);"> <img class="pull-right img-circle dropdown-avatar" src="../resources/assets/img/modules/materialadmin/avatar3-1422538624.jpg" alt="" /> <strong>Alicia Adell</strong><br/>
                                <small>Reviewing last changes...</small> </a> </li>
                        <li class="dropdown-header">选项</li>
                        <li><a href="../pages/login.html">所有消息<span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                        <li><a href="../pages/login.html">标记为已读<span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                    </ul>
                    <!--end .dropdown-menu -->
                </li>
                <!--end .dropdown -->
                <li class="dropdown hidden-xs"> <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown"> <i class="fa fa-area-chart"></i> </a>
                    <ul class="dropdown-menu animation-expand">
                        <li class="dropdown-header">服务器负载</li>
                        <li class="dropdown-progress"> <a href="javascript:void(0);">
                                <div class="dropdown-label"> <span class="text-light">服务器负载 <strong>今天</strong></span> <strong class="pull-right">93%</strong> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" style="width: 93%"></div>
                                </div>
                            </a> </li>
                        <!--end .dropdown-progress -->
                        <li class="dropdown-progress"> <a href="javascript:void(0);">
                                <div class="dropdown-label"> <span class="text-light">服务器负载 <strong>昨天</strong></span> <strong class="pull-right">30%</strong> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 30%"></div>
                                </div>
                            </a> </li>
                        <!--end .dropdown-progress -->
                        <li class="dropdown-progress"> <a href="javascript:void(0);">
                                <div class="dropdown-label"> <span class="text-light">服务器负载 <strong>上周</strong></span> <strong class="pull-right">74%</strong> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" style="width: 74%"></div>
                                </div>
                            </a> </li>
                        <!--end .dropdown-progress -->
                    </ul>
                    <!--end .dropdown-menu -->
                </li>
                <!--end .dropdown -->
            </ul>
            <!--end .header-nav-options -->
            <ul class="header-nav header-nav-profile">
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown"> <img src="../resources/assets/img/modules/materialadmin/avatar1-1422538623.jpg" alt="" /> <span class="profile-info"> Daniel Johnson <small>超级管理员</small> </span> </a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">设置</li>
                        <li><a href="../pages/profile.html">个人资料</a></li>
                        <li><a href="../pages/blog/post.html"><span class="badge style-danger pull-right">16</span>我的博客</a></li>
                        <li><a href="../pages/calendar.html">约会安排</a></li>
                        <li class="divider"></li>
                        <li><a href="../pages/locked.html"><i class="fa fa-fw fa-lock"></i> 锁屏</a></li>
                        <li><a href="../pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> 退出</a></li>
                    </ul>
                    <!--end .dropdown-menu -->
                </li>
                <!--end .dropdown -->
            </ul>
            <!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">
                <li> <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false"> <i class="fa fa-ellipsis-v"></i> </a> </li>
            </ul>
            <!--end .header-nav-toggle -->
        </div>
        <!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">
    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas"> </div>
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-body">
                <div class="row">

                    <!-- BEGIN ALERT - REVENUE -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-info no-margin"> <strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong> <strong class="text-xl">$ 32,829</strong><br/>
                                    <span class="opacity-50">收入</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END ALERT - REVENUE -->

                    <!-- BEGIN ALERT - VISITS -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-warning no-margin"> <strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong> <strong class="text-xl">432,901</strong><br/>
                                    <span class="opacity-50">访问量</span>
                                    <div class="stick-bottom-right">
                                        <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END ALERT - VISITS -->

                    <!-- BEGIN ALERT - BOUNCE RATES -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-danger no-margin"> <strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong> <strong class="text-xl">42.90%</strong><br/>
                                    <span class="opacity-50">跳出率</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="progress progress-hairline no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width:43%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END ALERT - BOUNCE RATES -->

                    <!-- BEGIN ALERT - TIME ON SITE -->
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-success no-margin">
                                    <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                    <strong class="text-xl">54 秒.</strong><br/>
                                    <span class="opacity-50">平均停留时间</span> </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END ALERT - TIME ON SITE -->

                </div>
                <!--end .row -->
                <div class="row">

                    <!-- BEGIN SITE ACTIVITY -->
                    <div class="col-md-9">
                        <div class="card ">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-head">
                                        <header>站点记录</header>
                                    </div>
                                    <!--end .card-head -->
                                    <div class="card-body height-8">
                                        <div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                        <div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
                                    </div>
                                    <!--end .card-body -->
                                </div>
                                <!--end .col -->
                                <div class="col-md-4">
                                    <div class="card-head">
                                        <header>今天统计数据</header>
                                    </div>
                                    <div class="card-body height-8"> <strong>214</strong> 成员 <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
                                        </div>
                                        756 综合浏览量 <span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
                                        </div>
                                        291 跳出率 <span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-danger" style="width:93%"></div>
                                        </div>
                                        32,301 访问量 <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
                                        </div>
                                        132 页面 <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
                                        </div>
                                    </div>
                                    <!--end .card-body -->
                                </div>
                                <!--end .col -->
                            </div>
                            <!--end .row -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END SITE ACTIVITY -->

                    <!-- BEGIN SERVER STATUS -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary">服务器状态</header>
                            </div>
                            <!--end .card-head -->
                            <div class="card-body height-4">
                                <div class="pull-right text-center"> <em class="text-primary">温度</em> <br/>
                                    <div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
                                        <input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
                                    </div>
                                </div>
                            </div>
                            <!--end .card-body -->
                            <div class="card-body height-4 no-padding">
                                <div class="stick-bottom-left-right">
                                    <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                                </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END SERVER STATUS -->

                </div>
                <!--end .row -->
                <div class="row">

                    <!-- BEGIN TODOS -->
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-head">
                                <header>待办事项</header>
                                <div class="tools"> <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a> </div>
                            </div>
                            <!--end .card-head -->
                            <div class="card-body no-padding height-9 scroll">
                                <ul class="list" data-sortable="true">
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span>Call clients for follow-up</span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span> Schedule meeting <small>opportunity for new customers</small> </span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span> Upload files to server <small>The files must be shared with all members of the board</small> </span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span> </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default"> <i class="md md-delete"></i> </a> </li>
                                </ul>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END TODOS -->

                    <!-- BEGIN REGISTRATION HISTORY -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-head">
                                <header>注册历史</header>
                                <div class="tools"> <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a> <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a> <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a> </div>
                            </div>
                            <!--end .card-head -->
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="col-sm-6 hidden-xs">
                                        <div class="force-padding text-sm text-default-light">
                                            <p> <i class="md md-mode-comment text-primary-light"></i> 该统计从设计全面实施的时间和收到第一封邮件后进行测量。</p>
                                        </div>
                                    </div>
                                    <!--end .col -->
                                    <div class="col-sm-6">
                                        <div class="force-padding pull-right text-default-light">
                                            <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
                                            <i class="fa fa-caret-up text-success fa-fw"></i> more registrations </div>
                                    </div>
                                    <!--end .col -->
                                </div>
                                <!--end .row -->
                                <div class="stick-bottom-left-right force-padding">
                                    <div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
                                </div>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END REGISTRATION HISTORY -->

                    <!-- BEGIN NEW REGISTRATIONS -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head">
                                <header>新注册成员</header>
                                <div class="tools hidden-md"> <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a> </div>
                            </div>
                            <!--end .card-head -->
                            <div class="card-body no-padding height-9 scroll">
                                <ul class="list divider-full-bleed">
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar9-1422538626.jpg" alt="" /> </div>
                                            <div class="tile-text">Ann Laurens</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar4-1422538625.jpg" alt="" /> </div>
                                            <div class="tile-text">Alex Nelson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar11-1422538623.jpg" alt="" /> </div>
                                            <div class="tile-text">Mary Peterson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar7-1422538626.jpg" alt="" /> </div>
                                            <div class="tile-text">Philip Ericsson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar8-1422538626.jpg" alt="" /> </div>
                                            <div class="tile-text">Jim Peters</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon"> <img src="../resources/assets/img/modules/materialadmin/avatar2-1422538624.jpg" alt="" /> </div>
                                            <div class="tile-text">Jessica Cruise</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction"> <i class="md md-block text-default-light"></i> </a> </li>
                                </ul>
                            </div>
                            <!--end .card-body -->
                        </div>
                        <!--end .card -->
                    </div>
                    <!--end .col -->
                    <!-- END NEW REGISTRATIONS -->

                </div>
                <!--end .row -->
            </div>
            <!--end .section-body -->
        </section>
    </div>
    @yield('content')
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            <div> <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);"> <i class="fa fa-bars"></i> </a> </div>
            <div class="expanded"> <a href="dashboard.html"> <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span> </a> </div>
        </div>
        <div class="menubar-scroll-panel">
            <!-- BEGIN MAIN MENU -->

            <ul id="main-menu" class="gui-controls">
                <!-- BEGIN DASHBOARD -->
                <li> <a href="../dashboard/dashboard.html" class="active">
                        <div class="gui-icon"><i class="md md-home"></i></div>
                        <span class="title">消息中心</span> </a> </li>
                <!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN EMAIL -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="md md-storage"></i></div>
                        <span class="title">资讯动态</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../article/article_list.html" ><span class="title">资讯管理</span></a></li>
                        <li><a href="../article/article_add.html" ><span class="title">资讯添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END EMAIL -->

                <!-- BEGIN DASHBOARD -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="md md-business"></i></div>
                        <span class="title">影视公司</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../company/company_list.html" ><span class="title">公司管理</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">公司添加</span></a></li>
                    </ul>
                    <!--end /submenu --> </li>
                <!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-wrench"></i></div>
                        <span class="title">制片工具</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">工具管理</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">工具添加</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">流程添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-group"></i></div>
                        <span class="title">影视人才</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">人才管理</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">人才添加</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">流程添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-video-camera"></i></div>
                        <span class="title">影视项目</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">项目管理</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">项目添加</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">流程添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN PAGES -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="md md-archive"></i></div>
                        <span class="title">影视资源</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">资源管理</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">资源添加</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">流程添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN CHARTS -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="md md-new-releases"></i></div>
                        <span class="title">服务信息</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">信息管理</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">信息添加</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">流程添加</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END CHARTS -->

                <!-- BEGIN LEVELS -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-cog fa-fw"></i></div>
                        <span class="title">系统设置</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="dashboard.html#"><span class="title">网站信息</span></a></li>
                        <li><a href="dashboard.html#"><span class="title">应用配置</span></a></li>
                        <li class="gui-folder"> <a href="javascript:void(0);"> <span class="title">其他信息</span> </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="dashboard.html#"><span class="title">Item 2</span></a></li>
                                <li class="gui-folder"> <a href="javascript:void(0);"> <span class="title">Open level 3</span> </a>
                                    <!--start submenu -->
                                    <ul>
                                        <li><a href="dashboard.html#"><span class="title">Item 3</span></a></li>
                                        <li><a href="dashboard.html#"><span class="title">Item 3</span></a></li>
                                        <li class="gui-folder"> <a href="javascript:void(0);"> <span class="title">Open level 4</span> </a>
                                            <!--start submenu -->
                                            <ul>
                                                <li><a href="dashboard.html#"><span class="title">Item 4</span></a></li>
                                                <li class="gui-folder"> <a href="javascript:void(0);"> <span class="title">Open level 5</span> </a>
                                                    <!--start submenu -->
                                                    <ul>
                                                        <li><a href="dashboard.html#"><span class="title">Item 5</span></a></li>
                                                        <li><a href="dashboard.html#"><span class="title">Item 5</span></a></li>
                                                    </ul>
                                                    <!--end /submenu -->
                                                </li>
                                                <!--end /submenu-li -->
                                            </ul>
                                            <!--end /submenu -->
                                        </li>
                                        <!--end /submenu-li -->
                                    </ul>
                                    <!--end /submenu -->
                                </li>
                                <!--end /submenu-li -->
                            </ul>
                            <!--end /submenu -->
                        </li>
                        <!--end /submenu-li -->
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END LEVELS -->

            </ul>
            <!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel"> <small class="no-linebreak hidden-folded"> <span class="opacity-75">Copyright &copy; 2014</span> <strong>123action.com</strong> </small> </div>
        </div>
        <!--end .menubar-scroll-panel-->
    </div>
    <!-- END MENUBAR -->

</div>
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->

<script src="../resources/assets/js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/bootstrap/bootstrap.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/spin.js/spin.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/autosize/jquery.autosize.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/moment/moment.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/core/cache/ec2c8835c9f9fbb7b8cd36464b491e73.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/core/cache/43ef607ee92d94826432d1d6f09372e1.js"></script>
<script src="../resources/assets/js/modules/materialadmin/libs/rickshaw/rickshaw.min.js"></script>
<script src="../resources/assets/js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js"></script>
<script src="../resources/assets/js/modules/materialadmin/core/demo/Demo.js"></script>
<script src="../resources/assets/js/modules/materialadmin/core/demo/DemoDashboard.js"></script>

<!-- END JAVASCRIPT -->

</body>
</html>