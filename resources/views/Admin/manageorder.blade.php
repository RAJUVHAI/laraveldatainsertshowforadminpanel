@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Product order List</h1>
            <div class="row d-flex justify-content-between p-2 ">
                <input class="form-control col-lg-4" id="myInput" type="text" placeholder="Search..">
                <a href="{{route('neworder')}}"><button class="btn bg-info"><i class="fas fa-plus-circle"></i> Add Order</button></a>
            </div>
            <table class="table table-white   table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">Orders #</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Total</th>
                        <th scope="col">Created</th>
                        <th scope="col">Last Updated</th>
                     
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">1</label>
                            </div>
                        </td>
                        <td>Fashion</td>
                        <td>$30.8</td>
                        <td>18 Jan, 2022</td>
                        <td>Yesterday</td>
                      
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2</label>
                            </div>
                        </td>
                        <td>Gadget</td>
                        <td>$100.8</td>
                        <td>18 Jan, 2022</td>
                        <td>16 Jan, 2022</td>
                       
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">3</label>
                            </div>
                        </td>
                        <td>T-shirt</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>15 Jan, 2022</td>
                       
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">4</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                       
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">5</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                     
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">6</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                       
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">7</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                   
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">8</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                      
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">9</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                     
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">10</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                     
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">11</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                  
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">12</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>$14 Jan, 2022</td>
                     
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Receive</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>




@endsection
