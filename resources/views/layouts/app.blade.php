<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <meta property="og:image" content="{{ asset('frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361') }}">
    <meta property="og:image:secure_url" content="{{ asset('frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361') }}">
    <meta property="og:url" content="index">
    <meta property="og:site_name" content="DKT Store">
    <link rel="canonical" href="index">
    <link rel="shortcut icon" href="{{ asset('frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361') }}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet">
    <link href="{{ asset('/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361') }}" type='text/javascript'></script>
    <script src="{{ asset('frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361') }}" type='text/javascript'></script>
    <script src="{{ asset('frontend/assets/themes_support/api.jquerya87f.js?4') }}" type='text/javascript'></script>
    <link href="{{ asset('frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361') }}" rel='stylesheet' type='text/css' />
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
                <div class="col-xs-12 col-sm-6 col-md-6 customer">
                    <a href="login"><i class="fa fa-user"></i> Đăng nhập</a>
                    <a href="register"><i class="fa fa-user-plus"></i> Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end top header -->
    <!-- middle header -->
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index"> <img src="{{ asset('frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361') }}" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <form method="get" action="search">
                        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="query" class="input-control">
                        <button  type="submit"> <i class="fa fa-search"></i> </button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                    <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count">0</span> sản phẩm <i class="fa fa-caret-down"></i></a>
                        <div class="content-mini-cart">
                            <div class="has-items">
                                <ul class="list-unstyled">
                                </ul>
                                <div class="total clearfix"> <span class="pull-left">Tổng tiền:</span> <span class="pull-right total-price">0₫</span> </div>
                                <a href="checkout" class="button">Thanh toán</a> </div>
                            <div class="no-item">
                                <p style="text-align:left">Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                            </div>
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
                    <li class="active"><a href="index">Trang chủ</a></li>
                    <li ><a href="introducts">Giới thiệu</a></li>
                    <li ><a href="products">Sản phẩm</a></li>
                    <li ><a href="news">Tin tức</a></li>
                    <li ><a href="contacts">Liên hệ</a></li>
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
<!-- end header -->
<div class="content">
    <div class="container">
        <h1 style="display:none;">DKT Store</h1>
        <!-- category product -->
        <div class="slideshow">
            <div class="row">
                <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
                    <aside class="aside-category">
                        <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
                        <ul class="list-unstyled">
                            <li ><a href="san-pham-noi-bat">Sản phẩm nổi bật</a></li>
                            <li ><a href="san-pham-khuyen-mai">Sản phẩm khuyến mãi</a></li>
                            <li ><a href="dien-thoai-di-dong">Điện thoại di động</a></li>
                            <li ><a href="laptop">Laptop</a></li>
                            <li ><a href="tivi">Tivi</a></li>
                            <li ><a href="tai-nghe">Tai nghe</a></li>
                            <li ><a href="am-thanh">Âm thanh</a></li>
                            <li ><a href="may-van-phong">Máy văn phòng</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <!-- end category product -->
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <!-- end support -->
                <div class="online_support block">
                    <div class="new_title">
                        <h2>Hỗ trợ trực tuyến</h2>
                    </div>
                    <div class="block-content">
                        <div class="sp_1">
                            <p>Tư vấn bán hàng 1</p>
                            <p>Mrs. Dung: <span>(04) 3786 8904</span></p>
                        </div>
                        <div class="sp_2">
                            <p>Tư vấn bán hàng 2</p>
                            <p>Mr. Tuấn: <span>(04) 3786 8904</span></p>
                        </div>
                        <div class="sp_mail">
                            <p>Email liên hệ</p>
                            <p><a href="mailto:support@mail.com">support@mail.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- end support online -->
                <!-- hot news -->
                <div class="home-blog">
                    <h2 class="title"> <span>Tin tức</span></h2>
                    <div class="row">
                        <div class="owl-home-blog owl-home-blog-sidebar">
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/ip6s3f8a.png?v=1469340252480') }}" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau">Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?</a></h3>
                                        <p class="time">11/01/2016</p>
                                        <p class="desc"> Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang giảm và dần dần trở nên vừa vặn với túi tiền của...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/tvlg22a8.jpg?v=1469340975457') }}" alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016</a></h3>
                                        <p class="time">08/01/2016</p>
                                        <p class="desc"> LG vừa giới thiệu loạt TV OLED 4K mới tại Triển lãm CES 2016, trong đó tiêu biểu là 2 mẫu TV LG OLED 77/65-inch G6 và 65/55-inch E6 có tích hợp tính năng HDR.

                                            Theo đó, 8 mẫu TV OLED 2016 đều được tích hợp những công...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/1lapd47b.jpg?v=1469343007973') }}" alt="MSI ra mắt loạt máy tính "khủng" tại CES 2016" title="MSI ra mắt loạt máy tính "khủng" tại CES 2016" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016">MSI ra mắt loạt máy tính "khủng" tại CES 2016</a></h3>
                                        <p class="time">08/01/2016</p>
                                        <p class="desc"> Tại triển lãm CES năm nay, MSI đã cho ra mắt loạt sản phẩm máy tính mới dành cho game thủ và giới thiết kế với nhiều nâng cấp mạnh về cấu hình, công nghệ.

                                            Theo TechReport, loạt máy tính mới của MSI trình làng tại CES gồm...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/llv7032.jpg?v=1469340069420') }}" alt="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" title="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong">Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng</a></h3>
                                        <p class="time">08/01/2016</p>
                                        <p class="desc"> Về thiết kế, Lenovo Y70 Touch trang bị bàn phím backlit, màn hình cảm ứng 17 inch cùng công nghệ nhận dạng khuôn mặt VeriFace Pro. Cổng HDMI-out để truyền dẫn nội dung chất lượng cao tới màn hình lớn hơn, đồng thời tích hợp chuẩn Wi-Fi mới nhất....</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/tainghe6d96.jpg?v=1469340188910') }}" alt="Trải nghiệm dòng tai nghe H.ear mới của Sony" title="Trải nghiệm dòng tai nghe H.ear mới của Sony" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony">Trải nghiệm dòng tai nghe H.ear mới của Sony</a></h3>
                                        <p class="time">08/01/2016</p>
                                        <p class="desc"> Dòng sản phẩm mới này của Sony mang 1 slogan mới của hãng là "Hear Your Color", tức là Sony muốn đem những gam màu rực rỡ lên các sản phẩm được gắn mác "Hi-res", vốn là các sản phẩm hỗ trợ âm thanh có độ phân giải cao....</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                            <!-- list hot news -->
                            <div class="item">
                                <div class="article"> <a href="bai-viet-mau" class="image"> <img src="{{ asset('frontend/thumb/large/100/047/633/articles/reviewsbeec.jpg?v=1469340222383') }}" alt="iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple" title="iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple" class="img-responsive"> </a>
                                    <div class="info">
                                        <h3><a href="bai-viet-mau">iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của Apple</a></h3>
                                        <p class="time">29/05/2015</p>
                                        <p class="desc"> Không còn jack cắm tai nghe 3,5 mm trên iPhone là một phần trong nỗ lực "nhốt" người dùng trong thế giới của riêng mình đến từ Apple.
                                            Vài năm trở lại đây, các tin đồn về iPhone thường tỏ ra khá chính xác. Thực tế này không khỏi...</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end list hot news -->
                        </div>
                    </div>
                </div>
                <!-- end hot news -->
                <div class="statistics block">
                    <div id="bw-statistics"></div>
                </div>
                <div class="fanpage block hidden-sm hidden-xs"> face book fanpage</div>
            </div>
            <div class="col-xs-12 col-md-9">
                <!-- main -->
                <main class="py-4">
                    @yield('content')
                </main>
                <!-- end main -->
            </div>
        </div>
        <!-- adv -->
        <div class="widebanner">
            <a href="#">
                <img src="{{ asset('frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361') }}" alt="#" class="img-responsive">
            </a>
        </div>
        <!-- end adv -->
        <!-- home news -->
        <div class="home-blog">
            <h2 class="title"><span>Tin tức</span></h2>
            <div class="row">
                <div class="owl-home-blog owl-home-blog-bottompage">
                    <div class="item">
                        <div class="article"><a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau" class="image">
                                <img src="{{ asset('frontend/thumb/large/100/047/633/articles/ip6s3f8a.png?v=1469340252480') }}"
                                     alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?"
                                     title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive">
                            </a>
                            <div id="not_image" class="info">
                                <h3><a href="mua-iphone-6s-va-iphone-6s-plus-chinh-hang-o-dau">Mua iPhone 6s và iPhone
                                        6s Plus chính hãng ở đâu?</a></h3>
                                <p class="time">11/01/2016</p>
                                <p class="desc">
                                <p style="text-align: justify;">Không ai có thể phủ nhận sức hút từ vẻ đẹp của những
                                    chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá
                                    iPhone 6s và iPhone 6s Plus đang...</p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article"><a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016"
                                                class="image"> <img
                                        src="{{ asset('frontend/thumb/large/100/047/633/articles/tvlg22a8.jpg?v=1469340975457') }}"
                                        alt="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016"
                                        title="LG ra mắt loạt TV OLED 4K tích hợp HDR tại CES 2016"
                                        class="img-responsive"> </a>
                            <div id="not_image" class="info">
                                <h3><a href="lg-ra-mat-loat-tv-oled-4k-tich-hop-hdr-tai-ces-2016">LG ra mắt loạt TV OLED
                                        4K tích hợp HDR tại CES 2016</a></h3>
                                <p class="time">08/01/2016</p>
                                <p class="desc">
                                <p style="text-align: justify;">LG vừa giới thiệu loạt TV OLED 4K mới tại Triển lãm CES
                                    2016, trong đó tiêu biểu là 2 mẫu TV LG OLED 77/65-inch G6 và 65/55-inch E6 có tích
                                    hợp tính năng HDR.</p>
                                ...
                                </p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article"><a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016" class="image"> <img
                                        src="{{ asset('frontend/thumb/large/100/047/633/articles/1lapd47b.jpg?v=1469343007973 ') }}"
                                         class="img-responsive"> </a>
                            <div id="not_image" class="info">
                                <h3><a href="msi-ra-mat-loat-may-tinh-khung-tai-ces-2016">MSI ra mắt loạt máy tính
                                        "khủng" tại CES 2016</a></h3>
                                <p class="time">08/01/2016</p>
                                <p class="desc">
                                <p style="text-align: justify;">Tại triển lãm CES năm nay, MSI đã cho ra mắt loạt sản
                                    phẩm máy tính mới dành cho game thủ và giới thiết kế với nhiều nâng cấp mạnh về cấu
                                    hình, công nghệ.</p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article"><a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong" class="image"> <img
                                        src="{{ asset('frontend/thumb/large/100/047/633/articles/llv7032.jpg?v=1469340069420 ') }}"
                                        alt="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng"
                                        title="Lenovo ra mắt Y70 Touch giá gần 35 triệu đồng" class="img-responsive">
                            </a>
                            <div id="not_image" class="info">
                                <h3><a href="lenovo-ra-mat-y70-touch-gia-gan-35-trieu-dong">Lenovo ra mắt Y70 Touch giá
                                        gần 35 triệu đồng</a></h3>
                                <p class="time">08/01/2016</p>
                                <p class="desc">
                                <p style="text-align: justify;">Về thiết kế, Lenovo Y70 Touch trang bị bàn phím backlit,
                                    màn hình cảm ứng 17 inch cùng công nghệ nhận dạng khuôn mặt VeriFace Pro. Cổng
                                    HDMI-out để truyền dẫn nội du...</p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article"><a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony" class="image">
                                <img src="{{ asset('frontend/thumb/large/100/047/633/articles/tainghe6d96.jpg?v=1469340188910 ') }}"
                                     alt="Trải nghiệm dòng tai nghe H.ear mới của Sony"
                                     title="Trải nghiệm dòng tai nghe H.ear mới của Sony" class="img-responsive"> </a>
                            <div id="not_image" class="info">
                                <h3><a href="trai-nghiem-nhanh-2-tai-dong-h-ear-moi-cua-sony">Trải nghiệm dòng tai nghe
                                        H.ear mới của Sony</a></h3>
                                <p class="time">08/01/2016</p>
                                <p class="desc">
                                <p style="text-align: justify;">Dòng sản phẩm mới này của Sony mang 1 slogan mới của
                                    hãng là "Hear Your Color", tức là Sony muốn đem những gam màu rực rỡ lên các sản
                                    phẩm được gắn mác "Hi-res", vốn...</p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="article"><a href="bai-viet-mau" class="image"> <img
                                        src="{{ asset('frontend/thumb/large/100/047/633/articles/reviewsbeec.jpg?v=1469340222383 ') }}"
                                        class="img-responsive"> </a>
                            <div id="not_image" class="info">
                                <h3><a href="bai-viet-mau">iPhone 7 sẽ lại là một bước "cải lùi" về thiết kế của
                                        Apple</a></h3>
                                <p class="time">29/05/2015</p>
                                <p class="desc">
                                <p style="text-align: justify;">Không còn jack cắm tai nghe 3,5 mm trên iPhone là một
                                    phần trong nỗ lực "nhốt" người dùng trong thế giới của riêng mình đến từ Apple.<br/>
                                    Vài năm trở lại đây, các...</p>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home news -->
    </div>
