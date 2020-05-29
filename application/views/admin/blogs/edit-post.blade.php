@extends('admin.layouts.master')
@section('editPost')
<!-- START CONTENT -->
<section class="wrapper main-wrapper">

    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <h1 class="title">Edit a Post</h1>
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{site_url('admin')}}"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="blo-blogs.html">Posts</a>
                    </li>
                    <li class="active">
                        <strong>Edit Post</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Basic Info</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <form action ="{{site_url('admin/update-post/'.$Post['post_id'])}}" method="post" role="form" enctype="multipart/form-data">

                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                            <div class="form-group">
                                <label class="form-label">Post Title:</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" value="{{$Post['title']}}" name="title" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="form-group">
                                <label class="form-label">Post Summary:</label>
                                <span class="desc"></span>
                                <div class="controls">
                                    <input type="text" value="{{$Post['summary']}}" name="summary" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="field-5">Post Content:</label>
                                <span class="desc"></span>
                                <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10" required>
                                    {{$Post['content']}}
                                </textarea><br>
                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="form-group">
                                    <label class="form-label" for="field-1">Post Image:</label>
                                    <span class="desc"></span>
                                    <div class="controls">
                                        <img src="{{asset($Post['image'])}}" style="margin: 5px 0 20px 0;" width="20%" height="20%">
                                        <input type="file" class="form-control" name="file_image">
                                        <input type="hidden" id="old" name="old" value="{{$Post['image']}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Post Categories:</label>
                                    <span class="desc"></span>
                                    <select name="category_id" class="form-control">
                                        @foreach($Categories as $category)
                                        <option value="{{$category->category_id}}" <?php if($category->category_id == $Post['category_id']) echo "selected";?>>
                                            {{$category->category_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Is Popular:</label>
                                    <span class="desc"></span>
                                    <select name="is_popular" class="form-control">
                                        <option value="0" <?php if($Post['is_popular'] == 0) echo "selected"; ?>>
                                            No
                                        </option>
                                        <option value="1" <?php if($Post['is_popular'] == 1) echo "selected"; ?>>
                                            Yes
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Is Category:</label>
                                    <span class="desc"></span>
                                    <select name="is_category" class="form-control" value="">
                                        <option value="0" <?php if($Post['is_category'] == 0) echo "selected"; ?>>
                                            No
                                        </option>
                                        <option value="1" <?php if($Post['is_category'] == 1) echo "selected"; ?>>
                                            Yes
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="field-5">Athor:</label>
                                    <span class="desc"></span>
                                    <select name="user_id" class="form-control" value="{{Post['category_name']}}">
                                        @foreach($Users as $user)
                                        <option value="{{$user->user_id}}" <?php if($user->user_id == $Post['user_id']) echo "selected";?>>
                                            {{$user->user_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                <div class="text-left">
                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>
               
            </div>
        </section>
    </div>
</section>
<!-- END CONTENT -['
@endsection