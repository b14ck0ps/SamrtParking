@extends('layouts.app')
@section('content')
    <style>
        .gradient-custom {
            background: #f6d365;
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-8 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5>{{ auth()->user()->name }}</h5>
                                <p>{{ auth()->user()->type }}</p>
                                <div class="d-flex align-items-center justify-content-around">
                                    <a href="/logout" class="btn btn-outline-light btn-md h-25">Logout</a>
                                    <a class="mt-5" href="/edit"><i class="far fa-edit mb-5"></i></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted">{{ auth()->user()->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