</div>
<!-- footer -->
<div class="privacy">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="{{ asset('frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361') }}" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
                <div class="info">
                    <h3>Giao hàng miễn phí</h3>
                    <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="{{ asset('frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361') }}" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
                <div class="info">
                    <h3>Khuyến mại</h3>
                    <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="image"> <img src="{{ asset('frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361') }}" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
                <div class="info">
                    <h3>Hoàn trả lại tiền</h3>
                    <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <h3>Về chúng tôi</h3>
                    <ul class="list-unstyled">
                        <li><a href="index">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="news">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Hướng dẫn</h3>
                    <ul class="list-unstyled">
                        <li><a href="huo-ng-da-n-mua-ha-ng">Hướng dẫn mua hàng</a></li>
                        <li><a href="huong-dan">Giao nhận và thanh toán</a></li>
                        <li><a href="do-i-tra-va-ba-o-ha-nh">Đổi trả và bảo hành</a></li>
                        <li><a href="account/register">Đăng ký thành viên</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Chính sách</h3>
                    <ul class="list-unstyled">
                        <li><a href="chinh-sach">Chính sách thanh toán</a></li>
                        <li><a href="chi-nh-sa-ch-va-n-chuye-n">Chính sách vận chuyển</a></li>
                        <li><a href="chi-nh-sa-ch-do-i-tra">Chính sách đổi trả</a></li>
                        <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Chính sách bảo hành</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <h3>Điều khoản</h3>
                    <ul class="list-unstyled">
                        <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
                        <li><a href="die-u-khoa-n-giao-di-ch">Điều khoản giao dịch</a></li>
                        <li><a href="di-ch-vu-tie-n-i-ch">Dịch vụ tiện ích</a></li>
                        <li><a href="quye-n-so-hu-u-tri-tue">Quyền sở hữu trí tuệ</a></li>
                    </ul>
                </div>
            </div>
            <div class="payments-method"> <img src="{{ asset('frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361') }}" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5"> © Bản quyền thuộc về Avent Team</div>
                <div class="col-xs-12 col-sm-7">
                    <ul class="list-unstyled">
                        <li><a href="index">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="collections/all">Sản phẩm</a></li>
                        <li><a href="news">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src='{{ asset('frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361') }}' type='text/javascript'></script>
<script src='{{ asset('frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361') }}' type='text/javascript'></script>
<script src='{{ asset('frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361') }}' type='text/javascript'></script>
<script src='{{ asset('frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361') }}' type='text/javascript'></script>
<script src='{{ asset('frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361') }}' type='text/javascript'></script>
<div class="ajax-error-modal modal">
    <div class="modal-inner">
        <div class="ajax-error-title">Lỗi</div>
        <div class="ajax-error-message"></div>
    </div>
</div>
<div class="ajax-success-modal modal">
    <div class="overlay"></div>
    <div class="content col-xs-12">
        <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
        <div class="ajax-right">
            <p class="ajax-product-title"></p>
            <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ hàng.</p>
            <div class="actions">
                <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>
                <button class="button" onclick="window.location='checkout'">Thanh toán</button>
            </div>
        </div>
        <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
</div>
</body>
</html>