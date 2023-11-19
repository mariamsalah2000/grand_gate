<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $categories = $categories->where('name','LIKE','%'.$search.'%');
        }

        $categories = $categories->get();
        return view('backend.categories.index',compact('categories','search'));
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $category = new Category;
        $category->name = $request->title;
        $category->description = $request->description;
        $category->order = (int)$request->order;
        $category->save();
        if($request->file('images')){
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $path = $imagefile->store('/images/categories', ['disk' =>   'my_files']);
                $image->url = $path;
                $image->category_id = $category->id;
                $image->save();
            }
        }
        return redirect()->route('categories.index')->with('success','Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category :: find($id);
        if($category)
        {
            return view('backend.categories.edit',compact('category'));
        }
        return back()->with('error','Category Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $category = Category :: find($id);
        if($category)
        {
            $category->name = $request->name;
            $category->order = (int)$request->order;
            $category->description = $request->description;
            $category->save();

            if($request->file('images')){
                foreach ($request->file('images') as $imagefile) {
                    $image = new Image;
                    $path = $imagefile->store('/images/categories', ['disk' =>   'my_files']);
                    $image->url = $path;
                    $image->category_id = $category->id;
                    $image->save();
                }
            }

            return redirect()->route('categories.index')->with('success','Category Updated Successfully');
        }
        return redirect()->route('categories.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return back()->with('success','Category Deleted Successfully');
    }
}
