@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
            @include('admin.layout.messages')

            <div id="dashboard">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="custom-panel">
                            <div class="custom-panel-heading">
                                <h4>Edit News</h4>
                            </div>

                            <div class="custom-panel-body">
                                <form action="{{route('post.update',$post->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <label> <span>Title :</span>
                                        <input type="text" name="title" value="{{$post->title}}"
                                               required="required">
                                    </label>
                                    <label> <span>Description :</span>
                                        <textarea name="description" cols="30" rows="5"
                                        >{{$post->description}}</textarea>
                                    </label>
                                    <input type="file" name="image">
{{--                                    <label> <span> Image :</span> <input type="file" name="image"/>--}}
{{--                                    </label>--}}

{{--                                    <label> <span>Image</span> <img src="{{asset('uploads/images/posts/'.$post->image)}}"--}}
{{--                                                                     width="300px"/> </label>--}}
                                    <br>
                                    <label> <span>Category  :</span>
                                        <select name="category_id">
                                            @foreach($categories as $category)

                                                <option
                                                    value="{{$category->id}}"

                                                {{$post->category_id==$category->id?'selected' : ' '}}>

                                                    {{$category->title}}</option>

                                        @endforeach
                                        <!--                                    <option value="0">No Category Found</option>-->
                                        </select>
                                    </label>

                                    <input type="submit" class="button tiny radius coral-bg right"
                                           value="Update Post">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
