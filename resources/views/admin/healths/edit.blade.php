@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($health, ['route' => ['health.update', $health->id], 'method' => 'PATCH', 'files' =>true]) !!}
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
                  {{ Form::label('health_image', 'Upload Feautured Image:')}}
                  {{ Form::file('health_image')}}
                     @if ($errors->has('health_image'))
                        <p class="help is-danger">{{$errors->first('health_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('health.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}   
  </div>
@endsection