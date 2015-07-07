<!DOCTYPE html>
<html lang="en">
<head>
    <title>嘉恒同心供热收费系统</title>

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
                    <div class="brand-holder"> <a href=""> <span class="text-lg text-bold text-primary">开机网</span> </a> </div>
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
            </ul>
            <!--end .header-nav-options -->
            <ul class="header-nav header-nav-profile">
                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown"> <img src="../resources/assets/img/modules/materialadmin/avatar1-1422538623.jpg" alt="" /> <span class="profile-info"> Daniel Johnson <small>超级管理员</small> </span> </a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">设置</li>
                        <li><a href="../pages/profile.html">个人资料</a></li>
                        <li class="divider"></li>
                        <li><a href="auth/login"><i class="fa fa-fw fa-power-off text-danger"></i> 退出</a></li>
                    </ul>
                    <!--end .dropdown-menu -->
                </li>
                <!--end .dropdown -->
            </ul>
            <!--end .header-nav-profile -->
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
                        <span class="title">基础设置</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="building" ><span class="title">楼盘信息</span></a></li>
                        <li><a href="employee" ><span class="title">人员信息</span></a></li>
                        <li><a href="fee" ><span class="title">费用设置</span></a></li>
                        <li><a href="permission" ><span class="title">权限分配</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END EMAIL -->

                <!-- BEGIN DASHBOARD -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="md md-business"></i></div>
                        <span class="title">客服管理</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../company/company_list.html" ><span class="title">表数导入</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">供热缴费</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">缴费查询</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">报修申请</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">报修回访</span></a></li>
                        <li><a href="../company/company_add.html" ><span class="title">报修查询</span></a></li>
                    </ul>
                    <!--end /submenu --> </li>
                <!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-wrench"></i></div>
                        <span class="title">工程管理</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">人员管理</span></a></li>
                        <li><a href="../tool/tool_add.html" ><span class="title">报修分派</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">报修完工</span></a></li>
                        <li><a href="../tool/tool_menu.html" ><span class="title">报修查询</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li class="gui-folder"> <a>
                        <div class="gui-icon"><i class="fa fa-group"></i></div>
                        <span class="title">财务管理</span> </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">缴费查询</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-video-camera"></i></div>
                        <span class="title">领导驾驶舱</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../tool/tool_add.html" ><span class="title">缴费情况</span></a></li>
                        <li><a href="../tool/tool_list.html" ><span class="title">报修情况</span></a></li>
                    </ul>
                    <!--end /submenu -->
                </li>
                <!--end /menu-li -->
            </ul>
            <!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel"> <small class="no-linebreak hidden-folded text-center"> <span class="opacity-75" >Copyright &copy; 2015</span> <strong><br/>北京嘉恒同心供热服务有限公司</strong> </small> </div>
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