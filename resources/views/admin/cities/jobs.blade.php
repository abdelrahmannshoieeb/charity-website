@extends('admin.layout.master')
@section('title', 'Regions')


@section('content')

@php
    $cities = DB::table('cities')->get();
@endphp
<div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                                <h4 class="page-title">Regions</h4>
                                <div class="">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Approx</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item"><a href="#">Jobs</a>
                                    </ol>
                                </div>                                
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-auto">                      
                                            <h4 class="card-title">Jobs</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto ms-auto">                      
                                            <div class="bg-primary-subtle p-2 border-dashed border-primary rounded">
                                                <span class="text-primary fw-semibold">Note :</span><span class="text-primary fw-normal"> if you want to data edit do double click on a table row.</span>
                                            </div>                    
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                       <livewire:admin.cities.jobs/>
                                    </div>               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                     
                    </div><!--end row-->
                </div><!-- container -->
@endSection


