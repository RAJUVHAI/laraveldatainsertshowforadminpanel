@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box account__summary">
                        <div class="inner">
                            <h3 class="counter">150</h3>

                            <p>Total Customer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box add__product">
                        <div class="inner">
                            <h3 class="counter" >53</h3>

                            <p>Total Product</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div style="color: white;" class="small-box new__invoice">
                        <div class="inner">
                            <h3 class="text-white counter">44</h3>

                            <p class="text__color">New Order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer text__color text-white ">More info
                            <i class="fas fa-arrow-circle-right text-white"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box purses__report">
                        <div class="inner">
                            <h3 class="counter">65</h3>

                            <p>Total Sale</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row mt-5 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="invoice p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/pos_invoice.png" alt="">
                                <p> Create POS Invoice </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="new__invoice p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/create_invoice.png" alt="">
                                <p>Create New Invoice</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="add__product  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-product.png" alt="">
                                <p>Add Product</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="add__customer  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-customer.png" alt="">
                                <p>Add Customer</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row d-flex ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="sales__report  p-3 h5 text-center ">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/pos_invoice.png" alt="">
                                <p> Sales Report </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="purses__report  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/create_invoice.png" alt="">
                                <p>Purses Report</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="stock__report  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-product.png" alt="">
                                <p>Stock Report</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="account__summary  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-customer.png" alt="">
                                <p>Account Summary</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div >
    




    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="visitors-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sales</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Online Store Overview</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-success text-xl">
                    <i class="ion ion-ios-refresh-empty"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                    <span class="text-muted">CONVERSION RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                  <p class="text-warning text-xl">
                    <i class="ion ion-ios-cart-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                    <span class="text-muted">SALES RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0">
                  <p class="text-danger text-xl">
                    <i class="ion ion-ios-people-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                    <span class="text-muted">REGISTRATION RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







            <div class="row mt-3 bg-light1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-4 col-sm-4 ">
                            <table class="table table-striped  border p-3">
                                <thead>
                                    <h4 class="p-1 text-primary text-center">Latest Search Keyword</h4>

                                    <tr>

                                        <th scope="col">Keywords</th>
                                        <th scope="col">Results</th>
                                        <th scope="col">Hits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>20</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>21</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>21</td>
                                        <td>15</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col col-md-4 col-sm-4 bg-primary  p-2 pb-3">
                            <table class="table table-striped  p-3">
                                <thead>
                                    <h4 class="p-1 text-center text-white">Today's report</h4>
                                    <tr>
                                        <th scope="col">Today's report</th>
                                        <th scope="col">Results</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Totals Sales</td>
                                        <td>$20</td>

                                    </tr>
                                    <tr>
                                        <td>Totals Purches</td>
                                        <td>21</td>

                                    </tr>
                                    <tr>
                                        <td>Totals Discunt</td>
                                        <td>$21</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col col-md-4 col-sm-4 col-xsm-12">
                            <table class="table table-striped  p-3">
                                <thead>
                                    <h4 class="p-1 text-center text-primary">Catagory Products</h4>
                                    <tr>
                                        <th scope="col">Catagories</th>
                                        <th scope="col">Product count</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>21</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>21</td>
                                     
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row   my-5 bg-light2">
                    <div class="col">
                        <table class="table table-striped  border ">
                            <thead>
                                <th>
                                    <h5 class=" text-primary ">Best Sales Production</h5>
                                </th>

                                <tr>

                                    <th scope="col">Product</th>
                                    <th scope="col">orders Count</th>
                                    <th scope="col">tk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>20</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                    <td>15</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-striped  border ">
                            <thead>

                                <th>
                                    <h5 class=" text-primary ">Customers Activities</h5>
                                </th>
                                <tr>

                                    <th scope="col">New Customers</th>
                                    <th scope="col">Returning Customers</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>20</td>  
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>21</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">


                        <div class="col">

                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Products</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Sales</th>
                                                <th>More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Some Product
                                                </td>
                                                <td>$13 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        12%
                                                    </small>
                                                    12,000 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Another Product
                                                </td>
                                                <td>$29 USD</td>
                                                <td>
                                                    <small class="text-warning mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        0.5%
                                                    </small>
                                                    123,234 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Amazing Product
                                                </td>
                                                <td>$1,230 USD</td>
                                                <td>
                                                    <small class="text-danger mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        3%
                                                    </small>
                                                    198 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                                    Perfect Item
                                                    <span class="badge bg-danger">NEW</span>
                                                </td>
                                                <td>$199 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        63%
                                                    </small>
                                                    87 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Online Store Overview</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-tool">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                        <p class="text-success text-xl">
                                            <i class="ion ion-ios-refresh-empty"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-up text-success"></i> 12%
                                            </span>
                                            <span class="text-muted">CONVERSION RATE</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                        <p class="text-warning text-xl">
                                            <i class="ion ion-ios-cart-outline"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                            </span>
                                            <span class="text-muted">SALES RATE</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->
                                    <div class="d-flex justify-content-between align-items-center mb-0">
                                        <p class="text-danger text-xl">
                                            <i class="ion ion-ios-people-outline"></i>
                                        </p>
                                        <p class="d-flex flex-column text-right">
                                            <span class="font-weight-bold">
                                                <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                            </span>
                                            <span class="text-muted">REGISTRATION RATE</span>
                                        </p>
                                    </div>
                                    <!-- /.d-flex -->
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- /.col-md-6 -->

                    <!-- /.d-flex -->

                    <!-- /.card -->




                  

                </div>
    </section>
   <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title font-weight-bold">Leatest Product</h1>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>product Name</th>
                                        <th>Catagory</th>
                                        <th>Buying Price</th>
                                        <th>MRP Price</th>
                                        <th>Selling Price</th>
                                        <th>Offer Price</th>

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
          <!-- /.col-md-6 -->
            <div class="contain">
                        <div class="row">
                            <div class="col pt-2 text-center bg-primary">
                                <h6>All Right's Reserved By BD Task LTD 2022</h6>
                            </div>
                        </div>
                    </div>



<script>
    $('.counter').counterUp({
  delay: 10,
  time: 2000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');
</script>

<script src="{{asset('/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('/plugins/chart.js/CustomChart.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
@endsection
