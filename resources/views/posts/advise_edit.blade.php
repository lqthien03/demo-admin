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
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light text-sm">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item nav-item-hello d-sm-inline-block">
                <a class="nav-link"><span class="text-split">Xin chào, {{ Auth::user()->name }}!</span></a>
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
                        <a href="/users/information/1" class="dropdown-item">
                            <i class="fas fa-user-cog"></i>
                            <span>Thông tin admin</span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="/users/resset-password/1" class="dropdown-item">
                            <i class="fas fa-key"></i>
                            <span>Đổi mật khẩu</span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a href="#" class="dropdown-item">
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
                    <a href="/mail/contact" class="dropdown-item"><i class="fas fa-mail-bulk mr-2"></i></i><span
                            class="badge badge-danger mr-1">{{ $total }}</span> Thư
                        liên hệ</a>
                    <div class="dropdown-divider"></div>
                    <a href="/mail/register-advise" class="dropdown-item"><i class="fas fa-mail-bulk mr-2"></i></i><span
                            class="badge badge-danger mr-1">0</span> Đăng ký
                        tư vấn</a>
                    <div class="dropdown-divider"></div>

                </div>
            </li>
            <li class="nav-item d-sm-inline-block">
                <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="nav-link"><i class="fas fa-sign-out-alt mr-1"></i>Đăng
                    xuất</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav><!-- Main Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 text-sm">
        <!-- Logo -->


        <!-- Sidebar -->
        <img src="{{ asset('images/logo-blue.png') }}" alt="logo"
            style="width: 190px; margin-top: 45px; margin-left: 20px;">

        <div class="sidebar">

            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent text-sm" data-widget="treeview"
                    role="menu" data-accordion="false">
                    <!-- Bảng điều khiển -->
                    <li class="nav-item active">
                        <a class="nav-link active" href="/dashboard" title="Bảng điều khiển">
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
                            <li class="nav-item "><a class="nav-link " href="/real_estate/category-level1"
                                    title="Danh mục cấp 1"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 1</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="/real_estate/category-level2"
                                    title="Danh mục cấp 2"><i class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Danh mục cấp 2</p>
                                </a></li>
                            <li class="nav-item "><a class="nav-link " href="/real_estate/product"
                                    title="Nhà đất"><i class="nav-icon text-sm far fa-caret-square-right"></i>
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
                                <a class="nav-link " href="/static-page/introduce/1" title="Giới thiệu"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Giới thiệu</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/contact/1" title="Liên hệ"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Liên hệ</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/register-advise/1"
                                    title="Text đăng ký tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Text đăng ký tư vấn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link "
                                    href="/static-page/customer-support/1
                                "
                                    title="Hỗ trợ khách hàng"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Hỗ trợ khách hàng</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/footer/1" title="Footer"><i
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
                                <a class="nav-link " href="/image-video/logo/1" title="Logo"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Logo</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/banner/1" title="Banner"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Banner</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/image-video/favicon/1" title="Favicon"><i
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
                            <li class="nav-item"><a class="nav-link " href="/users/information/1"
                                    title="Thông tin admin"><i class="nav-icon text-sm far fa-caret-square-right"></i>
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
                                <a class="nav-link " href="/seopage/seo-estate/1" title="Nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-news/1" title="Tin tức"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tin tức</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-procedure/1" title="Thủ tục nhà đất"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Thủ tục nhà đất</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/seopage/seo-advise/1" title="Tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Tư vấn</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Thiết lập thông tin -->
                    <li class="nav-item  ">
                        <a class="nav-link " href="/setting/1" title="Thiết lập thông tin">
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
                        <li class="breadcrumb-item active">Chỉnh sửa Tư vấn</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post" action="{{ route('update.advise', $advise) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="seo_id" value="{{ $advise->seo_id }}">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                            class="far fa-save mr-2"></i>Lưu tại trang</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="/posts/advise" title="Thoát"><i
                            class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
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

                                {{-- <input type="hidden" class="slug-id" value="61">
                                <input type="hidden" class="slug-copy" value="0"> --}}

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
                                                                class="text-info"></strong></span></label>
                                                    <input type="text" class="form-control slug-input no-validate"
                                                        name="link" id="slugvi" placeholder="Đường dẫn (vi)"
                                                        value="{{ old('link') ?? $advise->link }}">
                                                    <input type="hidden" id="slug-defaultvi"
                                                        value="vay-tien-ngan-hang-mua-nha-de-ma-khong-de">
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
                                <h3 class="card-title">Nội dung Tư vấn</h3>
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
                                                    <input type="text" class="form-control for-seo" name="tittle"
                                                        id="tenvi" placeholder="Tiêu đề (vi)"
                                                        value="{{ old('tittle') ?? $advise->tittle }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="motavi">Mô tả (vi):</label>
                                                    <textarea class="form-control for-seo " name="describe" id="motavi" rows="5" placeholder="Mô tả (vi)">{{ old('describe') ?? $advise->describe }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noidungvi">Nội dung (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="content" id="noidungvi" rows="5"
                                                        placeholder="Nội dung (vi)">{{ old('content') ?? $advise->content }}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('noidungvi');
                                                    </script>
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
                                <h3 class="card-title">Hình ảnh Tư vấn</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="photoUpload-zone" id="photoUploadZone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img
                                            class="rounded"id="uploaded-image"
                                            src="{{ asset('products/' . $advise->image) }}" alt="Alt Photo" /></div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="image"
                                            id="file-zone"onchange="previewImage(this)">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                        <p class="photoUpload-or">hoặc</p>
                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                    </label>
                                    <div class="photoUpload-dimension">Width: 400 px - Height: 250 px
                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Thông tin Tư vấn</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">



                        </div>
                        <div class="form-group">
                            <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="display"
                                    id="hienthi-checkbox"
                                    value="{{ old('display') ?? $advise->display }}"{{ $advise->display == 1 ? 'checked' : '' }}>
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stt" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                            <input type="number" class="form-control form-control-mini d-inline-block align-middle"
                                min="0" name="number" id="stt" placeholder="Số thứ tự"
                                value="{{ old('number') ?? $advise->number }}">
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
                                                    <strong class="count-seo"><span>42</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo title-seo"
                                                    name="seo_tittle" id="titlevi" placeholder="SEO Title (vi)"
                                                    value="{{ old('seo_tittle') ?? $advise->seo->seo_tittle }}">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>42</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="seo_keyword" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)"
                                                    value="{{ old('seo_keyword') ?? $advise->seo->seo_keyword }}">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>159</span>/160 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="seo_description" id="descriptionvi" rows="5"
                                                    placeholder="SEO Description (vi)">{{ old('seo_description') ?? $advise->seo->seo_description }}</textarea>
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
                    <a class="btn btn-sm bg-gradient-danger" href="/posts/advise" title="Thoát"><i
                            class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                    <input type="hidden" name="id" value="61">
                </div>
            </form>
        </section>
    </div>
    @if (Session::has('messageSucces'))
        <script>
            swal("Thành công", "{{ Session::get('messageSucces') }}", "success");
        </script>
    @endif
    {{-- Hình ảnh --}}

    <script>
        document.getElementById('file-zone').addEventListener('change', function(e) {
            var fileInput = e.target;
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('uploaded-image').src = e.target.result;
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
    {{-- kéo thả --}}
    <script>
        function previewImage(input) {
            var preview = document.getElementById('uploaded-image');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }

        var photoUploadZone = document.getElementById('photoUploadZone');

        photoUploadZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            photoUploadZone.classList.add('photoUpload-zone-dragover');
        });

        photoUploadZone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            photoUploadZone.classList.remove('photoUpload-zone-dragover');
        });

        photoUploadZone.addEventListener('drop', function(e) {
            e.preventDefault();
            photoUploadZone.classList.remove('photoUpload-zone-dragover');

            var fileInput = document.getElementById('file-zone');
            var files = e.dataTransfer.files;

            fileInput.files = files;

            previewImage(fileInput);
        });
    </script>
    {{-- tạo link --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện khi người dùng nhập liệu vào trường tiêu đề
            document.getElementById('tenvi').addEventListener('input', function() {
                // Lấy giá trị của trường tiêu đề
                var titleValue = this.value;

                // Chuyển đổi tất cả các từ trong tiêu đề thành chữ thường và bỏ dấu
                var slug = convertToSlug(titleValue);

                // Cập nhật giá trị của trường đường dẫn
                document.getElementById('slugvi').value = slug;

                // Cập nhật giá trị của thẻ strong có id là slugPreview
                document.getElementById('slugPreview').innerText = slug;

                // Cập nhật xem đường dẫn có hợp lệ hay không
                checkSlugValidity(slug);
            });

            // Hàm chuyển đổi từ có dấu thành không dấu và thành chữ thường
            function convertToSlug(text) {
                return text.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").replace(/\s+/g, '-')
                    .replace(/[^a-z0-9-]/g, '');
            }

            // Hàm kiểm tra tính hợp lệ của đường dẫn
            function checkSlugValidity(slug) {
                // Gửi yêu cầu kiểm tra đường dẫn đã tồn tại hay chưa (có thể sử dụng Ajax để kiểm tra phía server)
                // Ở đây tôi chỉ mô phỏng việc kiểm tra đường dẫn đã tồn tại bằng cách kiểm tra độ dài của đường dẫn
                var isSlugValid = slug.length > 0;

                // Hiển thị thông báo tương ứng
                if (isSlugValid) {
                    document.getElementById('alert-slug-successvi').classList.remove('d-none');
                    document.getElementById('alert-slug-dangervi').classList.add('d-none');
                } else {
                    document.getElementById('alert-slug-successvi').classList.add('d-none');
                    document.getElementById('alert-slug-dangervi').classList.remove('d-none');
                }
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Lấy phần tử URL xem trước
            var previewURL = document.getElementById("slugurlpreviewvi").getElementsByTagName("strong")[0];

            // Lấy trường đầu vào
            var inputField = document.getElementById("slugvi");

            // Hàm cập nhật URL xem trước
            function updatePreviewURL() {
                var inputVal = inputField.value; // Lấy giá trị đầu vào
                previewURL.textContent = inputVal; // Cập nhật URL xem trước
            }

            // Gắn hàm vào sự kiện input của trường đầu vào
            inputField.addEventListener("input", updatePreviewURL);

            // Kích hoạt cập nhật khi trang tải
            updatePreviewURL();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện khi người dùng nhập liệu vào trường tiêu đề
            document.getElementById('tenvi').addEventListener('input', function() {
                // Lấy giá trị của trường tiêu đề
                var titleValue = this.value;

                // Chuyển đổi tất cả các từ trong tiêu đề thành chữ thường và bỏ dấu
                var slug = convertToSlug(titleValue);

                // Tự động nối vào "https://nhadatminhphat.com.vn/" và cập nhật giá trị của trường đường dẫn
                document.getElementById('slugvi').value = " " + slug;

                // Cập nhật giá trị của thẻ strong có id là slugurlpreviewvi
                document.getElementById('slugurlpreviewvi').innerText = "https://nhadatminhphat.com.vn/" +
                    slug;

                // Cập nhật giá trị của thẻ strong có id là slugPreview
                document.getElementById('slugPreview').innerText = slug;

                // Cập nhật xem đường dẫn có hợp lệ hay không
                checkSlugValidity(slug);
            });

            // Hàm chuyển đổi từ có dấu thành không dấu và thành chữ thường
            function convertToSlug(text) {
                return text.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").replace(/\s+/g, '-')
                    .replace(/[^a-z0-9-]/g, '');
            }

            // Hàm kiểm tra tính hợp lệ của đường dẫn
            function checkSlugValidity(slug) {
                // Gửi yêu cầu kiểm tra đường dẫn đã tồn tại hay chưa (có thể sử dụng Ajax để kiểm tra phía server)
                // Ở đây tôi chỉ mô phỏng việc kiểm tra đường dẫn đã tồn tại bằng cách kiểm tra độ dài của đường dẫn
                var isSlugValid = slug.length > 0;

                // Hiển thị thông báo tương ứng
                if (isSlugValid) {
                    document.getElementById('alert-slug-successvi').classList.remove('d-none');
                    document.getElementById('alert-slug-dangervi').classList.add('d-none');
                } else {
                    document.getElementById('alert-slug-successvi').classList.add('d-none');
                    document.getElementById('alert-slug-dangervi').classList.remove('d-none');
                }
            }
        });
    </script>
</body>

</html>
