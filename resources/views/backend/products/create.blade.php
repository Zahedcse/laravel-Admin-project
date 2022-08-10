<x-backend.layouts.master>
    <h1 class="mt-4">Product-Create</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="{{URL::to('/')}}" class="btn btn-secondary btn-sm">
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active">
                <a class="btn btn-success btn-sm"href="{{route('product.index')}}">
                    List
                </a>
            </li>
        </ol>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 mx-auto">
                   <div class="card shadow">
                    <div class="card-header text-center">
                        Create-Products
                    </div>
                    <div class="card-body">
                         <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('POST') --}}
                                <div class="col-10 d-flex align-items-center justify-content-between mb-2 ">
                                <strong for="" class="col-2">Title: </strong>
                                <input type="text" name="title" id="" class="col-8 form-control">
                                @error('title')
                                    <span class="alert alert-danger">
                                       {{$message}}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-10 d-flex align-items-center justify-content-between mb-2">
                                <strong for="" class="col-2">Type: </strong>
                                <input type="text" name="type" id="" class="col-8 form-control">
                            </div>
                            <div class="col-10 d-flex align-items-center justify-content-between mb-2">
                                <strong for="" class="col-2">Price: </strong>
                                <input type="number" name="price" id="" class="col-8 form-control">
                            </div>
                            <div class="col-10 d-flex align-items-center justify-content-between mb-2">
                                <strong for="" class="col-2">Image: </strong>
                                <input type="file" name="img" id="" class="col-8 form-control">
                            </div>
                            <div class="form-group mt-2 text-center">
                                <input type="submit" class="btn btn-success"value="Submit">
                            </div>
                         </form>
                    </div>
                   </div>
                </div>
            </div>
        </div>
</x-backend.layouts.master>