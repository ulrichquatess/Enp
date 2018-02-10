@extends('layouts.boxed')
@section('content')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
    <!-- general form elements disabled -->

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               {!! Form::model($team, ['route' => ['team.update', $team->id], 'method' => 'PATCH', 'files' =>true]) !!}
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                 {{ Form::text('name', null, ["class" => 'form-control']) }}
                     @if ($errors->has('name'))
                        <p class="help is-danger">{{$errors->first('name')}} </p>
                     @endif
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  {{ Form::textarea('description', null, ["class" => 'form-control']) }}
                     @if ($errors->has('description'))
                        <p class="help is-danger">{{$errors->first('description')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>email</label>
                 {{ Form::text('email', null, ["class" => 'form-control']) }}
                     @if ($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Facebook</label>
                 {{ Form::text('facebook', null, ["class" => 'form-control']) }}
                     @if ($errors->has('facebook'))
                        <p class="help is-danger">{{$errors->first('facebook')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Twitter</label>
                 {{ Form::text('twitter', null, ["class" => 'form-control']) }}
                     @if ($errors->has('twitter'))
                        <p class="help is-danger">{{$errors->first('twitter')}} </p>
                     @endif
                </div>

                <!-- text input -->
                <div class="form-group">
                  <label>Linkedin</label>
                 {{ Form::text('linkedin', null, ["class" => 'form-control']) }}
                     @if ($errors->has('linkedin'))
                        <p class="help is-danger">{{$errors->first('linkedin')}} </p>
                     @endif
                </div>

                <div class="form-group">
                  {{ Form::label('team_image', 'Upload Feautured Image:')}}
                  {{ Form::file('team_image')}}
                     @if ($errors->has('team_image'))
                        <p class="help is-danger">{{$errors->first('team_image')}} </p>
                     @endif
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('team.index') }}" class="btn btn-warning">Cancel</a>
              </div>

 </div>
    </div>
    </div>

{!! Form::close() !!}   
  </div>
@endsection