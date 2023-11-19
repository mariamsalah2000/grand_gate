<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Service;
use App\Models\Benefit;
use App\Models\Collaborator;
use App\Models\Project;
use App\Models\Video;
use App\Models\Config;
use App\Models\ContactRequest;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function accessories()
    {
        return view('frontend.accessories');
    }


    public function categories()
    {
        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->selct('id','name')->get();
        return response()->json($categories,200);
    }

    public function category($id)
    {
        $category = Category::find($id);
        if($category)
        {
            $data = [];
            $projects = Project::where('category_id',$id)->orderBy('order','ASC')->orderBy('created_at','DESC')->get();
            foreach($projects as $project)
            {
                $data[] = ['id'=>$project->id,'name' => $project->name , 'images' => $project->images->pluck('url')->toArray()];
            }
            return response()->json([$category->name,$data],200);
        }

        return response()->json([null,null],400);
    }

    public function projects()
    {
        $projects = Project::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $data = [];
        foreach($projects as $project)
        {
            $images = collect($project->images);
            $data[] = ['id'=>$project->id,'name' => $project->name , 'image' =>'public/'.$images->pluck('url')->first()];
        }
        return response()->json($data,200);
    }

    public function project($id)
    {
        $project = Project::find($id);
        if($project)
        {
            $data = ['id'=>$project->id,'name' => $project->name ,'category_name'=>$project->category->name,'category_id'=>$project->category->id ,'images' => $project->images->pluck('url')->toArray()];
            return response()->json($data,200);
        }


        return response()->json(null,400);
    }

    public function services()
    {
        $services = Service::orderBy('order','ASC')->orderBy('created_at','DESC')->select('id','title','description','image')->get();
        return response()->json($services,200);
    }
    public function collaborators()
    {
        $collaborators = Collaborator::orderBy('order','ASC')->orderBy('created_at','DESC')->select('id','name','image')->get();
        return response()->json($collaborators,200);
    }
    public function videos()
    {
        $videos = Video::orderBy('order','ASC')->orderBy('created_at','DESC')->select('id','title','url')->get();

        return response()->json($videos,200);
    }



    public function contactPost(Request $request)
    {
        if(! $request->phone)
            return response()->json(['error',trans('Phone Field Is Required')],400);
        if(! $request->name)
            return response()->json(['error',trans('Name Field Is Required')],400);

        $contact = ContactRequest :: insert(
            [
                'phone' => $request->phone,
                'name' => $request->name,
                'inquiry' => $request->inquiry??"",
                'created_at' => now(),
            ]
        );
        if($contact)
            return response()->json(['success','Message Sent Successfully'],200);
        return response()->json(['error','Something Went Wrong'],400);
    }


}
