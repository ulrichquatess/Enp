@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">TeamSection</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::open(['route' => 'team.store', 'data-parsley-validate' => '', 'files' => true]) !!}
               <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name Here....">
                    @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <div class="form-group">
              <label>email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Here....">
                    @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="form-control" name="description" id="description" rows="3" placeholder="Entre ..."></textarea>
                  @if ($errors->has('description'))
                        <p class="help is-danger">{{$errors->first('description')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('team_image', 'Upload Feautured Image:')}}
                  {{ Form::file('team_image')}}

                  @if ($errors->has('team_image'))
                        <p class="help is-danger">{{$errors->first('team_image')}} </p>
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
                <a href="{{ route('team.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}
  </div>
@endsection