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
                                                    <th scope="col">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck">
                                                        </div>
                                                    </th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Slug</th>
                                                    <th scope="col">Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        </div>
                                                    </th>
                                                    <td>1</td>
                                                    <td><img src="img/category/category1.jpg" alt="..."></td>
                                                    <td>Echo Spot</td>
                                                    <td>Echo spot</td>
                                                    <td>Electronics</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        </div>
                                                    </th>
                                                    <td>2</td>
                                                    <td><img src="img/category/category2.jpg" alt="..."></td>
                                                    <td>Camera Phone</td>
                                                    <td>camera phone</td>
                                                    <td>Electronics</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        </div>
                                                    </th>
                                                    <td>3</td>
                                                    <td><img src="img/category/category3.jpg" alt="..."></td>
                                                    <td>Laptops</td>
                                                    <td>laptops</td>
                                                    <td>Electronics</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        </div>
                                                    </th>
                                                    <td>4</td>
                                                    <td><img src="img/category/category4.jpg" alt="..."></td>
                                                    <td>Security CCTV</td>
                                                    <td>Security cctv</td>
                                                    <td>Electronics</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        </div>
                                                    </th>
                                                    <td>5</td>
                                                    <td><img src="img/category/category5.jpg" alt="..."></td>
                                                    <td>Men's Wear</td>
                                                    <td>Men's wear</td>
                                                    <td>Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                        </div>
                                                    </th>
                                                    <td>6</td>
                                                    <td><img src="img/category/category6.jpg" alt="..."></td>
                                                    <td>Women's Wear</td>
                                                    <td>Women's wear</td>
                                                    <td>Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck7">
                                                        </div>
                                                    </th>
                                                    <td>7</td>
                                                    <td><img src="img/category/category7.jpg" alt="..."></td>
                                                    <td>Accessories</td>
                                                    <td>accessories</td>
                                                    <td>Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck8">
                                                        </div>
                                                    </th>
                                                    <td>8</td>
                                                    <td><img src="img/category/category8.jpg" alt="..."></td>
                                                    <td>Footwear</td>
                                                    <td>Footwear</td>
                                                    <td>Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck9">
                                                        </div>
                                                    </th>
                                                    <td>9</td>
                                                    <td><img src="img/category/category9.jpg" alt="..."></td>
                                                    <td>Tops</td>
                                                    <td>tops</td>
                                                    <td>Women's Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck10">
                                                        </div>
                                                    </th>
                                                    <td>10</td>
                                                    <td><img src="img/category/category10.jpg" alt="..."></td>
                                                    <td>Bottom</td>
                                                    <td>bottom</td>
                                                    <td>Women's Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck11">
                                                        </div>
                                                    </th>
                                                    <td>11</td>
                                                    <td><img src="img/category/category11.jpg" alt="..."></td>
                                                    <td>Jackets</td>
                                                    <td>jackets</td>
                                                    <td>Women's Fashion</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck12">
                                                        </div>
                                                    </th>
                                                    <td>12</td>
                                                    <td><img src="img/category/category12.jpg" alt="..."></td>
                                                    <td>Summer Wear</td>
                                                    <td>summer wear</td>
                                                    <td>Women's Fashion</td>
                                                </tr>
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