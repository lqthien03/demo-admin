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
                        <li class="breadcrumb-item active">Chỉnh sửa Tư vấn</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post"
                action="index.php?com=news&act=save&type=tutu-van&p=1" enctype="multipart/form-data">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                            class="far fa-save mr-2"></i>Lưu tại trang</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                    <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&act=man&type=tutu-van&p=1"
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

                                <input type="hidden" class="slug-id" value="61">
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
                                                                class="text-info">vay-tien-ngan-hang-mua-nha-de-ma-khong-de</strong></span></label>
                                                    <input type="text" class="form-control slug-input no-validate"
                                                        name="slugvi" id="slugvi" placeholder="Đường dẫn (vi)"
                                                        value="vay-tien-ngan-hang-mua-nha-de-ma-khong-de">
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
                                                    <input type="text" class="form-control for-seo"
                                                        name="data[tenvi]" id="tenvi" placeholder="Tiêu đề (vi)"
                                                        value="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="motavi">Mô tả (vi):</label>
                                                    <textarea class="form-control for-seo " name="data[motavi]" id="motavi" rows="5" placeholder="Mô tả (vi)">Việc vay mua nhà/căn hộ chung cư là một điều bình thường tại các nước có thị trường bất động sản phát triển.
        Theo đó, chỉ cần chứng minh có thu nhập ổn định từ tiền lương/công việc là người mua nhà có thể tiếp cận các khoản vay với những thủ tục rõ ràng, minh bạch và thời hạn vay kéo dài từ 10 - 40 năm.</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noidungvi">Nội dung (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="data[noidungvi]" id="noidungvi" rows="5"
                                                        placeholder="Nội dung (vi)"><p><span style="font-size:16px;"><strong>VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ</strong><br />
        Áp lực cho vay</span></p>

        <p><span style="font-size:16px;">Việc vay mua nhà/căn hộ chung cư là một điều bình thường tại các nước có thị trường bất động sản phát triển.</span></p>

        <p><span style="font-size:16px;">Theo đó, chỉ cần chứng minh có thu nhập ổn định từ tiền lương/công việc là người mua nhà có thể tiếp cận các khoản vay với những thủ tục rõ ràng, minh bạch và thời hạn vay kéo dài từ 10 - 40 năm.</span></p>

        <p><span style="font-size:16px;">Ở Việt Nam, việc vay tiền ngân hàng để mua bất động sản cũng có từ hơn 10 năm nay, nhưng chính cách làm quá chắc của các ngân hàng khiến cho việc tiếp cận gói vay này là rất khó khăn.</span></p>

        <p><span style="font-size:16px;">Theo đó, công thức chung muốn vay là phải có tài sản thế chấp (sổ đỏ/giấy hồng nhà/đất; tài sản có giá trị khác) và cũng chỉ được định giá tối đa bằng 70% giá trị thực để tính toán cho khoản vay với lãi suất không hề thấp.</span></p>

        <p><span style="font-size:16px;">Khi thị trường bất động sản trầm lắng, cộng với việc các kênh đầu tư và huy động nguồn tiền nhàn rỗi trong dân kém hiệu quả (chứng khoán, vàng, ngoại tệ…), thì việc người dân ùn ùn gửi tiền ngân hàng hưởng lãi suất đã khiến cho nguồn vốn huy động của các ngân hàng trở nên dư thừa.</span></p>

        <p><span style="font-size:16px;">Trong 1 - 2 năm trở lại đây, áp lực giải ngân ngày càng lớn cộng với sức ép từ lợi nhuận nghìn tỷ của các cổ đông lớn khiến cho các ngân hàng phải tìm mọi cách để giải ngân số tiền huy động từ trong dân cư (vốn có lãi suất thấp 5,5 - 6,5%/năm; thậm chí thấp 3,5 - 4,5%/năm cho các khoản vay ngắn hạn 1 - 6 tháng) thông qua các gói tín dụng thương mại cho vay mua nhà với lãi suất cạnh tranh nhau sít sao.</span></p>

        <p><span style="font-size:16px;">Với gói lãi suất ưu đãi 30.000 tỷ đồng, thủ tục quá khó khăn cũng khiến nhiều người muốn vay bó tay và tốc độ giải ngân rất thấp.</span></p>

        <p><span style="font-size:16px;">Mới đây, những người đã trót huy động tiền để đặt cọc vay mua nhà ở xã hội theo gói 30.000 tỷ đồng lại “khóc dở mếu dở” vì các quy định mâu thuẫn nhau.</span></p>

        <p><span style="font-size:16px;">Theo quy định của Bộ Xây dựng, chỉ người thu nhập thấp mới được vay gói 30.000 tỷ và thu nhập thấp được cho là những người thuộc diện không phải nộp thuế thu nhập cá nhân (tức là thu nhập dưới 9 triệu đồng/tháng).</span></p>

        <p><span style="font-size:16px;">Trong khi đó, ngân hàng lại chỉ muốn cho những khách hàng có thu nhập tốt vay để đảm bảo an toàn nguồn vốn, tránh nợ xấu phát sinh và nhiều ngân hàng yêu cầu khách vay gói vốn này phải chứng minh thu nhập từ 9 triệu đồng/tháng trở lên.</span></p>

        <p><span style="font-size:16px;">Vì “vướng” vào 2 điều khoản “đối nghịch” nhau này mà một số người đã “lỡ” đóng trước khoản tiền khoảng 20% giá trị căn hộ cho chủ đầu tư, giờ “dở khóc dở mếu” vì không “xin” lại được tiền.</span></p>

        <p><span style="font-size:16px;">Câu chuyện khoảng 900 khách hàng mua dự án nhà ở xã hội HQC Plaza của Công ty Địa ốc Hoàng Quân đã ký hợp đồng mua nhà, đóng tiền 20% nhưng không vay được gói 30.000 tỷ đồng, buộc phải vay từ chủ đầu tư theo hình thức trả chậm với lãi suất khá cao là điển hình cho sự tréo ngoe này. </span></p>

        <p><span style="font-size:16px;">Và nó cũng giải thích cho tốc độ giải ngân gói 30.000 tỷ đồng vẫn rất khiêm tốn. </span></p>

        <p><span style="font-size:16px;">Cẩn thận khi ký hợp đồng</span></p>

        <p><span style="font-size:16px;">Trước tình hình bế tắc của gói vốn 30.000 tỷ cộng với áp lực tăng trưởng tín dụng, rất nhiều NHTM từng bước mở cửa cho vay mua, sửa chữa nhà.</span></p>

        <p><span style="font-size:16px;">Trong khi đó, việc nhiều dự án nhà ở đã và đang từng bước hình thành cộng với sự ấm lên của thị trường, giá trị thực và tiến độ của các dự án hoàn thành, các kênh đầu tư khác kém hiệu quả (chứng khoán, vàng, ngoại tệ, đầu tư kinh doanh…), khiến cho người mua “xuống tiền” là cơ hội để ngân hàng đẩy vốn tín dụng cho mảng này.</span></p>

        <p><span style="font-size:16px;">Để đẩy mạnh hoạt động này, nhiều NHTM có riêng đội ngũ nhân viên tín dụng liên kết với các chủ đầu tư các dự án bất động sản từ lớn đến bé, thậm chí có bộ phận thường trực tại các dự án này để giới thiệu đến khách hàng các gói vay ưu đãi, với thời hạn vay từ ngắn hạn đến trung và dài hạn (10 - 20 năm).</span></p>

        <p><span style="font-size:16px;">Để làm được điều này, ngoài việc lấy thông tin hoặc mua thông tin về khách hàng từ chính chủ đầu tư các dự án bất động sản để tìm hiểu nhu cầu vay; các ngân hàng cũng đẩy mạnh việc tiếp thị, quảng cáo qua các kênh truyền thông (website, báo, phiếu khảo sát, làm tờ rơi; gọi điện thoại, nhắn tin…) để tiếp cận bằng được khách hàng mua nhà nhằm đẩy mạnh việc giải ngân khoản vay cho khách hàng.</span></p>

        <p><span style="font-size:16px;">Các gói ưu đãi được quảng bá rất hấp dẫn. Tuy nhiên, lời khuyên đối những người có nhu cầu mua nhà mà chưa đủ điều kiện tài chính là việc tiếp cận các khoản vay này phải thực tỉnh táo, đủ thông tin cũng như có nguồn tiền trả ổn định thì mới nên đặt bút ký vào hợp đồng vay (Bảng 1).</span></p>

        <p><span style="font-size:16px;">Một thực tế mà nhiều người mua bất động sản (nhà đất, căn hộ chung cư) không để ý hoặc không hỏi kỹ nhân viên tư vấn, đó là những hệ quả nếu như không có nguồn tài chính ổn định để thanh toán theo lịch trả nợ đối với ngân hàng (thường điều này nằm trong chính hợp đồng vay do ngân hàng soạn).</span></p>

        <p><span style="font-size:16px;">Trên thực tế, để đẩy nhanh việc giải ngân khoản vay cho khách, nhiều nhân viên tín dụng đã “lờ” đi thông tin về hệ quả pháp lý nếu khách hàng không trả khoản vay đúng hạn.</span></p>

        <p><span style="font-size:16px;">Khi tư vấn, họ chỉ giải thích các ưu điểm về mức lãi suất theo năm (chẳng hạn, tháng đầu, năm đầu, lãi suất thấp hơn ngân hàng khác); mức lãi suất chênh lệch giữa đi vay - cho vay (chênh 3 - 4%/năm) khi so sánh để cho khách hàng thấy vay ở ngân hàng của mình là ưu điểm hơn, thủ tục nhanh gọn hơn; lãi suất thấp hơn (trên thực tế, nếu khách hàng tìm hiểu thì thấy các ngân hàng xây dựng biểu lãi suất này gần như nhau để cạnh tranh).</span></p>

        <p><span style="font-size:16px;">Tuy nhiên, có một hệ quả pháp lý là nếu khách hàng chỉ cần chậm thanh toán theo tiến độ đã cam kết, thì dù có gửi thông báo, mà ngân hàng hàng không đồng ý, khoản vay của khách hàng sẽ được xếp vào khoản nợ xấu và ngay lập tức, ngân hàng sẽ phối hợp với các công ty xử lý nợ xấu của mình tiến hành xử lý ngay tài sản của khách hàng.</span></p>

        <p><span style="font-size:16px;">Thế nên mới có chuyện, vay tiền ngân hàng mua nhà hay đầu tư kinh doanh nhưng cuối cùng lại mất nhà; mất cả khoản tiền tích cóp của mình.</span></p>

        <p><span style="font-size:16px;">Sự kiện “xiết nợ” của VPBank như vừa xảy ra ở căn hộ 1401 tòa nhà 17T2 phố Hoàng Đạo Thúy (Cầu Giấy, Hà Nội) hồi trung tuần tháng 3/2015 vừa qua là một trong nhiều vụ việc điển hình của việc xử lý khoản vay của khách hàng.</span></p>

        <p><span style="font-size:16px;">Theo đó, khi vay nợ ngân hàng, khách hàng thế chấp tài sản nhằm đảm bảo nghĩa vụ trả nợ và ngân hàng có quyền xử lý tài sản bảo đảm này để thu hồi tiền cho vay khi khách hàng không trả được nợ.</span></p>

        <p><span style="font-size:16px;">Tuy nhiên, cụ thể việc xử lý như thế nào thì phải tuân thủ quy định của pháp luật, chứ không thể đương nhiên đến nhà người ta, lắp khóa, dán niêm phong, đuổi chủ nhà ra ngoài.</span></p>

        <p><span style="font-size:16px;">Nếu khách hàng không trả được nợ, ngân hàng có thể thương lượng, thỏa thuận với chủ hộ để giải quyết, bán tài sản đó để thu hồi nợ.</span></p>

        <p><span style="font-size:16px;">Nếu không đạt được thỏa thuận, ngân hàng có quyền khởi kiện đề nghị tòa án buộc khách hàng phải trả nợ, nếu khách hàng không trả nợ, thì ngân hàng có quyền phát mại tài sản thế chấp.</span></p>

        <p><span style="font-size:16px;">Từ vụ việc này, mỗi người đi vay cần rút ra được bài học đó là phải tham khảo, đọc kỹ hợp đồng vay; tính toán kỹ các khả năng trả nợ thì mới nên đặt bút ký.</span></p>

        <p><span style="font-size:16px;">Bởi lẽ, thông thường với các NHTM, thì nếu như sau 30 - 45 ngày mà khách hàng không thực hiện nghĩa vụ thanh toán theo lịch vay (hoặc đơn đề nghị gia hạn không được chấp nhận) thì tài sản thế chấp của khách hàng sẽ được xử lý ngay lập tức, hoặc ngân hàng sẽ phối hợp với chủ đầu tư xử lý ngay tài sản của khách hàng.</span></p>

        <p><span style="font-size:16px;">Đương nhiên, các ngân hàng cũng cần tăng cường tập huấn nghiệp vụ, đạo đức nghề nghiệp cho nhân viên để họ cung cấp thông tin đầy đủ cho khách hàng, chứ không phải đặt áp lực giải ngân khoản vay lên lương thưởng để nhân viên vi phạm quy trình nghiệp vụ khi tư vấn cho khách hàng dẫn đến khoản nợ xấu và phải xử lý khoản nợ xấu đó.</span></p>

        <p><span style="font-size:16px;">Đã có nhiều trường hợp, khách hàng vay tiền ngân hàng thế chấp tài sản, để bảo đảm thanh toán đúng hạn hoặc nộp tiền vào để rút giấy tờ ra (Giấy chứng nhận/hợp đồng mua bán của tài sản thế chấp) đã đi vay “tín dụng đen” bên ngoài với lãi suất cao (0,3 - 0,5%/khoản vay/ngày).</span></p>

        <p><span style="font-size:16px;">Hệ quả là “lãi mẹ đẻ lãi con” với tín dụng đen cũng như trả lãi phạt của ngân hàng do thanh toán trước hạn.</span></p>

        <p><span style="font-size:16px;">Vĩ thanh</span></p>

        <p><span style="font-size:16px;">Cổ đông của một NHTM cổ phần thuộc Top 10 (có lãi khoảng 2.000 tỷ đồng năm 2014 nhưng không chia cổ tức) kể với người viết bài một câu chuyện trớ trêu.</span></p>

        <p><span style="font-size:16px;">Số là để thực hiện khoản thanh toán tiền mua căn hộ thuộc một dự án ở Hà Nội, khách hàng này đã huy động vốn từ gia đình, bạn bè và chuyển tiền về tài khoản của mình tại chính NHTM cổ phần nơi ông là một cổ đông.</span></p>

        <p><span style="font-size:16px;">Từ Hà Nội, khách hàng này thực hiện thanh toán liên ngân hàng cho khoản tiền mua căn hộ là khoảng 2,5 tỷ đồng.</span></p>

        <p><span style="font-size:16px;">Tuy nhiên, khoản phí phải thanh toán cho ngân hàng theo biểu phí là gần 2 triệu đồng, trong đó có 0,3% cho phí nộp tiền vào tài khoản khác tỉnh; 0,3% phí chuyển tiền liên ngân hàng; 0,12% phí vừa nộp tiền vào tài khoản nhưng chuyển đi thanh toán ngay trong ngày (miễn phí nếu để lại tài khoản 2 ngày?!).</span></p>

        <p><span style="font-size:16px;">Trong khi khoảng cách từ nơi chuyển đến nơi nhận tiền chỉ là 5 km và nếu như khách hàng này nộp trực tiếp vào tài khoản của NHTM cổ phần kia thì được miễn phí 100%.</span></p>

        <p><span style="font-size:16px;">Chẳng trách, dân mình đi mua nhà, mua xe… cứ vác hàng bao tải tiền đi trả vì với họ, phí dịch vụ phải trả cho ngân hàng kia để thuê taxi đi cho rẻ?</span></p>

        <p> </p>
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
                                <h3 class="card-title">Hình ảnh Tư vấn</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="photoUpload-zone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                            src="../upload/news/timthumb-5209.jpg"
                                            onerror="src='assets/images/noimage.png'" alt="Alt Photo" /></div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="file" id="file-zone">
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
                                                    name="dataSeo[titlevi]" id="titlevi"
                                                    placeholder="SEO Title (vi)"
                                                    value="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>42</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="dataSeo[keywordsvi]" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)"
                                                    value="VAY TIỀN NGÂN HÀNG MUA NHÀ, DỄ MÀ KHÔNG DỄ">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>159</span>/160 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                    rows="5" placeholder="SEO Description (vi)">Việc vay mua nhà/căn hộ chung cư là một điều bình thường tại các nước có thị trường bất động sản phát triển. Theo đó, chỉ cần chứng minh có thu nhập ổn định từ</textarea>
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
                    <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&act=man&type=tutu-van&p=1"
                        title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
                    <input type="hidden" name="id" value="61">
                </div>
            </form>
        </section>
    </div>
</body>

</html>
