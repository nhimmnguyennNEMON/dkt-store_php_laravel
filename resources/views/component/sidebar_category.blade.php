<div class="slideshow">
    <div class="row">
        <div class="col-md-3 col-xs-12 hidden-xs hidden-sm">
            <aside class="aside-category">
                <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
                <ul class="list-unstyled">
                    <li ><a href="{{ route('listTopProducts') }}">Sản phẩm hot</a></li>
                    <li ><a href="{{ route('listNewProducts') }} ">Sản phẩm mới</a></li>
                    <li ><a href="{{ route('productByCategory', ['id' => 1]) }}">Điện thoại, Tablet</a></li>
                    <li ><a href="{{ route('productByCategory', ['id' => 2]) }}">Laptop</a></li>
                    <li ><a href="{{ route('productByCategory', ['id' => 3]) }}">Tivi, Màn hình</a></li>
                    <li ><a href="{{ route('productByCategory', ['id' => 4]) }}">Phụ Kiện</a></li>
                </ul>
            </aside>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-12">
            <div class="owl-slider">
                <div class="item">
                    <!-- ============================ -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active"> <img src="../frontend/images/la.jpg" alt="Los Angeles"> </div>
                            <div class="item"> <img src="../frontend/images/slideshow1221b.jpg" alt="Los Angeles"> </div>
                            <div class="item"> <img src="../frontend/images/chicago.jpg" alt="Chicago"> </div>
                            <div class="item"> <img src="../frontend/images/ny.jpg" alt="New York"> </div>
                        </div>

                        <!-- Left and right controls -->
                    </div>
                    <!-- ============================ -->
                </div>
            </div>
        </div>
    </div>
</div>