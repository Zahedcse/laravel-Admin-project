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
            // 'link'=> ['required', 'min:3', 'max:30'],
         ]);
        Category::create([
            "title"=>$request->title,
            "link"=>$request->link,
        ]);
        //    return redirect()->to('categories');
        return redirect()->to('category')->with('msg', 'Task Added Successfully');
    }
    public function edit(Category $category)
    {
        // $categories = Category::find($id);
        return view('backend.categories.edit', [
            'category' => $category
        ]);
    }
    public function update(Request $request, Category $category)
    {
        // $category = Category::find($id);
        // $category->title = $request->title;
        // $category->link = $request->link;

        // if ($category->save()) {
        //     return redirect()->to('categories')->with('msg', 'Updated Successfully');
        //     ;
        // }
        $category->fill($request->post())->save();
        return redirect()->route('category.index')->with('msg', 'Updated Successfully');
    }

    public function show(Category $category)
    {
        // $category = Category::findOrFail($id);
        return view('backend.categories.show', ['category' => $category]);
    }

    public function destroy(Category $category)
    {
        // $category = Category::find($id);
        $category->delete();
        session()->flash('msg', 'Category deleted successfully');
        return redirect()->route('category.index');
        // return redirect()->route('category.index')->with('msg', 'Deleted Successfully');
    }
}
