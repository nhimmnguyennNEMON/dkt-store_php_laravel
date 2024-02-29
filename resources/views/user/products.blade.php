@extends('layouts.app')

@section('content')
    <!-- main -->
    <div class="special-collection">
        <div class="tabs-container">
            <div class="clearfix">
                <h2>Tất cả sản phẩm</h2>
            </div>
        </div>
        <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
                <div class="clearfix">
                    <!-- box product -->
                    @foreach($products as $product)
                        <div class="col-xs-6 col-sm-4 col-md-3 ">
                            <div class="product-grid product-loop" id="product-1142079">
                                <div class="image">
                                    <a href="">
                                        <img src="{{ $product->imagePath()}}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="name"><a href="{{ route('productDetail', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                                    <p class="price-box"> <span class="special-price">
                                                    <span class="price product-price">{{ number_format($product->price, 0, ',', '.') . '₫'}}</span> </span> </p>
                                    <form action="{{ route('addToCart')}}" method="post" enctype="multipart/form-data" class="product-form">
                                        @csrf
                                        <input type="hidden" id="qty" name="quantity" value="1">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="action-btn">
                                            <button class="button">MUA NGAY</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $products->links() }}
                    <!-- end paging -->
                </div>
            </div>
        </div>
    </div>
    <!-- end main -->
@endsection
