<x-backend.layouts.master>
    <h1 class="mt-4">Category-Create</h1>
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
            <div class="col-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header text-center">
                        Details-Product
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Title</strong>
                            <input type="text"  class="form-control"name="title" value="{{old('title',$product->title)}}"id="" readonly>
                        </div>
                        <div class="form-group">
                            <strong>Type</strong>
                            <input type="text" class="form-control" name="type" value="{{old('type',$product->type)}}"id="" readonly>
                        </div>
                        <div class="form-group">
                            <strong>Price</strong>
                            <input type="text" class="form-control" name="price" value="{{old('price',$product->price)}}"id="" readonly>
                        </div>
                        <div class="form-group">
                            <strong>Image</strong>
                            <img src="{{Storage::url($product->img)}}" height="450px" width="50px"  alt="" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>