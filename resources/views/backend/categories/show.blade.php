<x-backend.layouts.master>
<h1 class="mt-4">Category-List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="btn btn-secondary">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                       
                        <div class="col-md-6 mx-auto">
                            <div class="card mb-4 shadow">
                            <div class="card-header">
                               <h2 class="card-title text-center">Category Details</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">ID : </label>
                                    <span>{{ $category->id}}</span>
                                </div>   
                                <div class="form-group">
                                    <label for="">Title : </label>
                                    <span>{{ $category->title}}</span>
                                </div>   
                                <div class="form-group">
                                    <label for="">Link : </label>
                                    <span>{{ $category->link}}</span>
                                </div>   
                            </div>
                        </div>
                        </div>
</x-backend.layouts.master>

