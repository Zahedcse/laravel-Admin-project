<x-backend.layouts.master>
<h1 class="mt-4">Category-List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{URL::to('/')}}" class="btn btn-secondary">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                 @if(session()->has('msg'))
                                    <div class="alert alert-danger" role="alert">
                                        {{session()->get('msg')}}
                                    </div>
                                 @endif
                                <table id="datatablesSimple">
                                    <thead>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $c)
                                        <tr>
                                            <td>{{$c->title}}</td>
                                            <td>{{$c->link}}</td>
                                            <td>
                                                <a href="{{URL::to('categories/edit/'.$c->id)}}" class="btn btn-info btn-sm">Edit</a> |
                                                <a href="{{URL::to('categories/delete/'.$c->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
</x-backend.layouts.master>

