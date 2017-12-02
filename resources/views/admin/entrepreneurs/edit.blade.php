@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Business Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::model($entrepreneur, ['route' => ['entrepreneur.update', $entrepreneur->id], 'method' => 'PATCH', 'files' =>true]) !!}
                
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  {{ Form::text('name', null, ["class" => 'form-control']) }}
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>
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
                  {{ Form::label('entrepreneur_image', 'Upload Feautured Image:')}}
                  {{ Form::file('entrepreneur_image')}}
                    @if ($errors->has('entrepreneur_image'))
                        <p class="help is-danger">{{$errors->first('entrepreneur_image')}} </p>
                     @endif
                </div>

                 <div class="form-group">
                  <label>Facebook</label>
                  {{ Form::text('facebook', null, ["class" => 'form-control']) }}
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  {{ Form::text('twitter', null, ["class" => 'form-control']) }}
                </div>

                <div class="form-group">
                  <label>Linkedin</label>
                  {{ Form::text('linkedin', null, ["class" => 'form-control']) }}
                </div>

  

                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('entrepreneur.index') }}" class="btn btn-default">Cancel</a>
              </div>

{!! Form::close() !!}
 </div>
 </div>
@endsection