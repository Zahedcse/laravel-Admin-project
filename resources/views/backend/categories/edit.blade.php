<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Home
    </x-slot>
 <x-backend.elements.breadcumb>
    <x-slot name="pageHeader">
            {{-- <h2 class="text-center">Update Category</h2> --}}
    </x-slot>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</x-backend.elements.breadcumb>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="text-center">Update Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category.update',$category->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title',$category->title)}}" placeholder=""id="Title">
                    </div>
                    <div class="form-group">
                        <label for="Link" class="control-label">Link</label>
                        <input type="text" name="link" class="form-control" value="{{old('link',$category->link)}}" placeholder=""id="Link">
                    </div>
                    <div class="form-group mt-2 text-center">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
