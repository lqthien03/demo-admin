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
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/priceFormat.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
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
                     <!-- Sản phẩm -->
                     <li class="nav-item has-treeview  ">
                        <a class="nav-link " href="#" title="Quản lý Nhà đất">
                            <i class="nav-icon text-sm fas fa-boxes"></i>
                            <p>
                                Quản lý Nhà đất <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item "><a class="nav-link " href="/real_estate/category-level1" title="Danh mục cấp 1"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 1</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="/real_estate/category-level2" title="Danh mục cấp 2"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 2</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="/real_estate/product" title="Nhà đất"><i
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
                                <a class="nav-link " href="/posts/news" title="Tin tức"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tin tức</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/posts/procedure" title="Thủ tục nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thủ tục nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/posts/advise" title="Tư vấn"><i
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
                                <a class="nav-link " href="/mail/contact" title="Thư liên hệ"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thư liên hệ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="mail/register-advise" title="Đăng ký tư vấn"><i
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
                                <a class="nav-link " href="/static-page/introduce" title="Giới thiệu"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Giới thiệu</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/introduce" title="Liên hệ"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Liên hệ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/register_advise" title="Text đăng ký tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Text đăng ký tư vấn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/customer-support" title="Hỗ trợ khách hàng"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Hỗ trợ khách hàng</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/footer" title="Footer"><i
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
                                <a class="nav-link " href="/image-video/logo" title="Logo"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Logo</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/banner" title="Banner"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/favicon" title="Favicon"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Favicon</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/slideshow" title="Slideshow"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Slideshow</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/social_network" title="Mạng xã hội"><i
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
                            <li class="nav-item"><a class="nav-link " href="/users/information" title="Thông tin admin"><i
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
                                <a class="nav-link " href="/seopage/seo-estate" title="Nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-news" title="Tin tức"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tin tức</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-procedure" title="Thủ tục nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thủ tục nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-advise" title="Tư vấn"><i
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
                        <li class="breadcrumb-item active">Quản lý Tin tức</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=news&act=add&type=tin-tuc&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tin-tuc&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=news&act=man&type=tin-tuc&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=news&act=man&type=tin-tuc&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title">Danh sách Tin tức</h3>
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
                                <th class="align-middle text-center">Nổi bật</th>
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-63" value="63">
                                        <label for="select-checkbox-63" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="63" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=63"
                                        title="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/bds-2018-1518860612-8152.jpg"
                                            alt="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=63"
                                        title="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018">4 lý do nên
                                        thận trọng khi đầu tư bất động sản năm 2018</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/4-ly-do-nen-than-trong-khi-dau-tu-bat-dong-san-nam-2018"
                                            target="_blank"
                                            title="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=63"
                                            title="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="63"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_copy=63"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=63"
                                            title="4 lý do nên thận trọng khi đầu tư bất động sản năm 2018"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-63" data-table="news" data-id="63"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-63" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-63" data-table="news" data-id="63"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-63" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="63"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id=63"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=63" title="Chỉnh sửa"><i
                                            class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=63"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-62" value="62">
                                        <label for="select-checkbox-62" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="62" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=62"
                                        title="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/chungcunguyenduccanhcafeland-1524577252-9937.jpg"
                                            alt="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=62"
                                        title="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước">Hiện
                                        tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/hien-tuong-sot-dat-hien-nay-se-khong-lap-lai-kich-ban-10-nam-truoc"
                                            target="_blank"
                                            title="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=62"
                                            title="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="62"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_copy=62"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=62"
                                            title="Hiện tượng sốt đất hiện nay sẽ không lặp lại kịch bản 10 năm trước"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-62" data-table="news" data-id="62"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-62" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-62" data-table="news" data-id="62"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-62" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="62"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id=62"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=62" title="Chỉnh sửa"><i
                                            class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=62"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-5" value="5">
                                        <label for="select-checkbox-5" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="5" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                        title="Du lịch thúc đẩy bất động sản khu Đông Hà Nội"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/1234-8972-1598927817-7344.jpg"
                                            alt="Du lịch thúc đẩy bất động sản khu Đông Hà Nội"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                        title="Du lịch thúc đẩy bất động sản khu Đông Hà Nội">Du lịch thúc đẩy bất động
                                        sản khu Đông Hà Nội</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/travis-scott-reveals-early-sample-of-his-nike-2020"
                                            target="_blank" title="Du lịch thúc đẩy bất động sản khu Đông Hà Nội"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                            title="Du lịch thúc đẩy bất động sản khu Đông Hà Nội"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="5"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id_copy=5"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                            title="Du lịch thúc đẩy bất động sản khu Đông Hà Nội"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-5" data-table="news" data-id="5"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-5" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-5" data-table="news" data-id="5"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-5" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="5"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=2&id_cat=4&id_item=6&id_sub=3&id=5"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-4" value="4">
                                        <label for="select-checkbox-4" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="2" data-id="4" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=4"
                                        title="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/a-tb-bds-khu-dong-tp-vu-le-2691-1540720572-6835.jpg"
                                            alt="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=4"
                                        title="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%">Đề xuất tăng
                                        hệ số điều chỉnh giá đất TP HCM lên tới 30%</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/de-xuat-tang-he-so-dieu-chinh-gia-dat-tp-hcm-len-toi-30"
                                            target="_blank"
                                            title="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=4"
                                            title="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="4"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=1&id_copy=4"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=1&id=4"
                                            title="Đề xuất tăng hệ số điều chỉnh giá đất TP HCM lên tới 30%"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-4" data-table="news" data-id="4"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-4" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-4" data-table="news" data-id="4"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-4" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="4"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=1&id=4"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=4"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=1&id=4"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-3" value="3">
                                        <label for="select-checkbox-3" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="3" data-id="3" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=3"
                                        title="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/nha-dau-tu-ngoai-quan-tam-phan-khuc-bat-dong-san-nao-tai-viet-nam-1532990178-1942.jpg"
                                            alt="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=3"
                                        title="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?">Nhà
                                        đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/nha-dau-tu-nuoc-ngoai-quan-tam-loai-hinh-bat-dong-san-nao-tai-viet-nam"
                                            target="_blank"
                                            title="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=3"
                                            title="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="3"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=1&id_copy=3"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=1&id=3"
                                            title="Nhà đầu tư nước ngoài quan tâm loại hình bất động sản nào tại Việt Nam?"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-3" data-table="news" data-id="3"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-3" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-3" data-table="news" data-id="3"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-3" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="3"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_list=1&id=3"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id_list=1&id=3"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id_list=1&id=3"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-22" value="22">
                                        <label for="select-checkbox-22" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="4" data-id="22" data-table="news">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=22"
                                        title="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?"><img
                                            class="rounded img-preview"
                                            src="../thumbs/100x70x1/upload/news/gia-dat-nen-tang-chong-mat-1516961385-5310.jpg"
                                            alt="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark" href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=22"
                                        title="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?">Vì sao giá đất nền tăng
                                        phi mã từ Bắc vào Nam?</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/vi-sao-gia-dat-nen-tang-phi-ma-tu-bac-vao-nam"
                                            target="_blank" title="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=22"
                                            title="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="22"
                                                        data-table="news" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id_copy=22"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=22"
                                            title="Vì sao giá đất nền tăng phi mã từ Bắc vào Nam?"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-22" data-table="news" data-id="22"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-22" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-22" data-table="news" data-id="22"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-22" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="22"
                                                    data-table="news"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=news&act=copy&type=tin-tuc&p=1&id=22"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=news&act=edit&type=tin-tuc&p=1&id=22" title="Chỉnh sửa"><i
                                            class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=news&act=delete&type=tin-tuc&p=1&id=22"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=news&act=add&type=tin-tuc&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=news&act=delete&type=tin-tuc&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
</body>

</html>
