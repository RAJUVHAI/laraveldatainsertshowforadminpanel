@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3> Catagories </h3>
        </div>
        <div class="card-body d-flex justify-content-between ">
            <div class="col-lg-3">
                <form action="addcatagory" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="c_name" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                            placeholder="Catagory Name" required>

                    </div>
                    <div class="form-group ">
                        <label for="parentcatagory">Catagory Type</label>
                        <select name="p_category" class="form-control form-control-md" required>
                        <option value="0">Parent Category</option>
                            @foreach ($category as $value)
                                <option value="{{ $value->id }}">{{ $value->c_name }}</option>
                            @endforeach
                        </select>
                       

                    </div>
                    <div class="form-group ">
                        <label for="catagoryStatus">Status</label>
                        <div class="form-check">
                              <input class="form-check-input" type="radio" value="1" name="status" checked="">
                              <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                              <input class="form-check-input" type="radio" value="0" name="status">
                              <label class="form-check-label">In Active</label>
                        </div>
                    </div>
                  
                 <!--    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="c_description" class="d-block form-control" name="description" id="" cols="38" rows="3" required></textarea>
                    </div> -->

                    <button type="submit" class="btn btn-primary">Add New Catagory</button>
                </form>
            </div>

            <div class="card col-lg-8 ">
                <div class="card-header card-title">
                    <h3>Catagory List</h3>
                </div>


                <!-- /.card-header -->
                <div class="">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">Caragory Name</th>
                                <th class="text-info">Description</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Fashion
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td>
                                <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Gadget
                                </td>
                                <td class="text-center">--------</td>
                                <td>Active</td>
                                <td> <button class="btn btn-warning" type="submit"><i class="fas fa-ban"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    T-shirt
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    E-electronic
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Desktop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Ac
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Active</td>
                                <td> <button class="btn btn-warning" type="submit"><i class="fas fa-ban"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Deactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>




</div>




@endsection
