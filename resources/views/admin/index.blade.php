@extends('admin.layout.master')

@section('content')
@php
  $instu = \App\Models\Institution::all();
@endphp
<div class="row justify-content-center my-5">
  @foreach ($instu as $item)
  <div class="col-md-6 col-lg-3">
    <div class="card">
      <img class="card-img-top img-fluid bg-light-alt" src="{{ asset('storage/'.$item->image) }}" alt="Card image cap">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col">
            <h4 class="card-title">{{$item->name}}</h4>
          </div><!--end col-->
          <div class="col-auto">
            <span class="badge bg-primary-subtle text-primary">{{$item->created_at}}</span>
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