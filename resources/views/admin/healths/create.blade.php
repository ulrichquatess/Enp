@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Health Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'health.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Health Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Health Title ...">
                    @if ($errors->has('title'))
                        <p class="help is-danger">{{$errors->first('title')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3" placeholder="Entre ..."></textarea>
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
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('health.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection