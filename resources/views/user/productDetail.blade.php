@extends('layouts.app')

@section('content')
    <!-- main -->
    <div class="product-detail" itemscope itemtype="http://schema.org/Product">
        <meta itemprop="url" content="//dktstore-theme.bizwebvietnam.net/microsoft-lumia-950-xl-mau-den">
        <meta itemprop="image" content="../frontend/images/msc.jpg?v=1469340617533">
        <meta itemprop="shop-currency" content="VND">
        <div class="top">
            <div class="row">
                <div class="col-xs-12 col-md-6 product-image">
                    <div class="featured-image">
                        <img src="{{ $product->imagePath()}}" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="{{ $product->imagePath()}}"/>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 info">
                    <h1 itemprop="name">{{ $product->name }}</h1>
                    <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span class="price product-price">{{ number_format($product->price, 0, ',', '.') . '₫'}} </span> </span> </p>
                    <p class="desc rte">{{ $product->description }}</p>
                    <form action="{{ route('addToCart')}}" method="post" enctype="multipart/form-data" class="product-form">
                        @csrf
                        <div class="quantity">
                            <label>Số lượng</label>
                            <input type="hidden" id="qty" name="productId" value="{{ $product->id }}" lass="input-control" required="">
                            <input type="number" id="qty" name="quantity" value="1" min="1" class="input-control" required="Không thể để trống">
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="action-btn">
                            <button class="button">Cho vào giỏ hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="middle">
            <ul class="list-unstyled navtabs">
                <li><a href="#tab1" class="head-tabs head-tab1 active" data-src=".head-tab1">Chi tiết sản phẩm</a></li>
            </ul>
            <div class="tab-container">
                <!-- chi tiet -->
                <div id="tab1" class="content-tabs">
                    <div class="rte">
                        <p style="text-align: justify;">{{ $product->detailed_description }}</p>
                        <p style="text-align: justify;"><strong>ĐẶC ĐIỂM NỔI BẬT</strong></p>
                        <ul>
                            <li style="text-align: justify;">Hệ điều hành Windows Phone 10 mới nhất, nhanh và tối ưu</li>
                            <li style="text-align: justify;">Màn hình WQHD (2560 x 1440) kích thước 5.7 inches với cảm ứng siêu nhạy</li>
                            <li style="text-align: justify;">Camera "khủng" 20MP, quay phim 4K; Camera trước góc rộng 5MP quay phim Full HD</li>
                            <li style="text-align: justify;">Chip 8 nhân Snapdragon 810 mạnh mẽ, Ram 3GB</li>
                            <li style="text-align: justify;">Bộ nhớ trong 32GB, có khe cắm thẻ nhớ ngoài (hỗ trợ tối đa 200GB)</li>
                            <li style="text-align: justify;">Dung lượng pin 3340 mAh cho thời gian sử dụng dài ngày</li>
                        </ul>
                    </div>
                </div>
                <!-- chi tiet -->
            </div>
        </div>
    </div>
    <!-- end main -->
@endsection
