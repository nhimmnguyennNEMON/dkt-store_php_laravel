<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>DKT Store</title>
    <meta name="description" content="DKT Store">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DKT Store">
    <meta property="og:image" content="../frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
    <meta property="og:image:secure_url" content="../frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361">
    <meta property="og:url" content="index">
    <meta property="og:site_name" content="DKT Store">
    <link rel="canonical" href="index">
    <link rel="shortcut icon" href="../frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <link href='../frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='../frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='../frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='../frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='../frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='../frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<div id="fb-root"></div>
<!-- header -->
<header id="header">
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
                @if(Auth::check())
                    <div class="col-xs-12 col-sm-6 col-md-6 customer">
                        <span class="font-weight-bold">Xin chào, {{ Auth::user()->full_name }}</span>
                        <a href={{ route('logout') }}><i class="fa fa-user"></i> Đăng xuất</a>
                    </div>
                @else
                    <div class="col-xs-12 col-sm-6 col-md-6 customer">
                        <a href="{{ route('login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                        <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Đăng ký</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end top header -->
    <!-- middle header -->
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="{{ route('index') }}"> <img src="../frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <form method="get" action="search">
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="query" class="input-control">
                        <button  type="submit"> <i class="fa fa-search"></i> </button>
                    </form>
                </div>

                @php
                    $cart = Session::get('cart', []);
                @endphp

                @if(count($cart) > 0)

                @else

                @endif

                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                    <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="{{ route('cart') }}"> <span class="mini-cart-count">{{count($cart)}}</span> sản phẩm <i class="fa fa-caret-down"></i></a>
                        <div class="content-mini-cart">
                            @if(count($cart) > 0)
                                @for ($i = 0; $i < count($cart); $i++)
                                    <div class="has-items">
                                        <ul class="list-unstyled">
                                            <li class="clearfix" id="item-1853038">
                                                <div class="image"> <a href=""> <img src="https://cdn2.cellphones.com.vn/x/media/catalog/product/i/p/iphone-15-plus_1_.png" class="img-responsive"> </a> </div>
                                                <div class="info">
                                                    <h3><a href="">Sản phẩm 2</a></h3>
                                                    <p>1 x 24,950,000₫</p>
                                                </div>
                                                <div> <a href="index.php?controller=cart&act=delete&id=5"> <i class="fa fa-times"></i></a> </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endfor
                                    <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price">0₫</span> </div>
                                    <a href="checkout" class="button">Thanh toán</a>
                            @else
                                <div class="no-item">
                                    <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end middle header -->
    <!-- bottom header -->
    <div class="bottom-header">
        <div class="container">
            <div class="clearfix">
                <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                    <li class="active"><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li ><a href="#">Giới thiệu</a></li>
                    <li ><a href="{{ route('products') }}">Sản phẩm</a></li>
                    <li ><a href="{{ route('news') }}">Tin tức</a></li>
                    <li ><a href="#">Liên hệ</a></li>
                </ul>
                <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
                <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                    <li><a href="index">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="collections/all">Sản phẩm</a>
                        <ul style="display:none">
                            <li><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                            <li><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
                            <li><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
                            <li><a href="laptop">Laptop</a></li>
                            <li><a href="tivi">Tivi</a></li>
                            <li><a href="tai-nghe">Tai nghe</a></li>
                            <li><a href="am-thanh">Âm thanh</a></li>
                            <li><a href="may-van-phong">Máy văn phòng</a></li>
                        </ul>
                    </li>
                    <li><a href="news">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end bottom header -->
</header>