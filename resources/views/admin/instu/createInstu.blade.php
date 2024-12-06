@extends('admin.layout.master')
@section('title', 'Create Instutuation')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                <h4 class="page-title">Elements</h4>
                <div class="">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Approx</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Forms</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Elements</li>
                    </ol>
                </div>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <livewire:admin.creat-instu />
</div><!-- container -->
@endsection

@section('js')
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/uppy/uppy.legacy.min.js"></script>
<script src="assets/js/pages/file-upload.init.js"></script>
<script src="assets/js/app.js"></script>
@endsection