@extends('layouts.admin')
@section('title', 'neworder')
@section('content')

<div class="container-fluid">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-lg-8  p-5 center-margin shadow">
                <form class="d-flex justify-content-around">
                    <div class="col-lg-5 border border-white">
                        <div class="form-group col-lg-8">
                            <label for="emailName">Email</label>
                            <input type="email" class="form-control" id="emailName" placeholder="Email">

                        </div>
                        <div class="form-group col-lg-8">
                            <label for="Phone">Phone</label>
                            <input type="text" class="form-control" id="Phone">
                        </div>
                        <div class="form-group col-lg-8">
                            <label for="Address">Address</label>
                            <textarea name="text-area" id="" cols="30" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-5 border border-white ">
                        <div class="form-group ">
                            <label for="Status">Status</label>
                            <div class="col-lg-8">
                                <select class="form-control" id="Status">
                                    <option value=""><a href="#">Pending</a></option>
                                    <option value=""><a href="#">Received</a></option>
                                    <option value=""><a href="#">Delivered</a></option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-lg-8">
                            <label for="orderId">Order ID</label>
                            <input type="text" class="form-control" id="orderId" placeholder="">

                        </div>
                        <div class="form-group col-lg-8">
                            <label for="orderDate">Date</label>
                            <input type="date" class="form-control" id="orderDate">
                        </div>
                    </div>

                </form>
                <div class="row ">
                    <table class="table ">

                        <thead>
                            <tr class="">
                                <th scope="col">Product Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">

                                <td><input type="text" placeholder="Product Name"></td>
                                <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                <td><input class="col-lg-10" type="number" placeholder="Total"></td>
                            </tr>

                        </tbody>

                    </table>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>


            </div>
        </div>
    </div>
</div>




@endsection
