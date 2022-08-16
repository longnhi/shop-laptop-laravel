@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Khách Hàng</th>
            <th>SĐT</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Ngày Đặt Hàng</th>
            <th>Trạng thái</th>
            <th style="width: 100px"></th>
        </tr>
        </thead>
        <tbody>
            @foreach($customers as $key => $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>@if($customer->status==1) {{"Đã đặt"}}
                    @elseif($customer->status==2){{"Đang vận chuyển"}}
                    @elseif($customer->status==3){{"Đã Hủy"}}
                    @elseif($customer->status==4){{"Hoàn tất"}}
                    @endif</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/customers/view/{{ $customer->id }}">
                        <i class="fas fa-eye"></i>
                    </a>

                    <a class="btn btn-primary btn-sm" href="/admin/customers/vanchuyen/{{ $customer->id }}">
                        <i class="">vc</i>
                    </a>
                    <a hidden href="#" class="btn btn-danger btn-sm"
                       onclick="removeRow({{ $customer->id }}, '/admin/customers/destroy')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card-footer clearfix">
        {!! $customers->links() !!}
    </div>
@endsection