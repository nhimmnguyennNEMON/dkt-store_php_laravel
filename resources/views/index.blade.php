@extends('layouts.app')

@section('content')
    <!-- main -->
    <div class="special-collection">
        <div class="tabs-container">
            <div class="clearfix">
                <h2>Sản phẩm Hot</h2>
            </div>
        </div>
        <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
                <div class="clearfix">
                    <!-- box product -->
                    @foreach($topProducts as $product)
                        <div class="col-xs-6 col-md-3 col-sm-6 ">
                            <div class="product-grid" id="product-1168979">
                                <div class="image">
                                    <a href="">
                                        <img src="{{ $product->imagePath()}}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="name"><a href="{{ route('productDetail', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price">{{ number_format($product->price, 0, ',', '.') . '₫'}}</span> </span> </p>
                                    <div class="action-btn">
                                        <a href="{{ route('productDetail', ['id' => $product->id]) }}" class="button">Chọn sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- end box product -->
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-tab-collections" style="margin-top:0px;">
        <div class="tabs-container">
            <ul class="list-unstyled">
                <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
                        <h2>Sản phẩm mới</h2>
                    </a></li>
            </ul>
        </div>
        <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex">
                <!-- box product -->

                @foreach($newProducts as $product)
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
                                <div class="action-btn">
                                    <a href="{{ route('productDetail', ['id' => $product->id]) }}" class="button">Chọn sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end box product -->
            </div>
        </div>
    </div>
    <!-- end main -->
@endsection()
