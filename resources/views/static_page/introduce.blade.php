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
                        <li class="breadcrumb-item active">Quản lý trang tĩnh</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <form class="validation-form" novalidate method="post"
                action="index.php?com=static&act=save&type=gioi-thieu" enctype="multipart/form-data">
                <div class="card-footer text-sm sticky-top">
                    <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                            class="far fa-save mr-2"></i>Lưu</button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">Nội dung Giới thiệu</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="hienthi" class="d-inline-block align-middle mb-0 mr-2">Hiển
                                        thị:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input hienthi-checkbox"
                                            name="data[hienthi]" id="hienthi-checkbox" checked>
                                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
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
                                                        value="NHÀ ĐẤT MINH PHÁT" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="motavi">Mô tả (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="data[motavi]" id="motavi" rows="5"
                                                        placeholder="Mô tả (vi)"><p style="text-align: justify;"><span style="font-size:18px;"><span style="line-height:1.5;">Lời đầu tiên, Nhà Đất Minh Phát xin gởi lời cảm ơn chân thành đến tất cả khách hàng đã quan tâm, hợp tác với chúng tôi suốt hơn những năm qua. Là đơn vị hoạt động trong lĩnh vực kinh doanh, tư vấn, quản lý và tiếp thị bất động sản. Nhà Đất Minh Phát nơi tập trung những sản phẩm Nhà Phố Cao Cấp - Vị Trí Đất Nền Đẹp của các Dự án đã được chọn lọc sẽ đáp ứng mọi nhu cầu về bất động sản của Quý Khách Hàng</span></span></p>
        </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noidungvi">Nội dung (vi):</label>
                                                    <textarea class="form-control for-seo form-control-ckeditor" name="data[noidungvi]" id="noidungvi" rows="5"
                                                        placeholder="Nội dung (vi)"><p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;">Lời đầu tiên, <span style="color:#e74c3c;"><strong>Nhà Đất Minh Phát</strong></span> xin gởi lời cảm ơn chân thành đến tất cả khách hàng đã quan tâm, hợp tác với chúng tôi suốt hơn những năm qua. Là đơn vị hoạt động trong lĩnh vực kinh doanh, tư vấn, quản lý và tiếp thị bất động sản.</span></span></p>

        <p> </p>

        <p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;"><span style="color:#e74c3c;"><strong>Nhà Đất Minh Phát </strong></span>nơi tập trung những sản phẩm Nhà Phố Cao Cấp - Vị Trí Đất Nền Đẹp của các Dự án đã được chọn lọc sẽ đáp ứng mọi nhu cầu về bất động sản của Quý Khách Hàng . Với đội ngũ chuyên viên tư vấn bất động sản có trình độ chuyên môn cao, giàu kinh nghiệm và luôn lấy chữ tín làm trọng.</span></span></p>

        <p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;">Qúy khách hàng đến với chúng tôi luôn luôn hài lòng với phong cách làm việc chuyên nghiệp, tận tâm và có trách nhiệm .Chúng tôi hiểu rằng sự thành công của khách hàng chính là yếu tố quan trọng nhất mang lại thành công cho chúng tôi. </span></span></p>

        <p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;"> Với mong muốn mang lại cho khách hàng một kênh đầu tư tiện lợi và an toàn, lợi nhuận cao, làm cho khách hàng cảm thấy an tâm, thoải mái nhất, <span style="color:#e74c3c;"><strong>Nhà Đất Minh Phát</strong></span> xin giới thiệu với khách hàng thông tin dự án mới cam kết sẽ đem lại nhiều lợi nhuận cho khách hàng mua để ở hoặc đầu tư.</span></span></p>

        <p style="text-align: center;"><span style="line-height:1.5;"><span style="font-size:16px;"> <img alt="" src="https://demo-saigonwebsite.com/bds/upload/elfinder/bd2a05d462e38448273659a142aed439.jpg" style="width: 633px;" /></span></span></p>

        <p style="text-align: center;"><span style="line-height:1.5;"><span style="font-size:16px;">Nhà Đất Minh Phát</span></span></p>

        <p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;">Hiện tại thị trường Việt Nam nói chung và thị trường bất động sản nói riêng vẫn còn gặp không ít khó khăn, tuy nhiên đây vẫn là một thị trường tiềm năng. Chúng tôi tin chắc sẽ có rất nhiều cơ hội đến với thị trường khi các nhà đầu tư sắn sàng xúc tiến kế hoạch của họ tại Việt Nam. </span></span></p>

        <p style="text-align: justify;"><span style="line-height:1.5;"><span style="font-size:16px;">Những nguyên tắc cơ bản của bất động sản thường không thay đổi quá nhiều theo thời gian, tuy nhiên những nguyên tắc cơ bản này cũng có những biến đổi nhất định nhằm phù hợp với sự chuyển động của thị trường.  tin chắc sẽ có rất nhiều cơ hội đến với thị trường khi các nhà đầu tư sắn sàng xúc tiến kế hoạch của họ tại Việt Nam. </span></span></p>
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
                                <h3 class="card-title">Hình ảnh Giới thiệu</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="photoUpload-zone">
                                    <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"
                                            src="../upload/news/gt-1683.jpg" onerror="src='assets/images/noimage.png'"
                                            alt="Alt Photo" /></div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="file" id="file-zone">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                        <p class="photoUpload-or">hoặc</p>
                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                    </label>
                                    <div class="photoUpload-dimension">Width: 600 px - Height: 400 px
                                        (.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF)</div>
                                </div>
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
                                                    <strong class="count-seo"><span>17</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo title-seo"
                                                    name="dataSeo[titlevi]" id="titlevi"
                                                    placeholder="SEO Title (vi)" value="NHÀ ĐẤT MINH PHÁT">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="keywordsvi">SEO Keywords (vi):</label>
                                                    <strong class="count-seo"><span>17</span>/70 ký tự</strong>
                                                </div>
                                                <input type="text" class="form-control check-seo keywords-seo"
                                                    name="dataSeo[keywordsvi]" id="keywordsvi"
                                                    placeholder="SEO Keywords (vi)" value="NHÀ ĐẤT MINH PHÁT">
                                            </div>
                                            <div class="form-group">
                                                <div class="label-seo">
                                                    <label for="descriptionvi">SEO Description (vi):</label>
                                                    <strong class="count-seo"><span>160</span>/160 ký tự</strong>
                                                </div>
                                                <textarea class="form-control check-seo description-seo" name="dataSeo[descriptionvi]" id="descriptionvi"
                                                    rows="5" placeholder="SEO Description (vi)">Lời đầu tiên, Nhà Đất Minh Phát xin gởi lời cảm ơn chân thành đến tất cả khách hàng đã quan tâm, hợp tác với chúng tôi suốt hơn những năm qua. Là đơn vị hoạt độ</textarea>
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
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i
                            class="fas fa-redo mr-2"></i>Làm lại</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>