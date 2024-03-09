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
                                    <h4 class="card-title">Upload your Category</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-inline">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" />
                                            <label class="custom-file-label" for="customFile">Choose file</label>
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
                                    <h4 class="card-title">Add your category description</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInput1">Category Name</label>
                                            <input type="text" class="form-control" id="exampleInput1" aria-describedby="exampleInput1" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Slug</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1">Parent</label>
                                            <select class="form-select form-control" id="exampleFormControlSelect1" aria-label="Default select example">
                                                <option selected>Choose Parent Category</option>
                                                <option value="1">Women's Cloths</option>
                                                <option value="2">Men's Cloths</option>
                                                <option value="3">Electronics</option>
                                                <option value="4">Makeup</option>
                                                <option value="5">Footwear</option>
                                                <option value="6">Furniture</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Creat Project</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>

    
@endsection