@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Religion Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'religion.store', 'data-parsley-validate' => '', 'files' => true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Religion Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter Religion Title ...">
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
                  {{ Form::label('relgion_image', 'Upload Feautured Image:')}}
                  {{ Form::file('relgion_image')}}
                   @if ($errors->has('relgion_image'))
                        <p class="help is-danger">{{$errors->first('relgion_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('religion.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection