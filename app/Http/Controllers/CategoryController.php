<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use App\Models\Category;

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
        Category::create([
            "title"=>$request->title,
            "link"=>$request->link,
        ]);
        return redirect()->to('categories');
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
            return redirect()->to('categories');
        }
    }
    public function delete($id){
        
    }
}
