<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use GuzzleHttp\Promise\Create;
// use \Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('backend.categories.create');
    }
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=> ['required', 'min:3', 'max:30'],
         ]);
        Category::create([
            "title"=>$request->title,
            "link"=>$request->link,
        ]);
        //    return redirect()->to('categories');
        return redirect()->to('categories')->with('msg', 'Task Added Successfully');
    }
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.categories.edit', ['category' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->link = $request->link;

        if ($category->save()) {
            return redirect()->to('categories')->with('msg', 'Updated Successfully');
            ;
        }
    }
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->to('categories')->with('msg', 'Deleted Successfully');
        }
    }
    public function show($id){
        
    }
}
