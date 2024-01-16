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
                                <a class="nav-link " href="/static-page/register_advise"
                                    title="Text đăng ký tư vấn"><i
                                        class="nav-icon text-sm far fa-caret-square-right"></i>
                                    <p>Text đăng ký tư vấn</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/static-page/customer-support"
                                    title="Hỗ trợ khách hàng"><i
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
                            <li class="nav-item"><a class="nav-link " href="/users/information"
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
                        <li class="breadcrumb-item active">Quản lý Sản phẩm cấp 1</li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card-footer text-sm sticky-top">
                <a class="btn btn-sm bg-gradient-primary text-white" href="/real_estate/category-level2/create"
                    title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=product&act=delete_cat&type=san-pham&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
                <div class="form-inline form-search d-inline-block align-middle ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                            placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                            onkeypress="doEnter(event,'keyword','index.php?com=product&act=man_cat&type=san-pham&p=1')">
                        <div class="input-group-append bg-primary rounded-right">
                            <button class="btn btn-navbar text-white" type="button"
                                onclick="onSearch('keyword','index.php?com=product&act=man_cat&type=san-pham&p=1')">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer form-group-category text-sm bg-light row">
                <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><select id="id_list"
                        name="level1_product_id" class="form-control filer-category select2">
                        <option value="0">Chọn danh mục</option>
                        @foreach ($category_level2 as $item)
                            <option value="{{ $item->id }}">{{ $item->level1_product->title }}</option>
                        @endforeach

                    </select></div>
            </div>
            <div class="card card-primary card-outline text-sm mb-0">
                <div class="card-header">
                    <h3 class="card-title">Danh sách Sản phẩm cấp 2</h3>
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
                                <th class="align-middle" style="width:30%">Tiêu đề</th>
                                <th class="align-middle text-center">Hiển thị</th>
                                <th class="align-middle text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category_level2 as $item)
                                <tr>
                                    <td class="align-middle">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input select-checkbox"
                                                id="select-checkbox-36" value="{{ $item->id }}">
                                            <label for="select-checkbox-36" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <input type="number" class="form-control form-control-mini m-auto update-stt"
                                            min="0" value="{{ $item->number }}" data-id=""
                                            data-table="product_cat">
                                    </td>
                                    <td class="align-middle">
                                        <a class="text-dark"
                                            href="/real_estate/category-level2/edit/{{ $item->id }}"
                                            title="NHÀ ĐẤT BÌNH TÂN">{{ $item->tittle }}</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox"
                                                id="show-checkbox-36" data-table="product_cat" data-id="36"
                                                data-loai="display" {{ $item->display == 1 ? 'checked' : '' }}>
                                            <label for="show-checkbox-36" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-md text-nowrap">
                                        <a class="text-primary mr-2"
                                            href="/real_estate/category-level2/edit/{{ $item->id }}"
                                            title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                        <a class="text-danger" id="delete-item"
                                            data-url="index.php?com=product&act=delete_cat&type=san-pham&p=1&id_list=6&id=36"
                                            title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-sm">
                <a class="btn btn-sm bg-gradient-primary text-white"
                    href="index.php?com=product&act=add_cat&type=san-pham&p=1" title="Thêm mới"><i
                        class="fas fa-plus mr-2"></i>Thêm mới</a>
                <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
                    data-url="index.php?com=product&act=delete_cat&type=san-pham&p=1" title="Xóa tất cả"><i
                        class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
            </div>
        </section>
    </div>
</body>

</html>
