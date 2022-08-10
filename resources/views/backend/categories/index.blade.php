<x-backend.layouts.master>
<h1 class="mt-4">Category-Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">
                                <a href="{{URL::to('/')}}" class="btn btn-secondary btn-sm">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success btn-sm"href="{{route('category.create')}}">
                                    Create
                                </a>
                            </li>
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
                                <table class="table table-striped table-bordered">
                                    <thead>
                                            <th>Title</th>
                                            <th>Link</th>
                                            <th>Actions</th>
                                            {{-- <th>Delete</th> --}}
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $c)
                                        <tr>
                                            <td>{{$c->title}}</td>
                                            <td>{{$c->link}}</td>
                                            <td>
                                               <div class="btn-group">
                                                 <a href="{{route('category.edit',$c->id)}}" class="btn btn-info rounded mx-1"><i class="fa fa-edit"></i></a> 
                                                |
                                                <a href="{{route('category.show',$c->id)}}" class="btn btn-success rounded mx-1"><i class="fa fa-eye"></i></a>
                                                |
                                                <form method="POST" action="{{route('category.destroy',$c->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mx-1"
                                                onclick="return confirm('Are You Sure to delete this?')"><i class="fa fa-trash"></i></button>
                                                    </form>
                                               </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
</x-backend.layouts.master>


<form method="POST" action="{{route('category.destroy',$c->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button> <span> <i class="fas fa-skull-crossbones"></i> Delete </span> </button>
                                                    </form>
