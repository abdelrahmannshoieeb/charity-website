@extends('layout.master')

@section('content')

<div class="container">
    <h2 class="my-5 text-center">Inst Records by Level</h2>

    @foreach ($instRecordsByLevel as $level => $instRecords)
        <h3>Level {{ $level }}</h3>
        <div class="row justify-content-center my-4">
            @foreach ($instRecords as $good)
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <img class="card-img-top img-fluid bg-light-alt" 
                            src="{{ asset('storage/'.$good->image) }}" 
                            alt="Card image cap">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">{{ $good->name }}</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <span class="badge bg-primary-subtle text-primary">{{ $good->created_at->format('M d, Y') }}</span>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body pt-0">
                            <p class="card-text text-muted">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Go somewhere</a>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            @endforeach
        </div><!--end row-->
    @endforeach

</div><!--end container-->

@endsection
