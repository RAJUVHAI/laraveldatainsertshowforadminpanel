@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')


      <div class="container">
        <div class="row">
            <div class="col  col-lg-7 col-md-12 col-sm-12">
                <form method="POST" enctype="multipart/form-data" action="{{route('addproduct')}}" >
                    @csrf
                    <div class="card-b">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" name="p_name" class="form-control" id="exampleInputEmail1" placeholder="enter your product name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1"  class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="summernote ">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea style="height: 500px;" name="long_description" class="p-5" id="summernote" required>
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="mb-3">
                            <label for="formFileDisabled" class="form-label">Image</label>

                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <!-- /.card-body -->

               
            </div>

            <div class="col  col-lg-5 col-md-12 col-sm-12 px-2">
                <div class="card-b">
                    <div class="form-group">
                        <label>Product Catagory</label>
                        <select name="p_category" class="form-control select2" style="width: 100%;" required>
                            <option value="0">Parent Category</option>
                            @foreach ($category as $value)
                                <option value="{{ $value->id }}">{{ $value->c_name }}</option>
                            @endforeach
                        </select>
                    </div>
                   


                   <div class="row">
                       <div class="col">
                       <div class="form-group">
                        <label for="inputEstimatedBudget">Quantity</label>
                        <input type="number" name="quantity" id="inputEstimatedBudget" class="form-control" step="1" required>
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Buying Price</label>
                        <input type="number" name="b_price" id="inputSpentBudget" class="form-control" step="1" required>
                    </div>
                       </div>
                   </div>
                  <div class="row">
                      <div class="col">
                      <div class="form-group">
                        <label for="inputEstimatedDuration">Mrp Price </label>
                        <input type="number" name="mrp_price" id="inputEstimatedDuration" class="form-control" step="0.1" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Selling Price </label>
                        <input type="number" name="s_price" id="inputEstimatedDuration" class="form-control" step="0.1" required>
                    </div>
                    <div class="form-group">
                       <a href="#"> <button class="btn btn-primary text-white" type="submit"><i class="fa fa-paper-plane p-1" aria-hidden="true"></i>Submit</button></a>
                    </div>
                      </div>
                  </div>
                </div>



            </div>
            </form>

        </div>

      
        </div>


<script>
    $('.summernote').summernote({
     width:100
});
</script>
@endsection