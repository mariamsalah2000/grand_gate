@extends('backend.app')
@section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{trans('all.edit_project')}}</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">@method('PUT')
                            @csrf
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong>{{trans('all.Name')}}</strong></label>
                                <input type="text" value="{{$project->name}}" name="name" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong>{{trans('all.order')}}</strong></label>
                                <input type="number" name="order" class="form-control" value="{{$project->order}}">
                            </div>
                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="category"><strong>{{trans('all.category')}}</strong></label>
                                <select name="category_id" class="form-control" value="{{$project->category->id}}">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @if($category->id == $project->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="image"><strong>{{trans('all.image')}}</strong></label>
                                <input type="file" name="images[]" class="form-control" multiple required>
                            </div>
                            <div class="row">
                                @if($project->images)
                                    @foreach ($project->images as $image )
                                        <div class="col-3">
                                            <img style="width:100%" src="{{asset($image->url)}}" alt="{{$project->name}}">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <br>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{trans('all.update')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
