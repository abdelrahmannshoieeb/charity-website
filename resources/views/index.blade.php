@extends('layout.master')

@section('content')

@if ($alert == 1)
<div class="col-md-12 col-lg-12">
  <div class="card">
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col">
          <h4 class="card-title">Additional Content</h4>
        </div>
      </div> <!--end row-->
    </div><!--end card-header-->
    <div class="card-body pt-0">
      <div class="alert alert-info mb-0 border-2" role="alert">
        <h4 class="alert-heading font-18">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>
    </div><!--end card-body-->
  </div>
</div> 
@endif





<div class="row justify-content-center my-5">
  @foreach ($inst as $card )
  <div class="col-md-6 col-lg-3">
    <div class="card">
      <img  class="card-img-top img-fluid bg-light-alt" src="{{ asset('storage/'.$card->image)}}" alt="Card image cap" >
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <h4 class="card-title">{{$card->name}}</h4>
          </div><!--end col-->
          <div class="col-auto">
            <span class="badge bg-primary-subtle text-primary">{{$card->created_at}}</span>
          </div><!--end col-->
        </div> <!--end row-->
      </div><!--end card-header-->
      <div class="card-body pt-0">
        <p class="card-text text-muted ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Go somewhere</a>
      </div><!--end card -body-->
    </div><!--end card-->
  </div> <!--end col-->
  @endforeach
</div><!--end row-->

@endSection