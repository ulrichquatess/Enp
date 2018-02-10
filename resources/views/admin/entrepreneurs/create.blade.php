@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Entrepreneur Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'entrepreneur.store', 'data-parsley-validate' => '', 'files' => true]) !!}

                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter  Name ...">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="Enter entrepreneur Title ...">
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
                  {{ Form::label('entrepreneur_image', 'Upload Feautured Image:')}}
                  {{ Form::file('entrepreneur_image')}}
                   @if ($errors->has('entrepreneur_image'))
                        <p class="help is-danger">{{$errors->first('entrepreneur_image')}} </p>
                     @endif
                </div>

                
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook Address Here....">
                  
                </div>

                <div class="form-group">
                  <label>Twitter</label>
                  <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter Twitter Address Here....">
                </div>

                <div class="form-group">
                  <label>Linkedin</label>
                  <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Enter Linkedin Address Here....">
                
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{ route('entrepreneur.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection