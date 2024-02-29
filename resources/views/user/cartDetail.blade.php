@extends('layouts.app')

@section('content')
    <!-- main -->
    <div class="template-cart">
        <form action="index?controller=cart&act=update" method="post">
            <div class="table-responsive">
                @if(count($cart) > 0)
                    <table class="table table-cart">
                        <thead>
                        <tr>
                            <th class="image">Ảnh sản phẩm</th>
                            <th class="name">Tên sản phẩm</th>
                            <th class="price">Giá bán lẻ</th>
                            <th class="quantity">Số lượng</th>
                            <th class="price">Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cart as $item)
                            <tr>
                                <td><img src="{{ $item['imageURL'] }}" class="img-responsive" /></td>
                                <td><a href="{{ route('productDetail', ['id' => $item['id']]) }}">{{ $item['name'] }}</a></td>
                                <td> {{ number_format($item['price'], 0, ',', '.') . '₫'}} </td>
                                <td><input type="number" id="qty" min="1" class="input-control" value="{{ $item['quantity'] }}" name="product_5" required="Không thể để trống"></td>
                                <td><p><b>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') . '₫'}}</b></p></td>
                                <td><a href="{{ route('removeFromCart', ['id' => $item['id']]) }}" data-id=""><i class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <a href="{{ route('removeAllCart') }}" class="button pull-left">Xóa toàn bộ</a>
                                <a href="{{ route('products')}}" class="button pull-right black">Tiếp tục mua hàng</a>
                                <input type="submit" class="button pull-right" value="Cập nhật">
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                @else
                    <p>No items in cart</p>
                @endif
            </div>
        </form>

        @php
            $cart = Session::get('cart', []);

            $total = 0;

            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }
        @endphp

        <div class="total-cart"> Tổng tiền thanh toán: {{ number_format($total, 0, ',', '.') . '₫'}} <br>
            @if(Auth::check())
                <a href="index?controller=checkout"  class="button black">Thanh toán</a>
            @else
                <a href="index?controller=checkout" class="button black" disabled>Thanh toán</a>
            @endif

        </div>
    </div>
    <!-- end main -->
@endsection
