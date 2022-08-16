@extends('layout')

@section('çontent')

<div class="hero-wrap hero-bread"
    style="background-image: url('{{ asset('/template/users/images/bg-11.jpg')}}');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="/trang-chu">Trang chủ</a></span> <span></span></p>
                <h1 class="mb-0 bread"> {{ $title }}</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-6 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Danh sách nhóm 16:</span> <br>Lý Hoàng Thư - DH51805702
                  									   <br>Lê Thị Thúy Hoài - DH51802325
                                                       <br>Huỳnh Công Nhã - DH51805206
                                                       <br>Bùi Hoàng Phương - DH51805388
                                                       <br>Nguyễn Nhị Long - DH51805028</p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="info bg-white p-4">
                  <p><span>Tài khoản admin:</span> <a href="">localhost@gmail.com - Mk: 123456</a></p>
                    <p><span>Lớp:</span> <a href="">D18_TH11</a></p>
                    <p><span>SĐT:</span> <a href="">0965692223</a></p>
                    <p><span>Email:</span> <a href="">DH51805702@student.stu.edu.vn</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-12 order-md-last d-flex">
                <form action="#" class="bg-white p-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tên của bạn">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email của bạn">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Chủ đề">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Thông điệp"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Gửi thông điệp" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection