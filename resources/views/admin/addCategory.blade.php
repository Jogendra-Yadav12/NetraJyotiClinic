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
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card card-white">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Add Sub Category</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-inline" action="{{url('')}}">
                                    <div class="form-group">
                                            <label for="example">Sub Category Name</label>
                                            <input type="text" class="form-control" id="example" name="name" />
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Sub Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card card-white">
                                <div class="card-heading clearfix">
                                    <h4 class="card-title">Add Category</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{url('addCategory')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInput1">Category Name</label>
                                            <input type="text" class="form-control" id="exampleInput1" name="name" />
                                        </div>
                                        <div class="col-md-12 grid-margin">
                                            <div class="card card-white">
                                                <div class="card-heading clearfix">
                                                    <h4 class="card-title">Upload Category Image</h4>
                                                </div>
                                                <div class="card-body">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="img" />
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>

    
@endsection