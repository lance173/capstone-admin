<?php 
    session_start();
    if(!$_SESSION['profile']){header('Location:../index.php');}
?>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="home.php">
                    <span class="brand"> <img src="../assets/img/usclibsystem-transp-whitetxt.png" width="60px" height="30px" />
                        <span class="brand-tip"> <img src="../assets/img/usc-completelogo-whitetxt.png" width="150px" height="35px" /> </span>
                    </span>
                    <span class="brand-mini" id="usccmplg"> <img src="../assets/img/usclibsystem-transp-whitetxt.png" width="60px" height="20px" /> </span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>                
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="<?php echo $_SESSION['profile']['Photo']?>" />
                            <span></span><?php echo $_SESSION['profile']['FirstName']?><i class="fa fa-angle-down m-l-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" role="button" data-toggle="modal" data-target="#editAccount"> <i class="fa fa-user"></i>Change Password</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div class="">
                        <img src="<?php echo $_SESSION['profile']['Photo']?>" width="80px" style="border-radius: 100px;" />
                    </div>                    
                </div>
                <div class="admin-info">
                        <div class="font-strong"><?php echo $_SESSION['profile']['FirstName'],'&nbsp',$_SESSION['profile']['LastName'] ?></div>
                        <small><?php echo $_SESSION['profile']['Position']?></small>
                        <div style="display: block; margin: 10px 0px 25px;">
                           <a class="btn btn-edtacct" role="button" data-toggle="modal" data-target="#editAccount"> Edit Account </a>                            
                        </div>                       
                </div>

                <ul class="side-menu metismenu">
                    <li>
                        <a href="home.php" id="MenuHomePage"><i class="sidebar-item-icon fa fa-home"></i> 
                            <span class="nav-label"> Home / Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="activitylog-page.php" id="MenuActivityLogPage"><i class="sidebar-item-icon fas fa-hourglass-start"></i> 
                            <span class="nav-label"> Activity Log</span>
                        </a>
                    </li>
                    <li class="heading">USERS</li>
                    <li>
                        <a href="javascript:;" id="MenuStudentUsers"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">Student Users</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="students-table.php" id="MenuStudentUsersTable">All Student Users</a>
                            </li>
                            <li>
                                <a href="add-userstudent.php" id="MenuAddStudentUser">Add New </a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" id="MenuAdminUsers"><i class="sidebar-item-icon fa fa-user-shield"></i>
                            <span class="nav-label">Admins</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="admin-table.php" id="MenuAdminUsersTable">All Admin Users</a>
                            </li>
                            <li>
                                <a href="add-useradmin.php" id="MenuAddAdminUser">Add New</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="reported-table.php" id="MenuReportPage"><i class="sidebar-item-icon fa fa-flag"></i>
                            <span class="nav-label">Reports</span></a>
                    </li>
                    <li class="heading">SITE CONTENT</li>
                    <li>
                        <a href="javascript:;" id="MenuWebApprnc"><i class="sidebar-item-icon fa fa-desktop"></i>
                            <span class="nav-label">Website Appearance</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="site-editor.php" id="MenuSiteEditor">Website Editor</a>
                            </li>
                            <li>
                                <a href="menu-editor.php" id="MenuMnBarEditor">Edit Menu Bar</a>
                            </li>
                            <li>
                                <a href="slider-editor.php" id="MenuSliderEditor">Edit Slider</a>
                            </li>
                            <li>
                                <a href="webpage-table.php" id="MenuWebApprncSitePages">Website Pages</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" id="MenuArticles"><i class="sidebar-item-icon fa fa-file-alt"></i>
                            <span class="nav-label">Articles</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="articles-table.php" id="MenuArticlesTable">All Articles</a>
                            </li>
                            <li>
                                <a href="add-article.php" id="MenuAddArticle">Post New Article</a>
                            </li>
                        </ul>
                    </li>   
                    <li class="heading">LOGOUT</li>                 
                    <li>
                        <a href="login.php"><i class="sidebar-item-icon fa fa-sign-out-alt"></i>
                            <span class="nav-label">Log-out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->