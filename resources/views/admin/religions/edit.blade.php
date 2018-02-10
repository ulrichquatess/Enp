@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Edit English Content</a></li>
    <li><a data-toggle="tab" href="#menu1">Edit French Content</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($religion, ['route' => ['religion.update', $religion->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                 {{ Form::text('title', null, ["class" => 'form-control']) }}
                     @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  {{ Form::textarea('content', null, ["class" => 'form-control']) }}
                     @if ($errors->has('content'))
                        <p class="help is-danger">{{$errors->first('content')}} </p>
                     @endif
                </div>


                <div class="form-group">
                  {{ Form::label('religion_image', 'Upload Feautured Image:')}}
                  {{ Form::file('religion_image')}}
                     @if ($errors->has('religion_image'))
                        <p class="help is-danger">{{$errors->first('religion_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('religion.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}   
  </div>
@endsection