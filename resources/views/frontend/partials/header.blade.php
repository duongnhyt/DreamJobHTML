<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo" style="position: fixed;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>DJ</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Dream</b>Job</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!--Nếu chưa đăng nhập thì hiển thị 2 li đăng nhập và đăng ký tài khoản-->
                <!--Nếu đã đăng nhập thì hiển thị li User Account-->
                <!--Ẩn li bằng class="hidden"-->
                <!-- Đăng nhập -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-sign-in fa-fw"></i>
                        <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                        <span class="hidden-xs">Đăng nhập</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="height: 60px;">
                            <p>
                                ĐĂNG NHẬP
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li style="padding: 10px;">
                            <form action="" method="post">
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-7" style="padding-top: 6px;">
                                            <!--<div class="checkbox icheck">-->
                                            <input type="checkbox"> Ghi nhớ đăng nhập
                                            <!--</div>-->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-xs-5">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng
                                                nhập
                                            </button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <!--<div class="form-group">-->
                                <!--<a href="">Quên mật khẩu</a>-->
                                <!--</div>-->
                            </form>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="" class="btn btn-default">Quên mật khẩu</a>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-default">Tạo tài khoản</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

                <!--Đăng ký tài khoản-->
                <li>
                    <a href="/register"> <i class="fa fa-registered fa-fw"></i> <span>Đăng ký tài khoản </span></a>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset("/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Nguyễn Hải Dương</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset("/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                            <p>
                                Nguyễn Hải Dương - Web Developer
                                <small>Là thành viên từ: 11/2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="/person/resume-mng" title="Hồ Sơ Cá Nhân">
                                <i class="fa fa-file fa-fw"></i>
                                Quản lý Hồ Sơ Cá nhân </a>
                        </li>
                        <li>
                            <a href="/person/notework" title="Việc Làm Đã Đánh Dấu">
                                <i class="fa fa-star fa-fw"></i>
                                Việc Làm đã đánh dấu </a>
                        </li>

                        <li>
                            <a href="/person/send-resume" title="Việc Làm Đã Ứng tuyển">
                                <i class="fa fa-send fa-fw"></i>
                                Việc Làm đã ứng tuyển </a>
                        </li>

                        <li>
                            <a href="/person/account" title="Thông tin tài khoản">
                                <i class="fa fa-user fa-fw"></i>
                                Thông tin tài khoản </a>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Hồ sơ</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Company Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset("/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Tên công ty</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset("/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                            <p>
                                Tên Công ty - Slogan
                                <small>Là thành viên từ: 11/2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li>
                            <a href="/company/profile" title="Hồ Sơ Công ty">
                                <i class="fa fa-file fa-fw"></i>
                                Hồ Sơ Công ty </a>
                        </li>
                        <li>
                            <a href="/company/capacity-profile" title="Hồ Sơ năng lực Công ty">
                                <i class="fa fa-hourglass fa-fw"></i>
                                Hồ Sơ năng lực Công ty </a>
                        </li>
                        <li>
                            <a href="/company/news-mng" title="Quản lý hồ sơ tuyển dụng">
                                <i class="fa fa-star fa-fw"></i>
                                Quản lý hồ sơ tuyển dụng </a>
                        </li>

                        <li>
                            <a href="/company/note-cv-mng" title="Quản lý Hồ sơ đã đánh dấu">
                                <i class="fa fa-send fa-fw"></i>
                                Quản lý Hồ sơ đã đánh dấu </a>
                        </li>

                        <li>
                            <a href="/person/account" title="Tìm ứng viên trực tiếp">
                                <i class="fa fa-user fa-fw"></i>
                                Tìm ứng viên trực tiếp </a>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Hồ sơ</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>