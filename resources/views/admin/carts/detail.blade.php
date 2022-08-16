@extends('admin.main')

@section('content')
    <div class="customer">
        <ul>
            <li>Tên Khách Hàng: <strong>{{ $customer->name }}</strong></li>
            <li>Số Điện Thoại: <strong>{{ $customer->phone }}</strong></li>
            <li>Địa Chỉ: <strong>{{ $customer->address }}</strong></li>
            <li>Email: <strong>{{ $customer->email }}</strong></li>
            <li>Ghi Chú: <strong>{{ $customer->note }}</strong></li>
        </ul>
    </div>
    <div class="carts">
        @php $total=0; @endphp
        <table class="table">
            <thead class="thead-primary">
                <tr class="text-center">
                    <th>Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Số Lượng</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $key => $cart)
                @php
                    $price=$cart->price*$cart->quantity;
                    $total+=$price;
                @endphp
                <tr class="table-row text-center">
                    <td class="column-1">
                        <div class="img"><img class="img-fluid" src="{{ $cart->product->thumb }}" style="width:100px" alt=""></div>
                    </td>
                    <td class="column-2"> {{ $cart->product->name }} </td> 
                    <td class="column-3">{{ number_format($cart->price,0,'','.'); }}</td> 
                    <td class="column-4"> {{ $cart->quantity }} </td>
                    <td class="column-5">{{ number_format($price,0,'','.'); }}</td>
                </tr><!-- END TR-->
                @endforeach
                <tr class="table-row text-center">
                    <td colspan='4'><strong>Tổng tiền</strong></td>
                    <td >{{ number_format($total,0,'','.'); }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection