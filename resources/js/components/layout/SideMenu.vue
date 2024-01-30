<template>
    <div>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">

                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Nguyễn Văn
                                            Trúc</strong>
                                    </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span>
                                </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Thông tin cá nhân</a></li>
                                <li><a href="contacts.html">Liên hệ</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IILAB TECH
                        </div>
                    </li>

                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-label">Trang chủ</span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Danh sách thành viên</a></li>
                            <li><a href="#">Cơ cấu tổ chức</a></li>
                            <li><a href="#">Thông báo chung <span class="label label-danger pull-right">24</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-tasks"></i>
                            <span class="nav-label">Quản lý</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Nhiệm vụ</a></li>
                            <li><a href="#">Điểm danh hoạt động</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-archive"></i>
                            <span class="nav-label">Dự án</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Nghiên cứu khoa học</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Dự án khác</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book"></i>
                            <span class="nav-label">Tài liệu</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Điện - Điện tử</a></li>
                            <li><a href="#">Lập trình nhúng</a></li>
                            <li><a href="#">Công nghệ thông tin</a></li>
                            <li><a href="#">Tài liệu khác</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Cài đặt phần
                                mềm</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-code"></i> <span class="nav-label">API DEV</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Convert image to text</a></li>
                            <li><a href="#">Auto Click</a></li>
                            <li><a href="#">File Upload</a></li>
                        </ul>
                    </li>
                    <li class="special_link">
                        <a href="#"><i class="fa fa-database"></i> <span class="nav-label">ADMIN</span></a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "SideMenu",
    data() {
        return {};
    },
    props: {
        title: String,
    },

}
</script>

<style lang="scss" scoped></style>