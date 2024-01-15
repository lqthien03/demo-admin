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
                        <li class="breadcrumb-item active">Quản lý Nhà đất</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=product&act=add&type=san-pham&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=product&act=delete&type=san-pham&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=product&act=man&type=san-pham&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=product&act=man&type=san-pham&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer form-group-category text-sm bg-light row">
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><select id="id_list"
                        name="id_list" onchange="onchange_category($(this))"
                        class="form-control filer-category select2">
                        <option value="0">Chọn danh mục</option>
                        <option value=17>Nhà 72m2 một lầu đúc cần tiền bán gấp </option>
                        <option value=6>NHÀ ĐẤT BÁN</option>
                        <option value=7>NHÀ ĐẤT CHO THUÊ</option>
                    </select></div>
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><select id="id_cat"
                        name="id_cat" onchange="onchange_category($(this))"
                        class="form-control filer-category select2">
                        <option value="0">Chọn danh mục</option>
                        <option value=35>NHÀ ĐẤT LONG AN</option>
                    </select></div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title">Danh sách Nhà đất</h3>
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
                                <th class="align-middle">Gallery</th>
                                <th class="align-middle text-center">Nổi bật</th>
                                <th class="align-middle text-center">New</th>
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-347" value="347">
                                        <label for="select-checkbox-347" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="347" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                        title="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8111-9588390x320-8857.jpg"
                                            alt="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                        title="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm">Bán
                                        nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-nha-hem-5m-2-sec-le-dinh-can-p-tan-tao-quan-binh-tan-tphcm"
                                            target="_blank"
                                            title="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                            title="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="347"
                                                        data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id_copy=347"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                            title="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=347&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-347" data-table="product" data-id="347"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-347" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-347" data-table="product" data-id="347"
                                            data-loai="moi" checked>
                                        <label for="show-checkbox-moi-347" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-347" data-table="product" data-id="347"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-347" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="347"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=347"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-346" value="346">
                                        <label for="select-checkbox-346" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="346" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                        title="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8081-6616390x320-3553.jpg"
                                            alt="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                        title="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM">Bán
                                        2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi
                                        ,Tp.HCM</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-2155-m-24-x-90-m-mat-tien-duong-vo-van-dieu-xa-phuoc-thanh-cu-chi-tphcm"
                                            target="_blank"
                                            title="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                            title="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="346"
                                                        data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=6&id_copy=346"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                            title="Bán 2155 m (24 x 90 m) mặt tiền đường Võ Văn Điều ,Xã Phước Thạnh, Củ Chi ,Tp.HCM"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=346&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-346" data-table="product" data-id="346"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-346" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-346" data-table="product" data-id="346"
                                            data-loai="moi" checked>
                                        <label for="show-checkbox-moi-346" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-346" data-table="product" data-id="346"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-346" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="346"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=6&id=346"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-345" value="345">
                                        <label for="select-checkbox-345" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="345" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                        title="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8393-4327390x320-5077.jpg"
                                            alt="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                        title="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh">Nhà 48 m2 Thới
                                        Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/nha-48-m2-thoi-hoa-duong-so-7-vinh-loc-a-binh-chanh"
                                            target="_blank"
                                            title="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                            title="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="345"
                                                        data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=37&id_copy=345"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                            title="Nhà 48 m2 Thới Hoà , Đường Số 7 ,Vĩnh Lộc A ,Bình Chánh"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=345&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-345" data-table="product" data-id="345"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-345" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-345" data-table="product" data-id="345"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-345" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-345" data-table="product" data-id="345"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-345" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="345"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=37&id=345"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-344" value="344">
                                        <label for="select-checkbox-344" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="344" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                        title="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8445-8215390x320-4401.jpg"
                                            alt="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                        title="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm">Bán
                                        nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-nha-3-lau-mat-tien-ho-van-long-p-bhh-b-quan-binh-tan-tphcm"
                                            target="_blank"
                                            title="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                            title="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="344"
                                                        data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id_copy=344"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                            title="Bán nhà 3 lầu mặt tiền Hồ Văn Long -P. Bhh B-Quận BÌnh Tân TP.Hcm"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=344&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-344" data-table="product" data-id="344"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-344" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-344" data-table="product" data-id="344"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-344" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-344" data-table="product" data-id="344"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-344" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="344"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=344"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-343" value="343">
                                        <label for="select-checkbox-343" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="343" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=343"
                                        title="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8394-7064390x320-5038.jpg"
                                            alt="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=343"
                                        title="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An">Bán 1200 m đất xã
                                        Đức Hòa Thượng ,Đức Hoà ,Long An</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-1200-m-dat-xa-duc-hoa-thuong-duc-hoa-long-an"
                                            target="_blank"
                                            title="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=343"
                                            title="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now" data-id="343"
                                                        data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_copy=343"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id=343"
                                            title="Bán 1200 m  đất xã Đức Hòa Thượng ,Đức Hoà ,Long An"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=343&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-343" data-table="product" data-id="343"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-343" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-343" data-table="product" data-id="343"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-343" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-343" data-table="product" data-id="343"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-343" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="343"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id=343"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=343"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id=343"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-342" value="342">
                                        <label for="select-checkbox-342" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="342" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                        title="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img8803-1189390x320-5170.jpg"
                                            alt="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                        title="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ">Bán 2486 m2 đất có sẵn
                                        2 căn nhà vườn chỉ 4 tỷ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-2486-m2-dat-co-san-2-can-nha-vuon-chi-4-ty"
                                            target="_blank"
                                            title="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                            title="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now"
                                                        data-id="342" data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=3&id_copy=342"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                            title="Bán 2486 m2 đất có sẵn 2 căn nhà vườn chỉ 4 tỷ"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=342&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-342" data-table="product" data-id="342"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-342" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-342" data-table="product" data-id="342"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-342" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-342" data-table="product" data-id="342"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-342" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="342"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=3&id=342"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-341" value="341">
                                        <label for="select-checkbox-341" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="341" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                        title="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img9548-1089390x320-5970.jpg"
                                            alt="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                        title="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ">Nhà
                                        4 x 17.5m. Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp chỉ 5.5 tỷ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/nha-4-x-175m-lien-khu-4-5-xay-dung-1-tret-3-lau-cao-cap-chi-55-ty"
                                            target="_blank"
                                            title="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                            title="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now"
                                                        data-id="341" data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id_copy=341"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                            title="Nhà 4 x 17.5m.  Liên khu 4-5. Xây dựng 1 trệt 3 lầu cao cấp  chỉ 5.5 tỷ"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=341&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-341" data-table="product" data-id="341"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-341" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-341" data-table="product" data-id="341"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-341" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-341" data-table="product" data-id="341"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-341" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="341"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=341"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-340" value="340">
                                        <label for="select-checkbox-340" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="340" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                        title="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân"><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img9116-6604390x320-1528.jpg"
                                            alt="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                        title="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân">Nhà đẹp 80 m2
                                        đường Số 10 - P. Bình Hưng Hòa B, Bình Tân</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/nha-dep-80-m2-duong-so-10-p-binh-hung-hoa-b-binh-tan"
                                            target="_blank"
                                            title="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                            title="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now"
                                                        data-id="340" data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id_copy=340"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                            title="Nhà đẹp 80 m2 đường Số 10 - P. Bình Hưng Hòa B, Bình Tân"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=340&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-340" data-table="product" data-id="340"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-340" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-340" data-table="product" data-id="340"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-340" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-340" data-table="product" data-id="340"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-340" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="340"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=36&id=340"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-339" value="339">
                                        <label for="select-checkbox-339" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="339" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                        title="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ"><img class="rounded img-preview"
                                            onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/img9895-3184390x320-5879.jpg"
                                            alt="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ"></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                        title="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ">Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ</a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/nha-35-x-9-1-lau-dep-325-ty"
                                            target="_blank" title="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ"><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                            title="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ"><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now"
                                                        data-id="339" data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=8&id_copy=339"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                            title="Nhà 3.5 x 9 1 lầu đẹp 3.25 tỷ"><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=339&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-339" data-table="product" data-id="339"
                                            data-loai="noibat">
                                        <label for="show-checkbox-noibat-339" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-339" data-table="product" data-id="339"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-339" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-339" data-table="product" data-id="339"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-339" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="339"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id_cat=8&id=339"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox"
                                            id="select-checkbox-338" value="338">
                                        <label for="select-checkbox-338" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-stt"
                                        min="0" value="1" data-id="338" data-table="product">
                                </td>
                                <td class="align-middle">
                                    <a href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=338"
                                        title="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An "><img
                                            class="rounded img-preview" onerror="src='assets/images/noimage.png'"
                                            src="../thumbs/100x100x1/upload/product/z284345572543051bcf098fac7e023afea9170053ab7ea-9160390x320-9182.jpg"
                                            alt="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An "></a>
                                </td>
                                <td class="align-middle">
                                    <a class="text-dark"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=338"
                                        title="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An ">Bán
                                        gấp trong tuần 482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An </a>
                                    <div class="tool-action mt-2 w-clear">
                                        <a class="text-primary mr-3"
                                            href="https://nhadatminhphat.com.vn/ban-gap-trong-tuan-482m2-dat-full-tho-cu-thi-tran-duc-hoa-long-an"
                                            target="_blank"
                                            title="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An "><i
                                                class="far fa-eye mr-1"></i>View</a>
                                        <a class="text-info mr-3"
                                            href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=338"
                                            title="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An "><i
                                                class="far fa-edit mr-1"></i>Edit</a>
                                        <div class="dropdown">
                                            <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="nav-link dropdown-toggle text-success p-0 pr-3"><i
                                                    class="far fa-clone mr-1"></i>Copy</a>
                                            <ul aria-labelledby="dropdownCopy"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item copy-now"
                                                        data-id="338" data-table="product" data-copyimg=""><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                        chép ngay</a></li>
                                                <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id_copy=338"
                                                        class="dropdown-item"><i
                                                            class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                        sửa thông tin</a></li>
                                            </ul>
                                        </div>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id=338"
                                            title="Bán gấp trong tuần  482m2 đất full thổ cư Thị Trấn Đức Hòa ,Long An "><i
                                                class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm bg-gradient-success dropdown-toggle"
                                            id="dropdown-gallery" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Thêm</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-gallery">
                                            <a class="dropdown-item text-dark"
                                                href="index.php?com=product&act=man_photo&kind=man&type=san-pham&p=1&idc=338&val=san-pham"
                                                title="Hình ảnh"><i
                                                    class="far fa-caret-square-right text-secondary mr-2"></i>Hình
                                                ảnh</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-noibat-338" data-table="product" data-id="338"
                                            data-loai="noibat" checked>
                                        <label for="show-checkbox-noibat-338" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-moi-338" data-table="product" data-id="338"
                                            data-loai="moi">
                                        <label for="show-checkbox-moi-338" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input show-checkbox"
                                            id="show-checkbox-338" data-table="product" data-id="338"
                                            data-loai="hienthi" checked>
                                        <label for="show-checkbox-338" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <div class="dropdown d-inline-block align-middle">
                                        <a id="dropdownCopy" href="#" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"
                                            class="nav-link dropdown-toggle text-success p-0 pr-2"><i
                                                class="far fa-clone"></i></a>
                                        <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
                                            <li><a href="#" class="dropdown-item copy-now" data-id="338"
                                                    data-table="product"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Sao
                                                    chép ngay</a></li>
                                            <li><a href="index.php?com=product&act=copy&type=san-pham&p=1&id_list=6&id=338"
                                                    class="dropdown-item"><i
                                                        class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh
                                                    sửa thông tin</a></li>
                                        </ul>
                                    </div>
                                    <a class="text-primary mr-2"
                                        href="index.php?com=product&act=edit&type=san-pham&p=1&id_list=6&id=338"
                                        title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item"
                                        data-url="index.php?com=product&act=delete&type=san-pham&p=1&id_list=6&id=338"
                                        title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm pb-0">
                <ul class='pagination justify-content-center mb-0'>
                    <li class='page-item'><a class='page-link'
                            href='https://nhadatminhphat.com.vn/admin/index.php?com=product&act=man&type=san-pham'><i
                                class="fas fa-caret-left"></i></a></li>
                    <li class='page-item active'><a class='page-link'>1</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=2'>2</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=3'>3</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=4'>4</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=5'>5</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=6'>6</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=7'>7</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=8'>8</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=9'>9</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=10'>10</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=11'>11</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=12'>12</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=13'>13</a></li>
                    <li class='page-item'><a class='page-link'
                            href='index.php?com=product&act=man&type=san-pham&p=13'><i
                                class="fas fa-caret-right"></i></a></li>
                </ul>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=product&act=add&type=san-pham&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=product&act=delete&type=san-pham&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
</body>

</html>
