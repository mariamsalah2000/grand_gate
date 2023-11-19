<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use App\Models\Category;
use Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $projects = $projects->where('name','LIKE','%'.$search.'%')->orWhereHas('category',function($q) use($search){
                $q->where('name','LIKE','%'.$search.'%');
            });
        }
        $projects = $projects->get();
        return view('backend.projects.index',compact('projects','search'));
    }

    public function create()
    {
        $categories = Category::orderBy('created_at','DESC')->get();

        return view('backend.projects.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $project = new Project;
        $project->name = $request->name;
        $project->category_id = $request->category_id;
        $project->order = (int)$request->order;
        $project->description = $request->description;
        $project->save();
        if($request->file('images')){
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $path = $imagefile->store('/images/projects', ['disk' =>   'my_files']);
                $image->url = $path;
                $image->project_id = $project->id;
                $image->save();
            }
        }

        return redirect()->route('projects.index')->with('success','Project Added Successfully');
    }

    public function edit($id)
    {
        $project = Project :: find($id);
        $categories = Category::orderBy('created_at','DESC')->get();
        if($project)
        {
            return view('backend.projects.edit',compact('project','categories'));
        }
        return back()->with('error','Project Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $project = Project :: find($id);
        if($project)
        {
            $project->name = $request->name;
            $project->category_id = $request->category_id;
            $project->order = (int)$request->order;
            $project->description = $request->description;
            $project->save();
            if($request->file('images')){
                foreach ($request->file('images') as $imagefile) {
                    $image = new Image;
                    $path = $imagefile->store('/images/projects', ['disk' =>   'my_files']);
                    $image->url = $path;
                    $image->project_id = $project->id;
                    $image->save();
                }
            }
            return redirect()->route('projects.index')->with('success','Project Updated Successfully');
        }
        return redirect()->route('projects.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return back()->with('success','Project Deleted Successfully');
    }
}
