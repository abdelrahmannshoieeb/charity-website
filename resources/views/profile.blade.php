@extends('layout.master')
@section('content')


@php
    $user = Auth::user();
@endphp
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body p-4 rounded text-center img-bg"></div>
            <!--end card-body-->
            <div class="position-relative">
                <div class="shape overflow-hidden text-card-bg">
                    <svg
                        viewBox="0 0 2880 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n6">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                <img
                                    src="assets/images/users/avatar-5.jpg"
                                    alt=""
                                    class="rounded-circle img-fluid" />
                                <div
                                    class="position-absolute top-50 start-100 translate-middle">
                                    <img
                                        src="assets/images/flags/baha_flag.jpg"
                                        alt=""
                                        class="rounded-circle thumb-sm border border-3 border-white" />
                                </div>
                            </div>
                            <div
                                class="flex-grow-1 text-truncate ms-3 align-self-end">
                                <h5 class="m-0 fs-3 fw-bold">{{$user->name}}</h5>
                                <p class="text-muted mb-0">{{$user->name}}</p>
                            </div>
                            <!--end media body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <div class="text-body mb-2 d-flex align-items-center">
                                <i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Language :</span>
                                English / Arabic
                            </div>
                            <div class="text-muted mb-2 d-flex align-items-center">
                                <i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a
                                    href="#"
                                    class="text-primary text-decoration-underline">{{$user->email}}</a>
                            </div>
                            <div class="text-body mb-3 d-flex align-items-center">
                                <i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +20
                                {{ $user->phone }}
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Personal Information</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <a
                            href="#"
                            class="float-end text-muted d-inline-flex text-decoration-underline"><i class="iconoir-edit-pencil fs-18 me-1"></i>Edit</a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-0">
                    <li class="mt-2">
                        <i
                            class="las la-briefcase me-2 text-secondary fs-22 align-middle"></i>
                        <b> Position </b> : {{ $user->main_job }}
                    </li>
                    <li class="mt-2">
                        <i
                            class="las la-university me-2 text-secondary fs-22 align-middle"></i>
                        <b> location </b> : {{ $user->city }}
                    </li>
                    <li class="mt-2">
                        <i
                            class="las la-phone me-2 text-secondary fs-22 align-middle"></i>
                        <b> Phone </b> : +20 {{ $user->phone }}
                    </li>
                    <li class="mt-2">
                        <i
                            class="las la-envelope text-secondary fs-22 align-middle me-2"></i>
                        <b> Email </b> : {{ $user->email }}
                    </li>
                </ul>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-8">
       
        <!-- Tab panes -->
      <livewire:profile.editprodile>
    </div>
    <!--end col-->
</div>

@endSection