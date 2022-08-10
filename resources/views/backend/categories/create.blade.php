<x-backend.layouts.master>
<h1 class="mt-4">Category-Create</h1>
     <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">
                                <a href="{{URL::to('/')}}" class="btn btn-secondary btn-sm">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success btn-sm"href="{{route('category.index')}}">
                                    List
                                </a>
                            </li>
                        </ol>
    <x-slot name="pageTitle">
        Home
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Add Category</h3>
                    </div>
                    <div class="card-body">  
                        <form action="{{route('category.store')}}" method="post">
                   @csrf
                    <div class="form-row">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder=""id="Title">
                        @error('title')
                        <div class="alert alert-danger mt-1">
                            Add some text bruh!!
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Link">Link</label>
                        <input type="text" name="link" class="form-control" placeholder=""id="Link">
                        @error('link')
                        <div class="alert alert-danger mt-1">
                            Add some text bruh!!
                        </div>
                        @enderror
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
