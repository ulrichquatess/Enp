@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Technology Elements Here</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => 'technology.store', 'data-parsley-validate' => '', 'files' => true]) !!}

                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Name Here....">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter ..."></textarea>
                  @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('technology_image', 'Upload Feautured Image:')}}
                  {{ Form::file('technology_image')}}

                  @if ($errors->has('technology_image'))
                        <p class="help is-danger">{{$errors->first('technology_image')}} </p>
                     @endif
                </div>

                

  

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('entrepreneur.index') }}" class="btn btn-default">Return</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
 @endsection