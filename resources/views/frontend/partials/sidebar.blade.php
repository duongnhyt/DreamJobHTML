<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Nguyễn Hải Dương</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">DREAMJOB NAVIGATION</li>
            <li>
                <a href="/"><i class="fa fa-home fa-fw"></i><span>Trang chủ</span></a>
            </li>

            <!--Nếu chưa đăng nhập thì chỉ hiển thị li-->
            <!--Nếu đã đăng nhập thì thêm class=-->
            {{--active vào menu nào thì cho class="active"--}}
            <li class="treeview">
                <a href="">
                    <i class="fa fa-users fa-fw"></i>
                    <span class="menu-title">Việc làm xây dựng</span>
                    <!--Nếu đã đăng nhập thì mới hiển thị icon này-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <!--Nếu đã đăng nhập thì mới hiển thị ul này-->
                <ul class="treeview-menu" style="padding-left: 30px;">
                    <!--Nếu chưa đăng nhập thì hiển thị ngay trang đăng nhập-->
                    <!--Nếu đã đăng nhập thì hiển thị li còn lại-->
                    <!--Ẩn li bằng class="hidden"-->
                    <!--<li><a href=""><i class="fa fa-circle-o"></i> Tạo tài khoản Công ty</a></li>-->
                    <li><a href="/company/profile"><i class="fa fa-circle-o"></i> Hồ sơ Công ty</a></li>
                    <li><a href="/company/capacity-profile"><i class="fa fa-circle-o"></i> Hồ sơ năng lực Công ty</a></li>
                    <li><a href="/company/news-mng"><i class="fa fa-circle-o"></i> Quản lý tin tuyển dụng</a></li>
                    {{--<li><a href="/company/resume-mng"><i class="fa fa-circle-o"></i> Quản lý Hồ sơ tuyển dụng</a></li>--}}
                    <li><a href="/company/note-cv-mng"><i class="fa fa-circle-o"></i> Quản lý Hồ sơ đã đánh dấu</a></li>
                    <li><a href="/company/find-cv"><i class="fa fa-circle-o"></i> Tìm ứng viên trực tiếp</a></li>
                </ul>
            </li>

            <!--Nếu chưa đăng nhập thì chỉ hiển thị li-->
            <!--Nếu đã đăng nhập thì thêm class=-->
            <li class="treeview">
                <a href="">
                    <i class="fa fa-user fa-fw"></i>
                    <span class="menu-title">Nguồn nhân lực xây dựng</span>
                    <!--Nếu đã đăng nhập thì mới hiển thị icon này-->
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <!--Nếu đã đăng nhập thì mới hiển thị ul này-->
                <ul class="treeview-menu" style="padding-left: 30px;">
                    <!--Nếu chưa đăng nhập thì hiển thị ngay trang đăng nhập-->
                    <!--Nếu đã đăng nhập thì hiển thị li còn lại-->
                    <!--Ẩn li bằng class="hidden"-->
                    <!--<li><a href=""><i class="fa fa-circle-o"></i> Tạo tài khoản Cá nhân</a></li>-->
                    <li><a href="/person/resume-mng"><i class="fa fa-circle-o"></i> Quản lý Hồ sơ Cá nhân</a></li>
                    <li><a href="/person/notework"><i class="fa fa-circle-o"></i> Việc làm đã đánh dấu</a></li>
                    <li><a href="/person/send-resume"><i class="fa fa-circle-o"></i> Việc làm đã ứng tuyển</a></li>
                    <li><a href="/person/account"><i class="fa fa-circle-o"></i> Thông tin tài khoản</a></li>
                    <!--<li><a href=""><i class="fa fa-circle-o"></i> </a></li>-->
                </ul>
            </li>

            <li>
                <a href="/company-team">
                    <i class="fa fa-building-o fa-fw"></i>
                    <span class="menu-title">Công ty- Tổ đội xây dựng</span>
                </a>
            </li>
            <li>
                <a href="http://rdsic.edu.vn/khoa-hoc-xay-dung">
                    <i class="fa fa-book fa-fw"></i>
                    <span class="menu-title">Dịch vụ đào tạo</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-bookmark fa-fw"></i>
                    <span class="menu-title">Dịch vụ tuyển dụng</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>