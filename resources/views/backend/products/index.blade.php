<x-backend.layouts.master>
    <h1 class="mt-4">Products-List</h1>
     <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">
                                <a href="{{URL::to('/')}}" class="btn btn-secondary btn-sm">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success btn-sm"href="{{route('product.create')}}">
                                    Create
                                </a>
                            </li>
                        </ol>
                         @if(session()->has('msg'))
                            <div class="alert alert-danger">
                                {{session()->get('msg')}}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $p)
                                <tr>
                                    <td>{{$p->title}}</td>
                                    <td>{{$p->type}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>{{$p->img}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('product.edit',$p->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a> 
                                            <a href="{{route('product.show',$p->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('product.destroy',$p->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure You want to delete?')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
</x-backend.layouts.master>