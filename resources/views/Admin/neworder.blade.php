@extends('layouts.admin')
@section('title', 'neworder')
@section('content')



        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold">Order List</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                  
                                    <th>Product Name</th>
                                    <th>Address(s)</th>
                                    <th>Phone</th>
                                    <th>Order At</th>
                                    <th>Price</th>
                               
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                               
                                    <td>Laptop</td>
                                    <td>Dhaka,Bangladesh</td>
                                    <td>+1235465455 </td>
                                    <td>22 Jan, 2022</td>
                                    <td>&#36; 200</td>
                                 
                                    <td>Received</td>
                                   <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>2</td>
                                
                                    <td>Tv</td>
                                    <td>Rajshahi,Bangladesh</td>
                                    <td>+12356875455 </td>
                                    <td>20 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                   
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>3</td>
                                
                                    <td>Smart Phone</td>
                                    <td>Khulna,Bangladesh</td>
                                    <td>+12656875455 </td>
                                    <td>21 Jan, 2022</td>
                                    <td>&#36; 200</td>
                                   
                                    <td>Received</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>4</td>
                                
                                    <td>Smart Watch</td>
                                    <td>Narayangoanj,Bangladesh</td>
                                    <td>+124455455 </td>
                                    <td>18 Jan, 2022</td>
                                    <td>&#36; 200</td>
                                  
                                    <td>Delivered</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>5</td>
                                 
                                    <td>Led</td>
                                    <td>Tongi,Bangladesh</td>
                                    <td>+12449885455 </td>
                                    <td>17 Jan, 2022</td>
                                    <td>&#36; 250</td>
                                
                                    <td>Received</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>6</td>
                                 
                                    <td>T-shirt</td>
                                    <td>Comilla,Bangladesh</td>
                                    <td>+1244665455 </td>
                                    <td>16 Jan, 2022</td>
                                    <td>&#36; 50</td>
                                 
                                    <td>Received</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>7</td>
                                
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                  
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>8</td>
                                 
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                  
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>9</td>
                                 
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                   
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>10</td>
                                  
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>11</td>
                                   
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                  
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>12</td>
                                   
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                  
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>13</td>
                                 
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                  
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>14</td>
                                 
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                 
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>15</td>
                                
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                 
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary  px-3 "></i></a></td>
                                </tr>
                                <tr>
                                <td>16</td>
                                  
                                    <td>Mouse</td>
                                    <td>Chapai,Bangladesh</td>
                                    <td>+16565455 </td>
                                    <td>15 Jan, 2022</td>
                                    <td>&#36; 100</td>
                                   
                                    <td>Pending</td>
                                    <td> <a href="{{route('ordertable')}}"><i class="fas fa-eye btn btn-primary px-3 text-align-center "></i></a></td>
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

   



@endsection
