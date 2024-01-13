<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('./css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ url('./css/adminlte-style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item nav-item-hello d-sm-inline-block">
                <a class="nav-link"><span class="text-split">Xin chào, admin!</span></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications -->
            <li class="nav-item d-sm-inline-block">
                <a href="../" target="_blank" class="nav-link"><i class="fas fa-reply"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a id="dropdownSubMenu-info" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-cogs"></i></a>
                <ul aria-labelledby="dropdownSubMenu-info" class="dropdown-menu dropdown-menu-right border-0 shadow">
                    <li>
                        <a href="index.php?com=user&act=admin_edit" class="dropdown-item">
                            <i class="fas fa-user-cog"></i>
                            <span>Thông tin admin</span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="index.php?com=user&act=admin_edit&changepass=1" class="dropdown-item">
                            <i class="fas fa-key"></i>
                            <span>Đổi mật khẩu</span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="index.php?com=cache&act=delete" class="dropdown-item">
                            <i class="far fa-trash-alt"></i>
                            <span>Xóa bộ nhớ tạm</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-bell"></i>
                    <span class="badge badge-danger">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow">
                    <span class="dropdown-item dropdown-header p-0">Thông báo</span>


                    <div class="dropdown-divider"></div>
                    <a href="index.php?com=newsletter&act=man&type=lien-he" class="dropdown-item"><i
                            class="fas fa-mail-bulk mr-2"></i></i><span class="badge badge-danger mr-1">0</span> Thư
                        liên hệ</a>
                    <div class="dropdown-divider"></div>
                    <a href="index.php?com=newsletter&act=man&type=dangkynhantin" class="dropdown-item"><i
                            class="fas fa-mail-bulk mr-2"></i></i><span class="badge badge-danger mr-1">0</span> Đăng ký
                        tư vấn</a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>
            <li class="nav-item d-sm-inline-block">
                <a href="index.php?com=user&act=logout" class="nav-link"><i class="fas fa-sign-out-alt mr-1"></i>Đăng
                    xuất</a>
            </li>
        </ul>
    </nav><!-- Main Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
        <!-- Logo -->


        <!-- Sidebar -->
        <img src="../assets/images/logo-admin.png" alt="Mô tả hình ảnh"
            style="width: 190px; margin-top: 45px; margin-left: 20px;">

        <div class="sidebar">

            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview"
                    role="menu" data-accordion="false">
                    <!-- Bảng điều khiển -->
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.php" title="Bảng điều khiển">
                            <i class="nav-icon text-sm fas fa-tachometer-alt"></i>
                            <p>Bảng điều khiển</p>
                        </a>
                    </li>

                    <!-- Group -->

                    <!-- Sản phẩm -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý Nhà đất">
                            <i class="nav-icon text-sm fas fa-boxes"></i>
                            <p>
                                Quản lý Nhà đất <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item "><a class="nav-link " href="" title="Danh mục cấp 1"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 1</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="" title="Danh mục cấp 2"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 2</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="" title="Nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Nhà đất</p>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Bài viết (Có cấp) -->

                    <!-- Bài viết (Không cấp) -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý bài viết">
                            <i class="nav-icon text-sm far fa-newspaper"></i>
                            <p>
                                Quản lý bài viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Tin tức"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tin tức</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Thủ tục nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thủ tục nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tư vấn</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Cart -->

                    <!-- Tags -->

                    <!-- Newsletter -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý nhận tin">
                            <i class="nav-icon text-sm fas fa-envelope"></i>
                            <p>
                                Quản lý nhận tin
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Thư liên hệ"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thư liên hệ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Đăng ký tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Đăng ký tư vấn</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Static -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý trang tĩnh">
                            <i class="nav-icon text-sm fas fa-bookmark"></i>
                            <p>
                                Quản lý trang tĩnh
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Giới thiệu"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Giới thiệu</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Liên hệ"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Liên hệ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Text đăng ký tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Text đăng ký tư vấn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Hỗ trợ khách hàng"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Hỗ trợ khách hàng</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Footer"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Footer</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Gallery -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý hình ảnh - video">
                            <i class="nav-icon text-sm fas fa-photo-video"></i>
                            <p>
                                Quản lý hình ảnh - video
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Logo"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Logo</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Banner"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Favicon"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Favicon</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Slideshow"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Slideshow</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Mạng xã hội"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Mạng xã hội</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Địa điểm -->

                    <!-- User -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý user">
                            <i class="nav-icon text-sm fas fa-users"></i>
                            <p>
                                Quản lý user
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a class="nav-link " href="" title="Thông tin admin"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thông tin admin</p>
                                </a></li>
                        </ul>
                    </li>

                    <!-- Onesignal -->

                    <!-- SEO page -->
                    <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý SEO page">
                            <i class="nav-icon text-sm fas fa-share-alt"></i>
                            <p>
                                Quản lý SEO page
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Tin tức"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tin tức</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Thủ tục nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thủ tục nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="" title="Tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tư vấn</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Thiết lập thông tin -->
                    <li class="nav-item  ">
                        <a class="nav-link " href="" title="Thiết lập thông tin">
                            <i class="nav-icon text-sm fas fa-cogs"></i>
                            <p>Thiết lập thông tin</p>
                        </a>
                    </li>
                </ul>
            </nav>
    </aside>
    <div class="content-wrapper">
        <section class="content-header text-sm">
            <div class="container-fluid">
                <div class="row">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a>
                        </li>
                        <li class="breadcrumb-item active">Quản lý Tư vấn</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=news&act=add&type=tutu-van&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tutu-van&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=news&act=man&type=tutu-van&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=news&act=man&type=tutu-van&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title">Danh sách Tư vấn</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="align-middle" width="5%">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                        <label for="selectall-checkbox" class="custom-control-label"></label>
                                    </div>
                                </th>
                                <th class="align-middle text-center" width="10%">STT</th>
                                <th class="align-middle">Hình</th>
                                <th class="align-middle" style="width:30%">Tiêu đề</th>
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-61" value="61">
                                        <label for="select-checkbox-61" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="61" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tutu-van&p=1&id=61"
                                        title="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x70x1/upload/news/timthumb-5209.jpg"
                                            alt="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tutu-van&p=1&id=61"
                                        title="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ">VAY TIỀN NGÂN HÀNG MUA NHÀ,
                                        DỄ MÀ KHÔNG DỄ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/vay-tien-ngan-hang-mua-nha-de-ma-khong-de"
                                            target="_blank" title="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tutu-van&p=1&id=61"
                                            title="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="61"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id_copy=61"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=61"
                                            title="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-61" data-table="news" data-id="61"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-61" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="61"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id=61"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tutu-van&p=1&id=61"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=61"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-60" value="60">
                                        <label for="select-checkbox-60" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="60" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tutu-van&p=1&id=60"
                                        title="DỊCH VỤ LÀM SỔ ĐỎ"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x70x1/upload/news/timthumb-7173.jpg"
                                            alt="DỊCH VỤ LÀM SỔ ĐỎ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tutu-van&p=1&id=60"
                                        title="DỊCH VỤ LÀM SỔ ĐỎ">DỊCH VỤ LÀM SỔ ĐỎ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/dich-vu-lam-so-do" target="_blank"
                                            title="DỊCH VỤ LÀM SỔ ĐỎ"><i class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tutu-van&p=1&id=60"
                                            title="DỊCH VỤ LÀM SỔ ĐỎ"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="60"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id_copy=60"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=60"
                                            title="DỊCH VỤ LÀM SỔ ĐỎ"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-60" data-table="news" data-id="60"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-60" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="60"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id=60"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tutu-van&p=1&id=60"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=60"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-59" value="59">
                                        <label for="select-checkbox-59" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="59" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tutu-van&p=1&id=59"
                                        title="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x70x1/upload/news/timthumb-2539.jpg"
                                            alt="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tutu-van&p=1&id=59"
                                        title="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT">GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/gia-tinh-thue-chuyen-nhuong-dat"
                                            target="_blank" title="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tutu-van&p=1&id=59"
                                            title="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="59"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id_copy=59"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=59"
                                            title="GIÁ TÍNH THUẾ CHUYỂN NHƯỢNG ĐẤT"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-59" data-table="news" data-id="59"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-59" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="59"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id=59"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tutu-van&p=1&id=59"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=59"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-58" value="58">
                                        <label for="select-checkbox-58" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="58" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tutu-van&p=1&id=58"
                                        title="XIN PHÉP XÂY DỰNG"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x70x1/upload/news/timthumb-5392.jpg"
                                            alt="XIN PHÉP XÂY DỰNG"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tutu-van&p=1&id=58"
                                        title="XIN PHÉP XÂY DỰNG">XIN PHÉP XÂY DỰNG</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/xin-phep-xay-dung" target="_blank"
                                            title="XIN PHÉP XÂY DỰNG"><i class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tutu-van&p=1&id=58"
                                            title="XIN PHÉP XÂY DỰNG"><i class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="58"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id_copy=58"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=58"
                                            title="XIN PHÉP XÂY DỰNG"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-58" data-table="news" data-id="58"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-58" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="58"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tutu-van&p=1&id=58"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tutu-van&p=1&id=58"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tutu-van&p=1&id=58"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=news&act=add&type=tutu-van&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tutu-van&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
</body>

</html>
