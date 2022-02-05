@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')


        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <div class="row d-flex justify-content-between mb-3">
               <h3 class="ml-3">Product List</h3>
                <button class="btn bg-success mr-3">Save</button>

            </div>
            <div class="">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>product Name</th>
                                        <th>Catagory</th>
                                        <th>Buying Price(s)</th>
                                        <th>MRP Price</th>
                                        <th>Selling Price</th>
                                        <th>Offer Price</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#</td>
                                        <td>HP</td>
                                        <td>Laptop</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 10</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>##</td>
                                        <td>Tv-Samsung-65UH8500</td>
                                        <td>Tv</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 100</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>#</td>
                                        <td>Apple Press</td>
                                        <td>T-Shirt</td>
                                        <td> &#36; 20</td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 200</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>#</td>
                                        <td>Laptop-Apple-2021	</td>
                                        <td>Laptop</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 200</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>#</td>
                                        <td>Blue Stars</td>
                                        <td>Ac</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 250</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>#</td>
                                        <td>Apple Press</td>
                                        <td>T-Shirt</td>
                                        <td> &#36; 20</td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 50</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>#</td>
                                        <td>Shoes-Nike-A5	</td>
                                        <td>Shoes</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 100</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>#</td>
                                        <td>Shoes-Nike-A5	</td>
                                        <td>Shoes</td>
                                        <td>&#36; 20 </td>
                                        <td>&#36; 25</td>
                                        <td>&#36; 100</td>
                                        <td>&#36; 50</td>
                                        <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i></button></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </div>





@endsection
