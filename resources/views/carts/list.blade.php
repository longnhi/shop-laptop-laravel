@extends('layout')

@section('çontent')

<div class="hero-wrap hero-bread"
    style="background-image: url('/template/users/images/bg-11.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ URL::to('/trang-chu')}}">Trang chủ</a>
                    </span> <span class="mr-2"><a href=""></a></span> <span></span></p>
                <h1 class="mb-0 bread"></h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    @include('admin.alert')
    <?php 
        if ( !empty(Session::get('carts')) ) {
            ?>
    <form action="{{ URL::to('/gio-hang') }}" method="post">
        {{ @csrf_field() }}
        <?php $total = 0; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)

                                <tr class="text-center">
                                    <td class="product-remove"><a
                                            href="/gio-hang/delete/{{ $product->id }}"><span
                                                class="ion-ios-close"></span></a></td>

                                    <td class="image-prod">
                                        <div class="img"><img class="img-fluid" src="{{ URL($product->thumb) }}"
                                                alt="{{ $product->name }}"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{ $product->name }}</h3>
                                    </td>

                                    <td class="price"><?php echo number_format($product->price_sale); ?> VNĐ</td>

                                    <td class="quantity">
                                        <div class="input-group mb-3 text">
                                            <input type="number" name="quantity[{{ $product->id }}]"
                                                class="quantity form-control input-number text-center"
                                                value="{{ $carts[$product->id] }}" min="1" max="100">
                                        </div>
                                    </td>

                                    <?php 
                            $price = $product->price_sale * $carts[$product->id];
                            $total += $price;
                        ?>
                                    <td class="total"><?php echo number_format($price); ?> VNĐ</td>
                                </tr><!-- END TR-->
                                @endforeach
                            </tbody>

                            <tbody>
                                <tr class="text-center">
                                    <td class="product-remove"> </td>

                                    <td class="image-prod"> </td>

                                    <td class="product-name"> </td>

                                    <td class="price"> </td>

                                    <td class="font-red"> TỔNG TIỀN: </td>
                                    <td class="total font-price"><?php echo number_format($total); ?> VNĐ</td>
                                </tr><!-- END TR-->
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group" style="padding-top: 30px; text-align: right;">
                        <input type="submit" formaction="{{ URL::to('/cap-nhat-gio-hang') }}" value="Cập nhật số lượng"
                            class="btn btn-primary py-3 px-5">
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-xl-12 ftco-animate">
                    <h3 class="mb-4 billing-heading">Chi tiết thanh toán</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input type="text" class="form-control" name="name" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="" required>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Địa chỉ giao hàng</label>
                                <input type="text" class="form-control" name="address" placeholder="" required>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Địa chỉ email</label>
                                <input type="text" class="form-control" name="email" placeholder="" required>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea name="note" cols="30" rows="7" class="form-control"
                                    placeholder="" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Tiến hành thanh toán" class="btn btn-primary py-3 px-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form><!-- END -->
    <?php } else { ?>
    <div class="col-md-12 text-center ftco-animate">
        <h2 class="mb-4">Chưa chọn sản phẩm</h2>
    </div>
    <?php } ?>
</section>

@endsection