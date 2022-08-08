<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Home
    </x-slot>
 <x-backend.elements.breadcumb>
    <x-slot name="pageHeader">
            <h2 class="text-center">Add a New Category</h2>
    </x-slot>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</x-backend.elements.breadcumb>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Category</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="{{URL::to('store-categories')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder=""id="Title">
                        @error('title')
                        <div class="alert alert-danger">
                            Add some text bruh!!
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Link" class="control-label">Link</label>
                        <input type="text" name="link" class="form-control" placeholder=""id="Link">
                    </div>
                    <div class="form-group mt-2 text-center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
