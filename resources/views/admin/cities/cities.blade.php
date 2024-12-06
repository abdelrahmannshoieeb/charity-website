@extends('admin.layout.master')
@section('title', 'Cities')


@section('content')

@php
    $cities = DB::table('cities')->get();
@endphp
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">
                <h4 class="card-title">Egyption Cities</h4>
            </div><!--end col-->
        </div> <!--end row-->
    </div><!--end card-header-->
    <div class="card-body pt-0">
        <div class="table-responsive-sm">
            <table class="table table-sm mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">city</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                    <tr>
                        <th scope="row">{{ $city->id }}</th>
                        <td>{{ $city->name }}</td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table><!--end /table-->
        </div><!--end /tableresponsive-->
    </div><!--end card-body-->
</div><!--end card-->
@endSection