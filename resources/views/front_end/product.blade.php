@extends('layouts.master_frontend')
@section('content')

<div class="container-fluid">
    <div class="row mt-4 text-center">
        <h3> <strong>Product</strong> </h3>
    </div>
    <!-- ==========แถวที่ 1=========== -->
    <div class="row mt-4">
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/01.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Apple iPhone 13 256GB.(MLQ93TH/A,Red)</h5>
                    <a href="#" class="btn btn-primary">31,900.-</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/02.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">SAMSUNG S22 ULTRA 5G (8+128,S908EDRD) Brugundy</h5>
                    <a href="#" class="btn btn-primary">36,170.-</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/03.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">SAMSUNG A13 (4+64,A135FZOG) Peach</h5>
                    <a href="#" class="btn btn-primary">5,470.-</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========สิ้นสุดแถวที่ 1=========== -->
    <!-- ==========แถวที่ 2=========== -->
    <div class="row mt-4">
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/04.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">ASUS ROG Phone 6 (12+256,AI2201-1A005W) Phantom Black</h5>
                    <a href="#" class="btn btn-primary">28,990.-</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/05.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">VIVO V25 5G (8+256) Sunshine Gold</h5>
                    <a href="#" class="btn btn-primary">13,950.-</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset('frontend/image/product/06.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">INFINIX NOTE 12 (8+256,X670) Jewel Blue</h5>
                    <a href="#" class="btn btn-primary">6,999.-</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========สิ้นสุดแถวที่ 2=========== -->
</div>

@endsection