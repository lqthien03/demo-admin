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
                        <li class="breadcrumb-item active">Chỉnh sửa Nhà đất</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post"
                action="index.php?com=product&act=save&type=san-pham&p=1" enctype="multipart/form-data">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                            class="far fa-save mr-2"></i>Lưu tại trang</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="index.php?com=product&act=man&type=san-pham&p=1"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Đường dẫn</h3>
                                <span class="pl-2 text-danger">(Vui lòng không nhập trùng tiêu đề)</span>
                            </div>
                            <div class="card-body card-slug">
                                <div class="form-group mb-2">
                                    <label for="slugchange"
                                        class="d-inline-block align-middle text-info mb-0 mr-2">Thay đổi đường dẫn theo
                                        tiêu đề mới:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input" name="slugchange"
                                            id="slugchange">
                                        <label for="slugchange" class="custom-control-label"></label>
                                    </div>
                                </div>

                                <input type="hidden" class="slug-id" value="347">
                                <input type="hidden" class="slug-copy" value="0">

                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                    href="#tabs-sluglang-vi" role="tab"
                                                    aria-controls="tabs-sluglang-vi" aria-selected="true">Tiếng
                                                    Việt</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                            <div class="tab-pane fade show active" id="tabs-sluglang-vi"
                                                role="tabpanel" aria-labelledby="tabs-lang">
                                                <div class="form-gourp mb-0">
                                                    <label class="d-block">Đường dẫn mẫu (vi):<span
                                                            class="pl-2 font-weight-normal"
                                                            id="slugurlpreviewvi">https://nhadatminhphat.com.vn/<strong
                                                                class="text-info">ban-nha-hem-5m-2-sec-le-dinh-can-p-tan-tao-quan-binh-tan-tphcm</strong></span></label>
                                                    <input type="text" class="form-control slug-input no-validate"
                                                        name="slugvi" id="slugvi" placeholder="Đường dẫn (vi)"
                                                        value="ban-nha-hem-5m-2-sec-le-dinh-can-p-tan-tao-quan-binh-tan-tphcm">
                                                    <input type="hidden" id="slug-defaultvi"
                                                        value="ban-nha-hem-5m-2-sec-le-dinh-can-p-tan-tao-quan-binh-tan-tphcm">
                                                    <p class="alert-slugvi text-danger d-none mt-2 mb-0"
                                                        id="alert-slug-dangervi">
                                                        <i class="fas fa-exclamation-triangle mr-1"></i>
                                                        <span>Đường dẫn đã tồn tại. Đường dẫn truy cập mục này có thể bị
                                                            trùng lặp.</span>
                                                    </p>
                                                    <p class="alert-slugvi text-success d-none mt-2 mb-0"
                                                        id="alert-slug-successvi">
                                                        <i class="fas fa-check-circle mr-1"></i>
                                                        <span>Đường dẫn hợp lệ.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Nội dung Nhà đất</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                    href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi"
                                                    aria-selected="true">Tiếng Việt</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body card-article">
                                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                            <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                                aria-labelledby="tabs-lang">
                                                <div class="form-group">
                                                    <label for="tenvi">Tiêu đề (vi):</label>
                                                    <input type="text" class="form-control for-seo"
                                                        name="data[tenvi]" id="tenvi" placeholder="Tiêu đề (vi)"
                                                        value="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="motavi">Mô tả (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="data[motavi]" id="motavi" rows="5"
                                                        placeholder="Mô tả (vi)"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noidungvi">Nội dung (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="data[noidungvi]" id="noidungvi" rows="5"
                                                        placeholder="Nội dung (vi)"><p>Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm</p>

        <p>Diện tích : 4 x14 m,hẻm xe hơi, gần Chợ Lê Đình Cẩn và Tỉnh Lộ 10</p>

        <p>Kết cấu : 1 trệt + 1 lầu đúc</p>

        <p>Giá bán : 3,75 tỷ có tl.</p>

        <p>Vui lòng liên hệ: 0935 61 39 86.</p>
        </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Danh mục Nhà đất</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Danh mục cấp 1:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0"
                                            data-type="san-pham" data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category">
                                            <option value="0">Chọn danh mục</option>
                                            <option value=17>Nhà 72m2 một lầu đúc cần tiền bán gấp </option>
                                            <option value=6 selected>NHÀ ĐẤT BÁN</option>
                                            <option value=7>NHÀ ĐẤT CHO THUÊ</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_cat">Danh mục cấp 2:</label>
                                        <select id="id_cat" name="data[id_cat]" data-level="1"
                                            data-type="san-pham" data-table="#_product_item" data-child="id_item"
                                            class="form-control select2 select-category">
                                            <option value="0">Chọn danh mục</option>
                                            <option value=36 selected>NHÀ ĐẤT BÌNH TÂN</option>
                                            <option value=3>NHÀ ĐẤT TÂY NINH</option>
                                            <option value=4>NHÀ ĐẤT QUẬN 12</option>
                                            <option value=5>NHÀ ĐẤT HÓC MÔN</option>
                                            <option value=6>NHÀ ĐẤT CỦ CHI</option>
                                            <option value=7>NHÀ ĐẤT Q3 TP.HCM</option>
                                            <option value=8>NHÀ ĐẤT TÂN PHÚ</option>
                                            <option value=37>NHÀ ĐẤT BÌNH CHÁNH</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Hình ảnh Nhà đất</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="photoUpload-zone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                            src="../upload/product/img8111-9588390x320-8857.jpg"
                                            onerror="src='assets/images/noimage.png'" alt="Alt Photo" /></div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="file" id="file-zone">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                        <p class="photoUpload-or">hoặc</p>
                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                    </label>
                                    <div class="photoUpload-dimension">Width: 600 px - Height: 600 px
                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin Nhà đất</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox"
                                    name="data[hienthi]" id="hienthi-checkbox" checked>
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stt" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                            <input type="number" class="form-control form-control-mini d-inline-block align-middle"
                                min="0" name="data[stt]" id="stt" placeholder="Số thứ tự"
                                value="1">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="d-block" for="masp">Mã sản phẩm:</label>
                                <input type="text" class="form-control" name="data[masp]" id="masp"
                                    placeholder="Mã sản phẩm" value="">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="d-block" for="gia">Giá bán:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control format-price gia_ban" name="data[gia]"
                                        id="gia" placeholder="Giá bán" value="3750000000">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><strong>VNĐ</strong></div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group col-md-4 col-sm-6">
                                <label for="diachi">Địa chỉ:</label>
                                <input type="text" class="form-control" name="data[options2][diachi]"
                                    id="diachi" placeholder="Địa chỉ"
                                    value="Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="kichthuoc">Kích thước:</label>
                                <input type="text" class="form-control" name="data[options2][kichthuoc]"
                                    id="kichthuoc" placeholder="Kích thước" value="4 x 14">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="dientich">Diện tích:</label>
                                <input type="text" class="form-control" name="data[options2][dientich]"
                                    id="dientich" placeholder="Diện tích" value="56">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="lienhe">Liên hệ:</label>
                                <input type="text" class="form-control" name="data[options2][lienhe]"
                                    id="lienhe" placeholder="Liên hệ" value="0935 613 986.">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="huong">Hướng:</label>
                                <input type="text" class="form-control" name="data[options2][huong]"
                                    id="huong" placeholder="Hướng" value="">
                            </div>

                            <div class="form-group col-md-4 col-sm-6">
                                <label for="vitri">Vị trí:</label>
                                <input type="text" class="form-control" name="data[options2][vitri]"
                                    id="vitri" placeholder="Vị trí" value="">
                            </div>





                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Bộ sưu tập Nhà đất</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="filer-gallery" class="label-filer-gallery mb-3">Album hình:
                                (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</label>
                            <input type="file" name="files[]" id="filer-gallery" multiple="multiple">
                            <input type="hidden" class="col-filer"
                                value="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6">
                            <input type="hidden" class="act-filer" value="man">
                            <input type="hidden" class="folder-filer" value="product">
                        </div>
                        <div class="form-group form-group-gallery">
                            <label class="label-filer">Album hiện tại:</label>
                            <div class="action-filer mb-3">
                                <a class="btn btn-sm bg-gradient-primary text-white check-all-filer mr-1"><i
                                        class="far fa-square mr-2"></i>Chọn tất cả</a>
                                <button type="button"
                                    class="btn btn-sm bg-gradient-success text-white sort-filer mr-1"><i
                                        class="fas fa-random mr-2"></i>Sắp xếp</button>
                                <a class="btn btn-sm bg-gradient-danger text-white delete-all-filer"><i
                                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                            </div>
                            <div
                                class="alert my-alert alert-sort-filer alert-info text-sm text-white bg-gradient-info">
                                <i class="fas fa-info-circle mr-2"></i>Có thể chọn nhiều hình để di chuyển</div>
                            <div class="jFiler-items my-jFiler-items jFiler-row">
                                <ul class="jFiler-items-list jFiler-items-grid row scroll-bar" id="jFilerSortable">
                                    <li class="jFiler-item my-jFiler-item my-jFiler-item-1602 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6"
                                        data-id="1602">
                                        <div class="jFiler-item-container">
                                            <div class="jFiler-item-inner">
                                                <div class="jFiler-item-thumb">
                                                    <div class="jFiler-item-thumb-image"><img
                                                            src="../upload/product/img8112-1997-9359.jpg"
                                                            alt=""><i class="fas fa-arrows-alt"></i></div>
                                                </div>
                                                <div class="jFiler-item-assets jFiler-row">
                                                    <ul
                                                        class="list-inline pull-right d-flex align-items-center justify-content-between">
                                                        <li class="ml-1"><a
                                                                class="icon-jfi-trash jFiler-item-trash-action my-jFiler-item-trash"
                                                                data-id="1602" data-folder="product"></a></li>
                                                        <li class="mr-1">
                                                            <div
                                                                class="custom-control custom-checkbox d-inline-block align-middle text-md">
                                                                <input type="checkbox"
                                                                    class="custom-control-input filer-checkbox"
                                                                    id="filer-checkbox-1602" value="1602"><label
                                                                    for="filer-checkbox-1602"
                                                                    class="custom-control-label font-weight-normal">Chọn</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><input type="number"
                                                    class="form-control form-control-sm my-jFiler-item-info rounded mb-1"
                                                    value="7" placeholder="Số thứ tự" data-info="stt"
                                                    data-id="1602" /><input type="text"
                                                    class="form-control form-control-sm my-jFiler-item-info rounded"
                                                    value="" placeholder="Tiêu đề" data-info="tieude"
                                                    data-id="1602" />
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung SEO</h3>
                        <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo"
                            title="Tạo SEO">Tạo SEO</a>
                    </div>
                    <div class="card-body">
                        <!-- SEO -->
                        <div class="card-seo">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="tabs-lang" data-toggle="pill"
                                                href="#tabs-seolang-vi" role="tab"
                                                aria-controls="tabs-seolang-vi" aria-selected="true">SEO (Tiếng
                                                Việt)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                        <div class="tab-pane fade show active" id="tabs-seolang-vi" role="tabpanel"
                                            aria-labelledby="tabs-lang">
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="titlevi">SEO Title (vi):</label>
                                                    <strong class="count-seo"><span>67</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo title-seo"
                                                    name="dataSeo[titlevi]" id="titlevi"
                                                    placeholder="SEO Title (vi)"
                                                    value="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>67</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="dataSeo[keywordsvi]" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)"
                                                    value="Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>158</span>/160 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                    rows="5" placeholder="SEO Description (vi)">Bán nhà hẻm 5m 2 Sẹc Lê Đình Cẩn ,P .Tân Tạo ,Quận Bình Tân, Tp.Hcm Diện tích : 4 x14 m,hẻm xe hơi, gần Chợ Lê Đình Cẩn và Tỉnh Lộ 10 Kết cấu : 1 trệt + 1 lầu</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="seo-create" value="vi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-sm">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                            class="far fa-save mr-2"></i>Lưu tại trang</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="index.php?com=product&act=man&type=san-pham&p=1"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                    <input type="hidden" name="id" value="347">
                </div>
            </form>
        </section>
    </div>
</body>

</html>
