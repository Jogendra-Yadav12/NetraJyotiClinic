@extends('layouts.admin')

@section('content')

@include('admin.nav')

 <!-- PAGE INNER
            ================================================== -->
            <div class="page-inner">

                <!-- PAGE MAIN WRAPPER
                ================================================== -->
                <div id="main-wrapper">
                    <!-- row -->
                    <div class="row align-items-center grid-margin">
                        <div class="col-12">
                            <div class="card card-white">
                                <div class="card-body row align-items-center">
                                    <div class="col-12 col-sm">
                                        <h4 class="mb-4 mb-sm-0 text-center text-sm-start">Category</h4>
                                    </div>

                                    <div class="col-12 col-sm-auto">

                                        <div class="row justify-content-center">

                                            <div class="col-auto my-1 my-md-0">
                                                <label class="m-0">Show:</label>
                                                <select class="w-auto d-inline-block form-select">
                                                    <option value="#?limit=24" selected="selected">24</option>
                                                    <option value="#?limit=25">25</option>
                                                    <option value="#?limit=50">50</option>
                                                    <option value="#?limit=75">75</option>
                                                    <option value="#?limit=100">100</option>
                                                </select>
                                            </div>

                                            <div class="col-auto my-1 my-md-0">
                                                <label class="m-0">Sort By:</label>
                                                <select class="w-auto d-inline-block form-select">
                                                    <option value="#?sort=p.sort_order&amp;order=ASC">Default</option>
                                                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                                    <option value="#?sort=p.price&amp;order=ASC" selected="">Price (Low &gt; High)</option>
                                                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card card-white">
                                <div class="card-body slimscroll">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $key=>$value)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td><img src="{{asset('images/'.$value->img)}}" alt="..." style="width:70px;height:70px;border-radius:50%"></td>
                                                    <td>{{$value->name}}</td>
                                                    <td>
                                                    <a href="#" class="me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="far fa-edit text-primary"></i>
                                                    </a>
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <i class="far fa-trash-alt text-danger"></i>
                                                    </a>
                                                </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
    
@endsection